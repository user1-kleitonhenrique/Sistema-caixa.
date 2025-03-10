<?php
include 'conexao.php'; // Arquivo de conexão com o PostgreSQL

try {
    $query = "SELECT id, nome, quantidade, preco FROM produtos"; // Seleciona os produtos
    $stmt = $conn->prepare($query);
    $stmt->execute();
    
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC); // Converte para array associativo
    
    echo json_encode($produtos);
} catch (PDOException $e) {
    echo json_encode(["error" => "Erro ao buscar produtos: " . $e->getMessage()]);
}
?>
