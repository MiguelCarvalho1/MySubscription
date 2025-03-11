<?php
include 'database.php'; // Inclui o arquivo de configuração do banco de dados

header('Content-Type: application/json'); // Define o cabeçalho como JSON

$data = json_decode(file_get_contents("php://input"), true); // Obtém dados da requisição
$action = $data['action'] ?? null;
$user_id = $data['user_id'] ?? null;

if (!$action || !$user_id) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'Ação ou ID de usuário ausente'
    ]);
    exit;
}

$pdo = connectToDatabase(); // Conecta ao banco de dados

// Função para buscar o perfil do usuário
function getUserProfile($pdo, $user_id) {
    $stmt = $pdo->prepare('SELECT id, name, email, phone FROM clients WHERE id = ?');
    $stmt->execute([$user_id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Função para atualizar o perfil do usuário
function updateUserProfile($pdo, $user_id, $name, $email, $phone) {
    $stmt = $pdo->prepare('UPDATE clients SET name = ?, email = ?, phone = ? WHERE id = ?');
    return $stmt->execute([$name, $email, $phone, $user_id]);
}

// Função para verificar se o email já está em uso
function isEmailTaken($pdo, $email, $user_id) {
    $stmt = $pdo->prepare('SELECT id FROM clients WHERE email = ? AND id != ?');
    $stmt->execute([$email, $user_id]);
    return (bool) $stmt->fetch();
}

// Função para verificar se o telefone já está em uso
function isPhoneTaken($pdo, $phone, $user_id) {
    $stmt = $pdo->prepare('SELECT id FROM clients WHERE phone = ? AND id != ?');
    $stmt->execute([$phone, $user_id]);
    return (bool) $stmt->fetch();
}

// Manipulação das ações
if ($action === 'getProfile') {
    $user = getUserProfile($pdo, $user_id);

    if ($user) {
        echo json_encode([
            'status' => 'success',
            'data' => $user
        ]);
    } else {
        http_response_code(404);
        echo json_encode([
            'status' => 'error',
            'message' => 'Usuário não encontrado'
        ]);
    }
} elseif ($action === 'updateProfile') {
    $name = trim($data['name'] ?? '');
    $email = filter_var($data['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = preg_replace('/\D/', '', $data['phone'] ?? '');

    if (empty($name) || empty($email) || empty($phone)) {
        http_response_code(400);
        echo json_encode([
            'status' => 'error',
            'message' => 'Todos os campos são obrigatórios'
        ]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode([
            'status' => 'error',
            'message' => 'Formato de email inválido'
        ]);
        exit;
    }

    if (isEmailTaken($pdo, $email, $user_id)) {
        http_response_code(409);
        echo json_encode([
            'status' => 'error',
            'message' => 'Email já está em uso'
        ]);
        exit;
    }

    if (isPhoneTaken($pdo, $phone, $user_id)) {
        http_response_code(409);
        echo json_encode([
            'status' => 'error',
            'message' => 'Telefone já está em uso'
        ]);
        exit;
    }

    if (updateUserProfile($pdo, $user_id, $name, $email, $phone)) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Perfil atualizado com sucesso'
        ]);
    } else {
        http_response_code(500);
        echo json_encode([
            'status' => 'error',
            'message' => 'Falha ao atualizar o perfil'
        ]);
    }
} else {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'Ação inválida'
    ]);
}
?>
