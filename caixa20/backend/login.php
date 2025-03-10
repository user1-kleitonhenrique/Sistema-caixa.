<?php
include 'conexao.php';

$data = json_decode(file_get_contents("php://input"), true);
$email = $data["email"];
$senha = md5($data["senha"]);

$stmt = $conn->prepare("SELECT id, nome, perfil FROM usuarios WHERE email = ? AND senha = ?");
$stmt->execute([$email, $senha]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    session_start();
    $_SESSION["user"] = $user;
    echo json_encode(["success" => true, "perfil" => $user["perfil"]]);
} else {
    echo json_encode(["error" => "Usuário ou senha inválidos!"]);
}
?>
