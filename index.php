<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Bienvenue sur notre site</h1>
    <?php if (is_logged_in()): ?>
        <p>ㅤㅤㅤVous êtes connecté en tant que <?= htmlspecialchars($_SESSION['username']) ?>.</p>
        <a href="logout.php" class="connexion">ㅤㅤㅤSe déconnecter</a>
    <?php else: ?>
        <a href="login.php" class="connexion">ㅤㅤㅤSe connecter</a>
    <?php endif; ?>
</body>
</html>
