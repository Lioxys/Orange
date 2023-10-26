<h3>Liste des Techniciens</h3>

<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="filter" value="Filtrer">
</form>
<br>
<table border="1">
    <tr>
        <td>ID Technicien</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Qualification</td>
        <td>Email</td>
    </tr>
    <?php
    if (isset($LesTechniciens)){
        foreach($LesTechniciens as $unTechnicien){
            echo "<tr>";
            echo "<td>".$unTechnicien['idtech']."</td>";
            echo "<td>".$unTechnicien['nom']."</td>";
            echo "<td>".$unTechnicien['prenom']."</td>";
            echo "<td>".$unTechnicien['qualification']."</td>";
            echo "<td>".$unTechnicien['email']."</td>";
            echo "</tr>";
        }
    }
    ?>
</table>