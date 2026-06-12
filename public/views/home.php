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
            <button class="btn btn-dark" onclick="window.location.href='/login'">
                Connexion
            </button>
    </nav>
</div>

    <p class="fs-3 text-center">Pour obtenir plus d'informations sur un trajet, veuillez  vous  connecter</p>

<div>
    <table class="border border-dark rounded-4 p-3 table">
    <thead>
        <tr class="table-dark">
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

</body>
    </table>
    
</div>

<footer>
    <p class="text-center">© 2024 - CENEF - MVC PHP</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>