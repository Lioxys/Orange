<h3>Liste des Interventions</h3>

<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="filter" value="Filtrer">
</form>
<br>
<table border="1">
    <tr>
        <td>ID Intervention</td>
        <td>Date de l'Intervention</td>
        <td>Prix de l'Intervention</td>
        <td>Rapport</td>
        <td>Produit</td>
        <td>Technicien</td>
    </tr>
    <?php
    if (isset($LesInterventions)){
        foreach($LesInterventions as $uneIntervention){
            echo "<tr>";
            echo "<td>".$uneIntervention['idinter']."</td>";
            echo "<td>".$uneIntervention['dateinter']."</td>";
            echo "<td>".$uneIntervention['prixinter']."</td>";
            echo "<td>".$uneIntervention['rapport']."</td>";
            echo "<td>".$uneIntervention['idproduit']."</td>";
            echo "<td>".$uneIntervention['idtech']."</td>";
            echo "</tr>";
        }
    }
    ?>
</table>