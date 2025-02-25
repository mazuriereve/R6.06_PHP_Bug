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
        <p>Vous êtes connecté en tant que <?= htmlspecialchars($_SESSION['username']) ?>.</p>
        <a href="logout.php">Se déconnecter</a>
    <?php else: ?>
        <a href="login.php">Se connecter</a>
    <?php endif; ?>
</body>
</html>
