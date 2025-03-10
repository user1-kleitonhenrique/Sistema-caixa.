<?php
// Conexão com o PostgreSQL
$conn = new PDO("pgsql:host=localhost;dbname=Sistemacaixa20", "postgres", "pabd");

// Consulta com JOIN para exibir compras detalhadas
$query = $conn->query("
    SELECT compras.id, usuarios.nome AS usuario, produtos.nome AS produto, compras.quantidade, compras.data
    FROM compras
    JOIN usuarios ON compras.usuario_id = usuarios.id
    JOIN produtos ON compras.produto_id = produtos.id
    ORDER BY compras.data DESC
");

$vendas = $query->fetchAll(PDO::FETCH_ASSOC);


header("Content-Type: application/json");
echo json_encode($vendas);
?>


