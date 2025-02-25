<?php
// config.php - Configuration de la base de données
$host = "localhost";
$dbname = "test_db";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>