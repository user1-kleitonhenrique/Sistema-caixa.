<?php
// Configuração do banco de dados
$host = "localhost";
$port = "5432";
$dbname = "Sistemacaixa20";
$user = "postgres";
$password = "pabd";

try {
    // Conectar ao PostgreSQL
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Buscar os produtos
    $stmt = $pdo->query("SELECT id, name, preco, quantidade FROM produtos");
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Retornar como JSON
    echo json_encode($produtos);
} catch (PDOException $e) {
    echo json_encode(["erro" => $e->getMessage()]);
}
?>
