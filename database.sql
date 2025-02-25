-- Créer la base de données si elle n'existe pas déjà
CREATE DATABASE IF NOT EXISTS project_Jules_Clement;
USE project_Jules_Clement;

-- Table des utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insertion d’utilisateurs
INSERT INTO users (username, password) VALUES
('admin', 'password123'),
('user1', '123456');