<?php
session_start();
require "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $senha = $_POST["senha"];

    $stmt = $mysqli->prepare("SELECT id, senha FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $hash);
        $stmt->fetch();

        if (password_verify($senha, $hash)) {
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit;
        }
    }
}

header("Location: login.php?erro=1");
exit;
?>