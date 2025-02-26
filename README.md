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

## Problèmes de sécurité (corrigés)
### Injection SQL
Le projet contenait une faille de sécurité majeure : l'injection SQL. Dans `login.php`, les informations d'identification des utilisateurs sont directement insérées dans la requête SQL sans être correctement échappées ou préparées. Cela permet à un attaquant d'injecter du code SQL malveillant.Cependant il reste toujours un problème , en effet il n'y a pas de hachage de mot de passe , car les logins par défaut sont fournis dans le 'database.sql' donc pour résoudre ce problème il faut faire un formulaire d'inscription avec un hachage de mot de passe.


### Gestion de la session
Le script `logout.php` ne  détruisait pas complètement la session. Il utilisait `unset($_SESSION['user_id']);` pour supprimer uniquement l'ID de l'utilisateur, mais les autres variables de session restent intactes. Cela peut entraîner des problèmes de sécurité si d'autres informations sensibles sont stockées dans la session. POur résoudre le problème nous avons rajouter un session_destroy et une vérification et suppresion des cookies , pour retirer la session proprement de l'utilisateur.

## Conclusion
Corriger les bugs de ce projet était très intuitif et la documentation et les commentaires aident à la compréhension du code et nous fais gagner du temps sur la résolution de bugs.

## Bonus 
Nous avons rajouter une page d'inscription pour permettre de sécuriser le mot de passe et avoir son propre compte 
Nous allons refaire la refonte visuelle de la page d'accueil
