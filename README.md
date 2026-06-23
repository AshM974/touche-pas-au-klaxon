# Touche Pas Au Klaxon

Application de covoiturage interne permettant aux employés d'une entreprise de partager leurs trajets entre les différentes agences.

## Prérequis

- PHP 8.x
- Composer
- MySQL 
- WAMP, XAMPP ou tout autre environnement PHP/MySQL

## Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/AshM974/touche-pas-au-klaxon.git
```

### 2. Installer les dépendances

```bash
composer install
```

### 3. Créer la base de données

Créer une base de données nommée :

```sql
touche_pas_au_klaxon
```

### 4. Importer les scripts SQL

Importer les fichiers SQL fournis dans le dépôt.
  /public/Model/sql


### 5. Configurer l'environnement

Créer un fichier `.env` à la racine du projet.

Exemple :

```env
DB_HOST=localhost
DB_NAME=touche_pas_au_klaxon
DB_USER=3...
DB_PASSWORD=...
```

Adapter les informations selon votre configuration MySQL.

### 6. Lancer l'application

Déposer le projet dans le dossier de votre serveur local

Démarrer Apache et MySQL.

Accéder ensuite à l'application :

```txt
http://localhost/touche_pas_au_klaxon/
```

## Comptes de test

### Administrateur

Email : alexandre.martin@email.fr

Mot de passe : password123

### Utilisateur

Email : sophie.dubois@email.fr

Mot de passe : password456

## Fonctionnalités

### Visiteur

- Consultation des trajets disponibles
- Affichage des trajets triés par date de départ
- Affichage uniquement des trajets ayant des places disponibles

### Utilisateur connecté

- Consultation des détails d'un trajet
- Création d'un trajet
- Modification de ses propres trajets
- Suppression de ses propres trajets

### Administrateur

- Consultation des utilisateurs
- Gestion des agences
- Consultation de tous les trajets
- Suppression des trajets

---

## Architecture du projet

```text
public/
├── controllers/
├── models/
├── views/
├── components/
├── style/
└── index.php
```

---

## Qualité du code

Le projet a été vérifié à l'aide de :

- PHPStan
- PHPUnit

Les tests couvrent les principales opérations d'écriture en base de données.

---

## Technologies utilisées

- PHP
- MySQL
- Architecture MVC
- Bootstrap
- Composer
- PHP Dotenv
