<?php
// Inclure le fichier de configuration pour la connexion à la base de données et les fonctions
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
        <!-- Afficher le nom d'utilisateur si l'utilisateur est connecté -->
        <p>ㅤㅤㅤVous êtes connecté en tant que <?= htmlspecialchars($_SESSION['username']) ?>.</p>
        <!-- Lien pour se déconnecter -->
        <a href="logout.php" class="connexion">ㅤㅤㅤSe déconnecter</a>
    <?php else: ?>
        <!-- Lien pour se connecter -->
        <a href="login.php" class="connexion">ㅤㅤㅤSe connecter</a>
    <?php endif; ?>
</body>
</html>