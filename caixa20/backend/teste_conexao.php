<?php
$host = "localhost";  
$port = "5432";       
$dbname = "Sistemacaixa20";  // Nome atualizado do banco de dados
$user = "postgres";   
$password = "pabd";  

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "✅ Conexão bem-sucedida com o PostgreSQL!";
} catch (PDOException $e) {
    echo "❌ Erro na conexão: " . $e->getMessage();
}
?>
