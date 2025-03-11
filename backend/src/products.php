<?php
include 'database.php'; // Inclui o arquivo de configuração do banco de dados

header("Content-Type: application/json"); // Define o cabeçalho como JSON
header("Access-Control-Allow-Origin: *"); // Permite requisições de qualquer origem (alterar em produção)
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Permite métodos específicos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Permite cabeçalhos específicos

$pdo = connectToDatabase(); // Conecta ao banco de dados

try {
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($method) {
        case 'GET':
            // Busca detalhes do produto por ID ou lista todos os produtos
            if (isset($_GET['id'])) {
                $stmt = $pdo->prepare('SELECT * FROM products WHERE id = :id');
                $stmt->execute([':id' => $_GET['id']]);
                $product = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!$product) {
                    http_response_code(404);
                    echo json_encode(["status" => "error", "message" => "Produto não encontrado"]);
                    exit;
                }

                echo json_encode(["status" => "success", "data" => $product]);
            } else {
                $stmt = $pdo->query('SELECT * FROM products');
                $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode(["status" => "success", "data" => $products]);
            }
            break;

        case 'POST':
            // Adiciona um novo produto
            $data = json_decode(file_get_contents("php://input"), true);

            if (empty($data['name']) || empty($data['price'])) {
                http_response_code(400);
                echo json_encode(["status" => "error", "message" => "Nome e preço são obrigatórios"]);
                exit;
            }

            $stmt = $pdo->prepare('INSERT INTO products (name, description, price) VALUES (:name, :description, :price)');
            $stmt->execute([
                ':name' => filter_var($data['name'], FILTER_SANITIZE_STRING),
                ':description' => filter_var($data['description'] ?? '', FILTER_SANITIZE_STRING),
                ':price' => filter_var($data['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)
            ]);

            http_response_code(201);
            echo json_encode(["status" => "success", "message" => "Produto adicionado com sucesso"]);
            break;

        case 'PUT':
            // Atualiza um produto existente
            $data = json_decode(file_get_contents("php://input"), true);

            if (empty($data['id']) || empty($data['name']) || empty($data['price'])) {
                http_response_code(400);
                echo json_encode(["status" => "error", "message" => "ID, nome e preço são obrigatórios"]);
                exit;
            }

            $stmt = $pdo->prepare('UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id');
            $stmt->execute([
                ':id' => filter_var($data['id'], FILTER_SANITIZE_NUMBER_INT),
                ':name' => filter_var($data['name'], FILTER_SANITIZE_STRING),
                ':description' => filter_var($data['description'] ?? '', FILTER_SANITIZE_STRING),
                ':price' => filter_var($data['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)
            ]);

            echo json_encode(["status" => "success", "message" => "Produto atualizado com sucesso"]);
            break;

        case 'DELETE':
            // Exclui um produto
            $data = json_decode(file_get_contents("php://input"), true);

            if (empty($data['id'])) {
                http_response_code(400);
                echo json_encode(["status" => "error", "message" => "ID do produto é obrigatório"]);
                exit;
            }

            $stmt = $pdo->prepare('DELETE FROM products WHERE id = :id');
            $stmt->execute([':id' => filter_var($data['id'], FILTER_SANITIZE_NUMBER_INT)]);

            echo json_encode(["status" => "success", "message" => "Produto excluído com sucesso"]);
            break;

        default:
            http_response_code(405);
            echo json_encode(["status" => "error", "message" => "Método não permitido"]);
            break;
    }
} catch (PDOException $e) {
    error_log($e->getMessage()); // Loga o erro para depuração
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Erro no banco de dados"]);
} catch (Exception $e) {
    error_log($e->getMessage()); // Loga o erro para depuração
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Erro interno"]);
}
?>
