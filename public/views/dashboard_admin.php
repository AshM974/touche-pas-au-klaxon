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
            <button class="btn btn-secondary">
                Utilisateur
            </button>


            <button class="btn btn-secondary">
                Agences
            </button>


            <button class="btn btn-dark">
                Trajets
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
            <th>Date</th>
            <th>Heure</th>
            <th>Destination</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Places</th>
            <th >Actions</th>
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
            <td ></td>
        </tr>
        <tr>
            <td>Lille</td>
            <td>30/05/2026</td>
            <td>09:00</td>
            <td>Bordeaux</td>
            <td>30/05/2026</td>
            <td>14:00</td>
            <td>2</td>
            <td ></td>
        </tr>
        <tr>
            <td>Saint Denis</td>
            <td>02/06/2026</td>
            <td>15:00</td>
            <td>Sainte-Marie</td>
            <td>02/06/2026</td>
            <td>17:00</td>
            <td>1</td>
            <td ></td>
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


<footer>
    <p class="text-center">© 2024 - CENEF - MVC PHP</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>