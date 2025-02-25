<?php
session_start();

$host = 'localhost'; 
$dbname = 'project_Jules_Clement';
$username = 'root'; 
$password = 'root'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

// Fonction pour vérifier si un utilisateur est connecté
function is_logged_in() {
    return isset($_SESSION['user_id']);
}
?>