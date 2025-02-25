<?php
// Démarrer la session pour gérer les variables de session
session_start();

// Informations de connexion à la base de données
$host = 'localhost'; 
$dbname = 'project_jules_clement';
$username = 'root'; 
$password = 'root'; 

try {
    // Créer une nouvelle instance de PDO pour la connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurer PDO pour lancer des exceptions en cas d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Arrêter l'exécution du script et afficher un message d'erreur en cas de problème de connexion
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

// Fonction pour vérifier si un utilisateur est connecté
function is_logged_in() {
    // Retourner vrai si l'identifiant de l'utilisateur est défini dans la session
    return isset($_SESSION['user_id']);
}
?>