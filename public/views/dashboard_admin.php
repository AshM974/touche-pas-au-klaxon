<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="/public/style/style.css">
    <title>Touche pas au klaxon</title>
</head>
<body class=" container mt-3 ">

    <?php require_once __DIR__ . '/component/header.php'; ?>

                <!-- Modal Liste Utilisateurs -->
                    <div class="modal fade" id="detailsUsers">
                        <div class="modal-dialog modal-xl">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Liste des Utilisateurs</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                                </div>
                                <div class="modal-body table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead >
                                            <tr >
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Téléphone</th>
                                                <th>Email</th>
                                                <th>Rôle</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                    <?php $users = $users ?? []; ?>
                                    <?php foreach ($users as $user): ?>
                                            <tr>
                                                <td><?=  $user['nom'] ?></td>
                                                <td><?=  $user['prenom'] ?></td>
                                                <td><?=  $user['telephone'] ?></td>
                                                <td><?=  $user['email'] ?></td>
                                                <td><?=  $user['role'] ?></td>
                                            </tr>  
                                    <?php endforeach; ?>
                                        </tbody>
                                
                                        <tfoot></tfoot>

                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>

                            </div>
                        </div>
                    </div>



                <!-- MODAL LISTE AGENCE -->
                    <div class="modal fade" id="detailsAgences">
                        <div class="modal-dialog">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Liste des Agences</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                                </div>
                                <div class="modal-body">
                                    <table class="border border-dark rounded-4 p-3 table">
                                        <thead>
                                            <tr >
                                                <th>Ville</th>
                                                <th><!-- Bouton Modifier/Supprimer --> </th>


                                            </tr>

                                        </thead>
                                        <tbody>
                                    <?php $agences = $agences ?? []; ?>
                                    <?php foreach ($agences as $agence): ?>
                                            <tr>
                                                <td><?=  $agence['nom'] ?></td>
                                                <td>
                                                    

                                                        <button
                                                            class="btn btn-outline-secondary btn-sm"
                                                            onclick="document.getElementById('edit<?= $agence['id_agences'] ?>').style.display='block';">
                                                            Modifier
                                                        </button>
                                               
                                                            <!-- Champ pour modification nom d'agence -->

                                                            <div id="edit<?= $agence['id_agences'] ?>" style="display:none;">

                                                                <form method="POST" action="/update_agence">

                                                                    <input
                                                                        type="hidden"
                                                                        name="id_agence"
                                                                        value="<?= $agence['id_agences'] ?>">

                                                                    <input
                                                                        type="text"
                                                                        name="nom"
                                                                        value="<?= $agence['nom'] ?>"
                                                                        class="form-control mb-2">

                                                                    <button type="submit" class="btn btn-outline-success btn-sm">
                                                                        Confirmer
                                                                    </button>

                                                                </form>

                                                            </div>

                                                        <button
                                                            class="btn btn-danger btn-sm"
                                                            onclick="document.getElementById('delete<?= $agence['id_agences'] ?>').style.display='block';">
                                                            Supprimer
                                                        </button>

                                                        <div id="delete<?= $agence['id_agences'] ?>" style="display:none;" class="mt-2">

                                                            <p class="text-danger">
                                                                Êtes-vous sûr de vouloir supprimer <?= $agence['nom'] ?> ?
                                                            </p>

                                                            <a href="/delete_agence?id=<?= $agence['id_agences'] ?>"
                                                            class="btn btn-danger btn-sm">
                                                                Oui
                                                            </a>

                                                            <button
                                                                class="btn btn-secondary btn-sm"
                                                                onclick="document.getElementById('delete<?= $agence['id_agences'] ?>').style.display='none';">
                                                                Annuler
                                                            </button>

                                                        </div>
                                                        </td>
                                            </tr>  
                                            
                                    <?php endforeach; ?>
                                        </tbody>
                                
                                        <tfoot></tfoot>

                                    </table>
                                    <div>
                                        <form method="POST" action="/add_agence">
                                        <input type="text" name="nom" class="form-control mb-2" placeholder="Nom de la Ville">
                                            <button class="btn btn-outline-dark"> Ajouter Ville</button>
                                        </form>

                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Fermer
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

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

                        <a href="/delete_trajet?id=<?= $trajet['id_trajet'] ?>" class="btn btn-danger">
                            Oui, supprimer
                        </a>
                    </div>

                </div>
            </div>
        </div>





    <?php endforeach; ?>

    </tbody>
    </table>
    
</div>

<?php require_once __DIR__ . '/component/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<?php if (isset($_GET['modal']) && $_GET['modal'] === 'agences') : ?>
<script>
    const modalAgences = new bootstrap.Modal(document.getElementById('detailsAgences'));
    modalAgences.show();

    history.replaceState({}, '', '/dashboard_admin');
</script>
<?php endif; ?>
</body>

</html>