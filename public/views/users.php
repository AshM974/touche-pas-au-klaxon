<?php

require_once __DIR__ . '/../../config/database.php';


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Touche pas au klaxon</title>
</head>
<body class=" container mt-3">
<div class="navbar border border-dark rounded-4 px-3 py-2">
    <h1>Touche pas au klaxon</h1>
    <nav>
            <div class="d-flex justify-content-end align-items-center gap-3">
            <button class="btn btn-dark">
                Créer  un trajet
            </button>
            <p class="mb-0">Bonjour John Doe</p>
            <button class="btn btn-dark">
                Deconnexion
            </button> 
            </div>
    </nav>
</div>
        <h2 class="fs-3">Trajets proposés</h2>
<div>

    <table class="border border-dark rounded-4 p-3 table">

    <thead>
        <tr class="table-dark">
            <th>Départ</th>
            <th>Date/Heure</th>
            <th>Destination</th>
            <th>Date/Heure</th>
            <th>Places</th>
            <th>Détails</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

<?php
$trajets = $trajets ?? [];
?>

<?php foreach ($trajets as $trajet): ?>

    <tr>
    <td><?= $trajet['nom_agence_depart'] ?></td>
    <td><?= $trajet['date_heure_depart'] ?></td>

    <td><?= $trajet['nom_agence_arrivee'] ?></td>
    <td><?= $trajet['date_heure_arrivee'] ?></td>

    <td><?= $trajet['nb_places_restante'] ?></td>
    <td>
        <button type="button" 
                class="btn btn-dark" 
                data-bs-toggle="modal" 
                data-bs-target="#detailsTrajet<?= $trajet['id_trajet'] ?>"
            >
                Voir Plus
        </button>
    </td>

  <td></td> 
</tr>

    <!-- MODAL DETAILS TRAJET -->

        <div class="modal fade" id="detailsTrajet<?= $trajet['id_trajet'] ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Détails du trajet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <p><strong>Conducteur :</strong> <?= $trajet['conducteur_prenom'] ?> <?= $trajet['conducteur_nom'] ?></p>
                        <p><strong>Téléphone :</strong> <?= $trajet['conducteur_telephone'] ?></p>
                        <p><strong>Email :</strong> <?= $trajet['conducteur_email'] ?></p>
                        <p><strong>Places totales :</strong> <?= $trajet['nb_places_totale'] ?></p>
                        <p><strong>Places restantes :</strong> <?= $trajet['nb_places_restante'] ?></p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Fermer
                        </button>
                    </div>

                </div>
            </div>
        </div>


<?php endforeach; ?>
    </tbody>
    
    </table>
    
</div>


<footer>
    <p class="text-center">© 2024 - CENEF - MVC PHP</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>