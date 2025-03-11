<?php
header("Content-Type: application/json");

// Função para enviar resposta de erro
function sendErrorResponse($statusCode, $message) {
    http_response_code($statusCode);
    echo json_encode(["message" => $message]);
    exit;
}

// Extrai o caminho da URL, ignorando a query string
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove o prefixo do caminho (se o arquivo estiver em uma subpasta)
$basePath = '/backend'; // Altere para o caminho base do seu projeto
$requestUri = substr($requestUri, strlen($basePath));

// Verifica o método HTTP
$method = $_SERVER['REQUEST_METHOD'];

// Mapeamento de rotas da API
$routes = [
    '/login' => 'src/login.php',
    '/verification' => 'src/verification.php',
    '/products' => 'src/products.php',
    '/profile' => 'src/profile.php',
];

// Verifica se a rota existe
if (array_key_exists($requestUri, $routes)) {
    // Verifica se o método HTTP é o correto para a rota
    if (($method === 'POST' && in_array($requestUri, ['/login', '/verification'])) || 
        ($method === 'GET' && in_array($requestUri, ['/products', '/profile']))) {
        require $routes[$requestUri];
    } else {
        sendErrorResponse(405, "Método não permitido para $requestUri");
    }
} else {
    sendErrorResponse(404, "Endpoint não encontrado");
}
?>
