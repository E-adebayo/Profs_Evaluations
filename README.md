# Système d'Évaluation des Enseignements

Ce projet est une application web PHP pour la gestion et l'évaluation des enseignements dans un contexte académique. Il permet de gérer les professeurs, les classes, les unités d'enseignement (UE), les éléments constitutifs (EC), et les évaluations.

## Fonctionnalités

- Gestion des utilisateurs (inscription, connexion, administration)
- Gestion des professeurs
- Gestion des classes et des niveaux d'études
- Gestion des unités d'enseignement (UE) et des éléments constitutifs (EC)
- Système d'évaluation des enseignements
- Interface administrative
- Gestion des affectations des professeurs aux cours

## Structure de la Base de Données

Le système utilise une base de données MySQL avec les tables principales suivantes :

- `utilisateur` : Gestion des comptes utilisateurs
- `professeur` : Informations sur les enseignants
- `classe` : Différentes classes et niveaux d'études
- `ue` : Unités d'enseignement
- `ec` : Éléments constitutifs des UE
- `evaluer` : Stockage des évaluations
- `enseigner` : Liaison entre professeurs et enseignements
- `intervenir` : Gestion des interventions des professeurs
- `faire` : Attribution des EC aux professeurs

## Prérequis

- PHP 7.2 ou supérieur
- MySQL/MariaDB 10.3 ou supérieur
- Serveur Web (Apache recommandé)
- Extension PHP MySQL

## Installation

1. Cloner le projet dans votre répertoire web
2. Importer le fichier `db_evaluation.sql` dans votre base de données MySQL
3. Configurer les paramètres de connexion à la base de données dans le fichier `connexion.php`
4. Accéder à l'application via votre navigateur

## Connexion par défaut

- Login : admin
- Mot de passe : admin

## Structure du Projet

- `*.php` : Fichiers PHP principaux de l'application
- `css/` : Fichiers de style (utilisation de Bootstrap)
- `js/` : Scripts JavaScript
- `image/` : Ressources graphiques
- `db_evaluation.sql` : Script de création de la base de données
