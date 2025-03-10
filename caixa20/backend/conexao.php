<?php
$host = "localhost";
$port = "5432";
$dbname = "SistemaCaixa20";
$user = "postgres";
$password = "pabd";  
try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(json_encode(["error" => "Erro ao conectar ao banco: " . $e->getMessage()]));
}
?>
