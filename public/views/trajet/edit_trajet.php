
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Touche pas au Klaxon - Modifier un trajet</title>
</head>
<body class="container mt-3">

<header class="navbar border border-dark rounded-4 px-3 py-2">
            <h1>Touche pas au klaxon</h1>

        <nav >
            <div class= "d-flex justify-content-end align-items-center gap-3">

            <p class="mb-0">Bonjour 
                <?= $_SESSION['prenom'] ?> 
                <?= $_SESSION['nom'] ?>
            </p>

            <button class="btn btn-dark ">
                <a href="/logout" class="text-decoration-none text-white">
                    Déconnexion
                </a>
            </button> 
            </div>
    </nav>


</header>


<?php
$trajet = $trajet ?? [];
?>


<?php
$agences = $agences ?? [];
?>



<main class="container mt-4">

    <h1 class="fs-2 text-center mb-3">Modifier un trajet</h1>

    <section class="w-50 mx-auto border border-2 border-secondary rounded-3 p-4">
        <form method="POST" action="/update_trajet">

    <input type="hidden" name="id_trajet" value="<?= $trajet['id_trajet'] ?>">

    <label>Agence de départ</label>
    <select name="id_agences_depart" class="form-select">
        <?php foreach ($agences as $agence): ?>
            <option value="<?= $agence['id_agences'] ?>"
                <?= $agence['id_agences'] == $trajet['id_agences_depart'] ? 'selected' : '' ?>>
                <?= $agence['nom'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label>Agence d'arrivée</label>
    <select name="id_agences_arrivee" class="form-select">
        <?php foreach ($agences as $agence): ?>
            <option value="<?= $agence['id_agences'] ?>"
                <?= $agence['id_agences'] == $trajet['id_agences_arrivee'] ? 'selected' : '' ?>>
                <?= $agence['nom'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label>Date et heure de départ</label>
    <input type="datetime-local" name="date_heure_depart"
           value="<?= date('Y-m-d\TH:i', strtotime($trajet['date_heure_depart'])) ?>"
           class="form-control">

    <label>Date et heure d'arrivée</label>
    <input type="datetime-local" name="date_heure_arrivee"
           value="<?= date('Y-m-d\TH:i', strtotime($trajet['date_heure_arrivee'])) ?>"
           class="form-control">

    <label>Nombre total de places</label>
    <input type="number" name="nb_places_totale"
           value="<?= $trajet['nb_places_totale'] ?>"
           class="form-control">

    <label>Nombre de places restantes</label>
    <input type="number" name="nb_places_restante"
           value="<?= $trajet['nb_places_restante'] ?>"
           class="form-control">

    <button type="submit" class="btn btn-dark mt-3">
        Enregistrer
    </button>
</form>
    </section>

</main>

<footer>
    <p class="text-center">© 2024 - CENEF - MVC PHP</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>