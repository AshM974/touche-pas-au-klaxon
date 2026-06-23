<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="/touche_pas_au_klaxon/public/style/style.css">

    <title>Touche pas au klaxon</title>
</head>
<body class="container mt-3">
<?php require_once __DIR__ . '/component/header.php'; ?>
<h2 class="fs-3">Trajets proposés</h2>

<?php
$trajets = $trajets ?? [];
?>

<?php require __DIR__ . '/component/table.php'; ?>

<?php foreach ($trajets as $trajet): ?>
        

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


    <!-- MODAL CONFIRMATION SUPPRESSION -->

        <div class="modal fade" id="deleteModal<?= $trajet['id_trajet'] ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Confirmer la suppression</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        Êtes-vous sûr de vouloir supprimer ce trajet ?
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Annuler
                        </button>

                        <a href="/touche_pas_au_klaxon/delete_trajet?id=<?= $trajet['id_trajet'] ?>" class="btn btn-danger">
                            Oui, supprimer
                        </a>
                    </div>

                </div>
            </div>
        </div>


<?php endforeach; ?>


<?php require_once __DIR__ . '/component/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>