# R6.06_PHP_Bug

## Description
Ce projet est un mini-site web en PHP avec une fonctionnalité de connexion et de déconnexion. Il utilise une base de données MySQL pour stocker les informations des utilisateurs.

## Structure du projet
- `index.php` : Page d'accueil du site.
- `login.php` : Page de connexion des utilisateurs.
- `logout.php` : Script de déconnexion des utilisateurs.
- `config.php` : Fichier de configuration pour la connexion à la base de données.
- `init_db.php` : Script pour initialiser la table des utilisateurs.
- `database.sql` : Script SQL pour créer la base de données et la table des utilisateurs.
- `style.css` : Feuille de style pour le site.

## Installation
1. Clonez le dépôt sur votre machine locale.
2. Importez le fichier `database.sql` dans votre serveur MySQL pour créer la base de données et la table des utilisateurs.
3. Configurez les informations de connexion à la base de données dans `config.php`.
4. Lancez le serveur web et accédez au site via votre navigateur.

## Utilisation
- Accédez à `index.php` pour voir la page d'accueil.
- Cliquez sur "Se connecter" pour accéder à la page de connexion.
- Entrez les informations d'identification pour vous connecter.
- Une fois connecté, vous serez redirigé vers la page d'accueil avec un message de bienvenue.
- Cliquez sur "Se déconnecter" pour vous déconnecter.

## Problèmes de sécurité
### Injection SQL
Le projet contient une faille de sécurité majeure : l'injection SQL. Dans `login.php`, les informations d'identification des utilisateurs sont directement insérées dans la requête SQL sans être correctement échappées ou préparées. Cela permet à un attaquant d'injecter du code SQL malveillant.


### Gestion de la session
Le script `logout.php` ne détruit pas complètement la session. Il utilise `unset($_SESSION['user_id']);` pour supprimer uniquement l'ID de l'utilisateur, mais les autres variables de session restent intactes. Cela peut entraîner des problèmes de sécurité si d'autres informations sensibles sont stockées dans la session.

## Conclusion
Ce projet est un bon point de départ pour comprendre les bases de la création d'un site web en PHP avec une base de données MySQL. Cependant, il est important de corriger les failles de sécurité mentionnées ci-dessus pour garantir la sécurité de l'application.