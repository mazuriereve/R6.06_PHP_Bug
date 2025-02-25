<?php
// Inclure le fichier de configuration pour la connexion à la base de données
include 'config.php';

// Vérifier si la méthode de la requête est POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Exécuter une requête SQL pour récupérer l'utilisateur avec le nom d'utilisateur donné
    $stmt = $pdo->query("SELECT * FROM users WHERE username = '$username'");
    $user = $stmt->fetch();

    if ($user && $password === $user['password_hash']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        
        // Rediriger vers la page d'accueil
        header("Location: index.php");
        exit;
    } else {
        // Afficher un message d'erreur si les identifiants sont incorrects
        $error = "Identifiants incorrects";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="login-container">
    <h1>Connexion</h1>
    <?php if (isset($error)): ?>
        <!-- Afficher le message d'erreur -->
        <p class="error-message"><?= $error ?></p>
    <?php endif; ?>
    <form method="post">
        <label>Nom d'utilisateur :</label>
        <input type="text" name="username" required>
        
        <label>Mot de passe :</label>
        <input type="password" name="password" required>
        
        <button type="submit">Se connecter</button>
    </form>
    <a href="index.php">retourner à la page d'accueil</a>
</div>
</body>
</html>