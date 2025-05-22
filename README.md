# Système d'Évaluation des Enseignements

Ce projet est une application web PHP pour la gestion et l'évaluation des enseignements dans un contexte académique. Il permet aux étudiants d'évaluer leurs cours et aux administrateurs de gérer l'ensemble du système d'évaluation.

## Fonctionnalités

### Interface Administrateur

- Gestion complète des professeurs par niveau (L1, L2, L3G, L3S, L3M)
- Administration des unités d'enseignement (UE)
  - Création, modification et suppression
  - Attribution aux professeurs et aux classes
- Gestion des éléments constitutifs (EC)
  - Association avec les UE
  - Attribution aux professeurs
- Visualisation des statistiques d'évaluation
- Affectation des enseignants aux cours

### Interface Étudiant

- Tableau de bord personnalisé par classe
- Système d'évaluation des enseignements
- Vue d'ensemble des UE et EC disponibles
- Accès aux formulaires d'évaluation

### Système d'Authentification

- Inscription des nouveaux utilisateurs
- Connexion sécurisée avec session
- Différenciation des rôles (administrateur/étudiant)
- Déconnexion sécurisée

## Structure de la Base de Données

Le système utilise une base de données MySQL avec les relations suivantes :

### Tables Principales

- `utilisateur` : Informations des utilisateurs (étudiants)
  - Code_user, Nom_User, Prenom_User, login, password, etc.
- `professeur` : Données des enseignants
  - Code_PROF, Nom_Prof, Prenom_Prof, etc.
- `classe` : Niveaux d'études
  - Code_CLASSE, Libelle_CLASSE
- `ue` (Unité d'Enseignement)
  - Code_UE, Libelle_UE
- `ec` (Élément Constitutif)
  - Code_EC, Libelle_EC

### Tables de Relations

- `evaluer` : Stockage des évaluations
- `enseigner` : Relations Prof-EC-UE
- `intervenir` : Relations Prof-UE-Classe
- `faire` : Attribution EC-Professeur

## Prérequis Techniques

- PHP 7.2 ou supérieur
- MySQL/MariaDB 10.3 ou supérieur
- Serveur Web (Apache recommandé)
- Extensions PHP requises:
  - PDO MySQL
  - Session
  - JSON

## Installation

1. Cloner le dépôt:

   ```bash
   git clone [URL_du_depot]
   ```

2. Importer la base de données:

   ```sql
   mysql -u root -p < db_evaluation_final.sql
   ```

3. Configurer la connexion base de données dans `src/auth/connexion.php`:

   ```php
   $bdd = new pdo('mysql:host=localhost;dbname=db_evaluation','root','');
   ```

4. Configurer le serveur web pour pointer vers le dossier `public/`

5. Accéder à l'application via le navigateur

## Structure du Projet

### Dossier `public/`

- `index.php` : Point d'entrée, gestion de l'authentification

### Dossier `src/`

#### `admin/`

- `prof/` : Gestion des professeurs
  - `AffichageProf.php` : Liste des professeurs par niveau
  - `FAjouterProf.php` : Ajout de professeur
  - `FModifierProf.php` : Modification des données
  - `SuppressionProf.php` : Suppression de professeur
- `ec/` & `ue/` : Même structure pour EC et UE
- `Statistiques.php` : Analyses et rapports

#### `auth/`

- `connexion.php` : Configuration BD et classe de connexion
- `deconnexion.php` : Gestion des déconnexions

#### `student/`

- `Accueil.php` : Dashboard étudiant
- `Evaluer.php` : Interface d'évaluation des enseignements

#### Racine `src/`

- `Inscription.php` : Création de compte étudiant

### Dossier `assets/`

- `css/`, `js/`, `img/`, `fonts/` : Ressources statiques
- Utilisation du template Light Bootstrap Dashboard

## Sécurité

- Validation des entrées utilisateur
- Protection contre les injections SQL (utilisation de PDO)
- Gestion des sessions sécurisée
- Hachage des mots de passe (à implémenter)

## Améliorations Futures

1. Ajout de la validation des données côté serveur
2. Implémentation du hachage des mots de passe
3. Ajout de rapports d'évaluation détaillés
4. Interface responsive pour mobile
5. API REST pour les futures extensions
