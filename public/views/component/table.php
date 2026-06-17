<section>

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





</section>