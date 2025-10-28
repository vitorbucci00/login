<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login - Painel Série A</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>🏆 Login - Campeonato Brasileiro Série A</h2>

    <form action="authenticate.php" method="POST">
        <label>Usuário:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>

    <?php
    if (isset($_GET['erro'])) {
        echo "<p style='color:red;'>Usuário ou senha incorretos!</p>";
    }
    ?>
</body>
</html>
