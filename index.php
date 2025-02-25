

<?php
// index.php - Page d'accueil
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenue sur notre mini-site</h1>
    <?php if (isset($_SESSION['user'])): ?>
        <p>Bienvenue, <?php echo $_SESSION['user']; ?>! <a href='logout.php'>Déconnexion</a></p>
    <?php else: ?>
        <p><a href='login.php'>Connexion</a></p>
    <?php endif; ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        Nom d'utilisateur : <input type='text' name='username'><br>
        Mot de passe : <input type='password' name='password'><br>
        <button type='submit'>Connexion</button>
    </form>
</body>
</html>



