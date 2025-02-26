<?php
// Démarrer la session
session_start();

// Détruire toutes les variables de session
$_SESSION = [];

// Supprimer le cookie de session si utilisé
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Détruire la session
session_destroy();

// On met un messgae afin de vérifier si la session est bien détruite
if (empty($_SESSION)) {
    echo "Session détruite avec succès.";
} else {
    echo "La session existe encore.";
}

// Rediriger vers la page d'accueil
header("Location: index.php");
exit;
?>
