<?php
// Démarrer la session pour accéder aux variables de session
session_start();

// Supprimer l'identifiant de l'utilisateur de la session
unset($_SESSION['user_id']);

// Rediriger l'utilisateur vers la page d'accueil
header("Location: index.php");
exit;
?>