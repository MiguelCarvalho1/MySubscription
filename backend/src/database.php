<?php
include 'config.php'; // Inclui o arquivo de configuração com as constantes de conexão

header("Content-Type: application/json"); // Define o cabeçalho como JSON

// Função para conectar ao servidor sem especificar o banco de dados
function connectToServer() {
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        error_log("Server connection error: " . $e->getMessage());
        throw new Exception("Erro na conexão com o servidor.");
    }
}

// Função para criar o banco de dados, se não existir
function createDatabase($pdo) {
    try {
        $pdo->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME . " CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    } catch (PDOException $e) {
        error_log("Database creation error: " . $e->getMessage());
        throw new Exception("Erro na criação do banco de dados.");
    }
}

// Função para conectar ao banco de dados específico
function connectToDatabase() {
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        error_log("Database connection error: " . $e->getMessage());
        throw new Exception("Erro na conexão com o banco de dados.");
    }
}

// Função para criar as tabelas, se não existirem
function createTables($pdo) {
    $tables = [
        "clients" => "CREATE TABLE IF NOT EXISTS clients (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) UNIQUE NOT NULL,
            phone VARCHAR(15) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",
        
        "products" => "CREATE TABLE IF NOT EXISTS products (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            description TEXT,
            price DECIMAL(10,2) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",
        
        "subscriptions" => "CREATE TABLE IF NOT EXISTS subscriptions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            client_id INT NOT NULL,
            product_id INT NOT NULL,
            subscription_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (client_id) REFERENCES clients(id) ON DELETE CASCADE,
            FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4"
    ];
    
    foreach ($tables as $name => $sql) {
        try {
            $pdo->exec($sql);
        } catch (PDOException $e) {
            error_log("Table '$name' creation error: " . $e->getMessage());
            throw new Exception("Erro na criação da tabela '$name'.");
        }
    }
}

try {
    $serverConnection = connectToServer(); // Conecta ao servidor
    createDatabase($serverConnection); // Cria o banco de dados, se necessário
    $databaseConnection = connectToDatabase(); // Conecta ao banco de dados específico
    createTables($databaseConnection); // Cria as tabelas, se necessário
    echo json_encode(["message" => "Banco de dados e tabelas criados/verificados com sucesso!"]);
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
