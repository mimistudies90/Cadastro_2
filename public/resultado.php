<?php
session_start();

if (!isset($_SESSION['login_sucesso'])) {
    header('Location: login.php');
    exit();
}

$login_sucesso = $_SESSION['login_sucesso'];
unset($_SESSION['login_sucesso']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Login</title>
    <link rel="stylesheet" href="assets/styles/resultado.css">
    <link rel="stylesheet" href="assets/styles/button.css">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <div class="container">
        <?php if ($login_sucesso): ?>
            <div class="result success">
                <h1>Login bem-sucedido! <span>:)</span></h1>
                <p class="welcome-message">Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</p>
            </div>
        <?php else: ?>
            <div class="result error">
                <h1>Email ou senha incorretos <span>:(</span></h1>
                <a href="login.php" class="btn btn-secondary">Tentar novamente</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
