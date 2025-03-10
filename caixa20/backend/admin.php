<?php
// Conexão com o PostgreSQL
$conn = new PDO("pgsql:host=localhost;dbname=Sistemacaixa20", "postgres", "pabd");

// Obtendo usuários
$query = $conn->query("SELECT id, nome, email FROM usuarios");
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

// Retorna os usuários em JSON
header("Content-Type: application/json");
echo json_encode($usuarios);
?>

