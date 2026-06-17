<section>
<div>

<?php if (!isset($_SESSION['id_users'])) : ?>

    <!-- VISITEUR -->

    <table class="table table-bordered table-head">
        <thead>
            <tr>
                <th>Départ</th>
                <th>Date/Heure</th>
                <th>Destination</th>
                <th>Date/Heure</th>
                <th>Places</th>
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
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>

<?php else : ?>

    <!-- UTILISATEUR CONNECTÉ -->

    <table class="table table-bordered">
        <thead>
            <tr >
                <th>Départ</th>
                <th>Date/Heure</th>
                <th>Destination</th>
                <th>Date/Heure</th>
                <th>Places</th>
                <th>Actions</th>
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

                    <button class="btn btn-info">
                        Voir détails
                    </button>

                    <?php if (
                        $_SESSION['role'] === 'admin'
                        || $_SESSION['id_users'] == $trajet['id_users']
                    ) : ?>

                        <a href="#" class="btn btn-warning">
                            Modifier
                        </a>

                        <a href="#" class="btn btn-danger">
                            Supprimer
                        </a>

                    <?php endif; ?>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>

<?php endif; ?>

</div>
</section>