<?php
// init_db.php - Initialisation de la table users
try {
    $conn->exec("CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL
    )");
    echo "Table users créée avec succès.";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>