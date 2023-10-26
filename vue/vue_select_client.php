<h3>Liste des client <h3>

<form method="post">
    Filtrer par : <input type="text" name="filter">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>

<br>
<table border="1">
    <tr>
        <td>ID CLIENT</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Adresse</td>
        <td>Email</td>

    </tr>

    <?php 
    if (isset($Lesclients)){
        foreach($Lesclients as $Unclient){
            echo "<tr>";
            echo "<td>".$Unclient['idclient']."</td>";
            echo "<td>".$Unclient['nom']."</td>";
            echo "<td>".$Unclient['prenom']."</td>";
            echo "<td>".$Unclient['adresse']."</td>";
            echo "<td>".$Unclient['email']."</td>";
            echo "<td>";
            echo "<a href='index.php?page=2&action=sup&idclient=".$unClient['idclient']."'><img src='images/supprimer.png' height='30' width='30'></a>";
            echo "<a href='index.php?page=2&action=edit&idclient=".$unClient['idclient']."'><img src='images/editer.png' height='30' width='30'></a>";
            echo "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>