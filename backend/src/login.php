<?php
include 'database.php';

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); 

$data = json_decode(file_get_contents("php://input"), true);
$email = filter_var($data['email'] ?? '', FILTER_SANITIZE_EMAIL);
$password = $data['password'] ?? ''; // Senha fornecida pelo usuário

/**
 * Função para enviar resposta JSON
 */
function sendResponse($status, $message, $extraData = [])
{
    http_response_code($status);
    echo json_encode(array_merge([
        'status' => $status === 200 ? 'success' : 'error',
        'message' => $message
    ], $extraData));
    exit;
}

// Validação inicial
if (empty($email) || empty($password)) {
    sendResponse(400, 'Email e senha são obrigatórios');
}

try {
    $pdo = connectToDatabase();

    // Busca o usuário pelo email
    $stmt = $pdo->prepare("SELECT id, password FROM clients WHERE email = :email");
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se o usuário existe
    if (!$user) {
        sendResponse(404, 'Usuário não encontrado');
    }

    // Verifica se a senha está correta
    if (!password_verify($password, $user['password'])) {
        sendResponse(401, 'Senha incorreta');
    }

    // Se o email e a senha estiverem corretos, redireciona para a verificação do código
    sendResponse(200, 'Email e senha válidos', [
        'user_id' => $user['id'] // Envia o ID do usuário para a próxima etapa
    ]);

} catch (Exception $e) {
    error_log($e->getMessage()); // Log the error for debugging
    sendResponse(500, 'Erro interno do servidor');
}
?>