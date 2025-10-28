<?php
$mysqli = new mysqli("localhost", "root", "", "seriea");

if ($mysqli->connect_errno) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

$usuario = "admin";
$senha = password_hash("12345", PASSWORD_DEFAULT);

$stmt = $mysqli->prepare("INSERT INTO usuarios (username, senha) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $senha);
$stmt->execute();

echo "Usuário 'admin' criado com sucesso!";
?>