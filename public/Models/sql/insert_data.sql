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
('Fontaine','Louis','0655667788','louis.fontaine@email.fr','password963','user'),
('Chevalier','Clara','0788990011','clara.chevalier@email.fr','password159','user'),
('Robin','Nicolas','0644332211','nicolas.robin@email.fr','password478','user'),
('Gauthier','Marine','0677889922','marine.gauthier@email.fr','password632','user'),
('Fournier','Pierre','0722334455','pierre.fournier@email.fr','password357','user'),
('Girard','Sarah','0688665544','sarah.girard@email.fr','password698','user'),
('Lambert','Hugo','0611223366','hugo.lambert@email.fr','password214','user'),
('Masson','Julie','0733445566','julie.masson@email.fr','password931','user'),
('Henry','Arthur','0666554433','arthur.henry@email.fr','password179','user');