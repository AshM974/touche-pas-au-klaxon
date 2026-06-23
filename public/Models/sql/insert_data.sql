USE touche_pas_au_klaxon;

INSERT INTO agences (nom) VALUES
('Paris'),
('Lyon'),
('Marseille'),
('Toulouse'),
('Nice'),
('Nantes'),
('Strasbourg'),
('Montpellier'),
('Bordeaux'),
('Lille'),
('Rennes'),
('Reims');

INSERT INTO users (
    nom,
    prenom,
    telephone,
    email,
    mot_de_passe,
    role
) VALUES
('Martin','Alexandre','0612345678','alexandre.martin@email.fr','password123','admin'), 
('Dubois','Sophie','0698765432','sophie.dubois@email.fr','password456','user'),
('Bernard','Julien','0622446688','julien.bernard@email.fr','password789','user'),
('Moreau','Camille','0611223344','camille.moreau@email.fr','password321','user'),
('Lefèvre','Lucie','0777889900','lucie.lefevre@email.fr','password654','user'),
('Leroy','Thomas','0655443322','thomas.leroy@email.fr','password987','user'),
('Roux','Chloé','0633221199','chloe.roux@email.fr','password369','user'),
('Petit','Maxime','0766778899','maxime.petit@email.fr','password258','user'),
('Garnier','Laura','0688776655','laura.garnier@email.fr','password147','user'),
('Dupuis','Antoine','0744556677','antoine.dupuis@email.fr','password741','user'),
('Lefebvre','Emma','0699887766','emma.lefebvre@email.fr','password852','user'),
('Fontaine','Louis','0655667788','louis.fontaine@email.fr','password963','admin'),
('Chevalier','Clara','0788990011','clara.chevalier@email.fr','password159','user'),
('Robin','Nicolas','0644332211','nicolas.robin@email.fr','password478','user'),
('Gauthier','Marine','0677889922','marine.gauthier@email.fr','password632','user'),
('Fournier','Pierre','0722334455','pierre.fournier@email.fr','password357','user'),
('Girard','Sarah','0688665544','sarah.girard@email.fr','password698','user'),
('Lambert','Hugo','0611223366','hugo.lambert@email.fr','password214','user'),
('Masson','Julie','0733445566','julie.masson@email.fr','password931','user'),
('Henry','Arthur','0666554433','arthur.henry@email.fr','password179','admin');



INSERT INTO `trajet` (`id_trajet`, `id_users`, `id_agences_depart`, `id_agences_arrivee`, `date_heure_depart`, `date_heure_arrivee`, `nb_places_totale`, `nb_places_restante`) VALUES
(1, 1, 1, 2, '2026-06-05 08:00:00', '2026-06-05 12:00:00', 4, 3),
(2, 2, 2, 3, '2026-06-06 09:00:00', '2026-06-06 13:30:00', 5, 0),
(3, 3, 10, 1, '2026-06-07 07:30:00', '2026-06-07 11:00:00', 4, 2),
(4, 4, 9, 6, '2026-06-08 10:00:00', '2026-06-08 13:00:00', 3, 1),
(5, 5, 7, 12, '2026-06-09 08:15:00', '2026-06-09 10:45:00', 4, 0),
(6, 6, 4, 5, '2026-06-10 14:00:00', '2026-06-10 17:00:00', 5, 4),
(7, 7, 6, 11, '2026-06-11 09:00:00', '2026-06-11 11:30:00', 4, 1),
(8, 8, 3, 8, '2026-06-12 06:45:00', '2026-06-12 10:15:00', 3, 0),
(9, 9, 11, 10, '2026-06-13 08:30:00', '2026-06-13 15:00:00', 5, 2),
(10, 10, 5, 1, '2026-06-14 07:00:00', '2026-06-14 15:00:00', 4, 4),
(11, 1, 8, 10, '2026-06-05 02:00:00', '2026-06-06 09:00:00', 8, 8),
(12, 2, 9, 3, '2026-06-16 15:45:00', '2026-06-16 18:45:00', 4, 4),
(16, 1, 4, 7, '2026-07-06 17:47:00', '2026-07-07 17:47:00', 7, 7),
(22, 2, 18, 9, '2026-06-27 15:08:00', '2026-06-27 20:13:00', 4, 4),
(19, 2, 1, 15, '2026-06-12 09:53:00', '2026-06-15 17:53:00', 2, 2),
(20, 2, 1, 15, '2026-06-12 09:53:00', '2026-06-15 17:53:00', 2, 2),
(21, 2, 1, 15, '2026-06-12 09:53:00', '2026-06-15 17:53:00', 2, 2);
