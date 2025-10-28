<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "seriea";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    die("Erro na conexão: " . $mysqli->connect_error);
}
?>