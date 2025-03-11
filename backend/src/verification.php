<?php
require 'vendor/autoload.php'; // Certifique-se de que o autoload do Composer está incluído
include 'config.php'; // Inclui as configurações do banco de dados ou outras configurações necessárias

use Whapi\Client;
use Whapi\Message;

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Permite requisições de qualquer origem

// Função para enviar resposta JSON
function sendResponse($status, $message, $extraData = [])
{
    http_response_code($status);
    echo json_encode(array_merge([
        'status' => $status === 200 ? 'success' : 'error',
        'message' => $message,
        'status_code' => $status
    ], $extraData));
    exit;
}

// Validação do input
$data = json_decode(file_get_contents("php://input"), true);
$phoneNumber = preg_replace('/\D/', '', $data['phone'] ?? ''); // Remove caracteres não numéricos

if (empty($phoneNumber)) {
    sendResponse(400, 'O número de telefone não pode estar vazio');
}

try {
    // Gera um código de verificação aleatório
    $verificationCode = rand(100000, 999999);

    // Configura o cliente da API do Whapi
    $client = new Client([
        'bearer' => API_TOKEN, 
    ]);

    // Cria a mensagem
    $message = new Message();
    $message->setTo($phoneNumber)
            ->setText("Seu código de verificação é: $verificationCode");

    // Envia a mensagem
    $response = $client->sendMessage($message);

    // Verifica se a mensagem foi enviada com sucesso
    if ($response['status'] !== 'success') {
        throw new Exception('Erro ao enviar a mensagem: ' . ($response['message'] ?? 'Erro desconhecido'));
    }

    // Retorna o código de verificação para ser usado na comparação
    sendResponse(200, 'Código de verificação enviado com sucesso', [
        'code' => $verificationCode
    ]);

} catch (Exception $e) {
    sendResponse(500, 'Erro interno do servidor: ' . $e->getMessage());
}
?>