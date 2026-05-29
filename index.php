<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Touche pas au klaxon</title>
</head>
<body class=" container mt-3">
<div class="navbar border border-dark rounded-4 px-3 py-2">
    <h1>Touche Pas Au Klaxon</h1>
    <nav>
        <?php 
        $login = false;
        ?>

        <?php if ($login) : ?>
            <div class="d-flex justify-content-end align-items-center gap-3">
            <button class="btn btn-dark">
                Créer  un trajet
            </button>
            <p class="mb-0">Bonjour John Doe</p>
            <button class="btn btn-dark">
                Deconnexion
            </button> 
            </div>
            
       
        <?php else : ?>
            <button class="btn btn-dark">
                Connexion
            </button>
        
        <?php endif; ?>

        
        
    </nav>
</div>

            <?php if ($login): ?>
        <h2 class="fs-2">Trajets proposés</h2>
            <?php else : ?>
        <p class="fs-3 text-center">Pour obtenir plus d'informations sur un trajet, veuillez  vous  connecter</p>
        <?php endif; ?>

<div>
    <table class="border border-dark rounded-4 p-3 table">

    <thead>
        <tr class="table-dark">
            <th>Départ</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Destination</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Places</th>
            <?php if ($login) : ?>
            <th >Actions</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Paris</td>
            <td>29/05/2026 </td>
            <td>08:00</td>
            <td>Lyon</td>
            <td>29/05/2026</td>
            <td>12:00</td>
            <td>3</td>
            <?php if ($login) : ?>
            <td ></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>Lille</td>
            <td>30/05/2026</td>
            <td>09:00</td>
            <td>Bordeaux</td>
            <td>30/05/2026</td>
            <td>14:00</td>
            <td>2</td>
            <?php if ($login) : ?>
            <td ></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>Saint Denis</td>
            <td>02/06/2026</td>
            <td>15:00</td>
            <td>Sainte-Marie</td>
            <td>02/06/2026</td>
            <td>17:00</td>
            <td>1</td>
            <?php if ($login) : ?>
            <td ></td>
            <?php endif; ?>
        </tr>
    </tbody>
    <!-- <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>    
    </tfoot> -->
    </table>
    
</div>

<?php

echo "";

?>
<footer>
    <p class="text-center">© 2024 - CENEF - MVC PHP</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>