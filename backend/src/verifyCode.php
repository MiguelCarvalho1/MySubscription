<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$data = json_decode(file_get_contents("php://input"), true);
$verificationCode = preg_replace('/\D/', '', $data['code'] ?? ''); // Garante que o código é apenas numérico
$receivedCode = preg_replace('/\D/', '', $data['receivedCode'] ?? ''); // Código recebido via Whapi

/**
 * Função para enviar resposta JSON
 */
function sendResponse($status, $message, $extraData = [])
{
    http_response_code($status);
    echo json_encode(array_merge(['status' => $status === 200 ? 'success' : 'error', 'message' => $message, 'status_code' => $status], $extraData));
    exit;
}

// Validação inicial
if (empty($verificationCode) || empty($receivedCode)) {
    sendResponse(400, 'Código não pode estar vazio');
}

// Compara o código de verificação enviado com o recebido
if ($verificationCode === $receivedCode) {
    sendResponse(200, 'Verificação bem-sucedida');
} else {
    sendResponse(401, 'Código inválido');
}
