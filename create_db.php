<?php
// create_db.php - Création de la base de données
try {
    $pdo = new PDO("mysql:host=$host", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("CREATE DATABASE IF NOT EXISTS test_db");
    echo "Base de données créée avec succès.";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>