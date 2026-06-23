
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="/public/style/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Touche pas au Klaxon - Créer un trajet</title>
</head>
<body class="container mt-3">

<?php require_once __DIR__ . '/../component/header.php'; ?>



<?php
$agences = $agences ?? [];
?>

<main class="container mt-4">

    <h1 class="fs-2 text-center mb-3">Créer un trajet</h1>

    <section class="w-50 mx-auto border border-2 border-secondary rounded-3 p-4">
        <form method="POST" action="/ajout_trajet">

            <div class="mb-3">
                <label class="form-label">Agence de départ</label>
                <select name="id_agences_depart" class="form-select" required>
                    <option value="">Choisir une agence</option>
                    <?php foreach ($agences as $agence): ?>
                        <option value="<?= $agence['id_agences'] ?>">
                            <?= $agence['nom'] ?>
                        </option>
                    <?php endforeach; ?> 
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Agence d'arrivée</label>
                <select name="id_agences_arrivee" class="form-select" required>
                    <option value="">Choisir une agence</option>
                    <?php foreach ($agences as $agence): ?>
                        <option value="<?= $agence['id_agences'] ?>">
                            <?= $agence['nom'] ?>
                        </option>
                    <?php endforeach; ?> 
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Date et heure de départ</label>
                <input type="datetime-local" name="date_heure_depart" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Date et heure d'arrivée</label>
                <input type="datetime-local" name="date_heure_arrivee" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre total de places</label>
                <input type="number" name="nb_places_totale" class="form-control" min="1" required>
            </div>

            

            <div class="text-center">
                <button type="submit" class="btn btn-dark">
                    Créer un trajet
                </button>
            </div>

        </form>

    </section>

</main>

<?php require_once __DIR__ . '/../component/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>