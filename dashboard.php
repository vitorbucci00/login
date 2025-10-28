<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Painel Série A</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Você está logado no painel da <b>Série A do Campeonato Brasileiro</b> ⚽</p>

    <h3>Classificação (Exemplo)</h3>
    <table border="1" align="center" cellpadding="5">
        <tr><th>Posição</th><th>Clube</th><th>Pontos</th></tr>
        <tr><td>1</td><td>Botafogo</td><td>65</td></tr>
        <tr><td>2</td><td>Palmeiras</td><td>63</td></tr>
        <tr><td>3</td><td>Flamengo</td><td>62</td></tr>
        <tr><td>4</td><td>Grêmio</td><td>60</td></tr>
        <tr><td>5</td><td>São Paulo</td><td>58</td></tr>
    </table>

    <br>
    <a href="logout.php">Sair</a>
</body>
</html>