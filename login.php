<?php
// login.php - Page de connexion
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    // Sécurité faible : Pas de hashage du mot de passe !
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
    $stmt->execute();
    if ($stmt->fetch()) {
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit();
    } else {
        echo "Identifiants incorrects";
    }
}
?>
