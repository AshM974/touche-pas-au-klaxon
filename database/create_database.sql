CREATE DATABASE IF NOT EXISTS touche_pas_au_klaxon
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE touche_pas_au_klaxon;

CREATE TABLE users (
    id_users INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    telephone VARCHAR(20) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL DEFAULT 'user'
);

CREATE TABLE agences (
    id_agences INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE trajet (
    id_trajet INT AUTO_INCREMENT PRIMARY KEY,
    id_users INT NOT NULL,
    id_agences_depart INT NOT NULL,
    id_agences_arrivee INT NOT NULL,
    date_heure_depart DATETIME NOT NULL,
    date_heure_arrivee DATETIME NOT NULL,
    nb_places_totale INT NOT NULL,
    nb_places_restante INT NOT NULL,

    CONSTRAINT fk_trajet_users
        FOREIGN KEY (id_users)
        REFERENCES users(id_users),

    CONSTRAINT fk_trajet_agences_depart
        FOREIGN KEY (id_agences_depart)
        REFERENCES agences(id_agences),

    CONSTRAINT fk_trajet_agences_arrivee
        FOREIGN KEY (id_agences_arrivee)
        REFERENCES agences(id_agences)
);