<h3>Liste des produits <h3>

<form method="post">
    Filtrer par : <input type="text" name="filter">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>

<br>
<table border="1">
    <tr>
        <td>ID PRODUIT</td>
        <td>Designation </td>
        <td>Prix achat </td>
        <td>Date achat </td>
        <td>idclient </td>
 
    </tr>

    <?php 
    if (isset($Lesproduits)){
        foreach($Lesproduits as $Unproduit){
            echo "<tr>";
            echo "<td>".$Unproduit['idproduit']."</td>";
            echo "<td>".$Unproduit['designation']."</td>";
            echo "<td>".$Unproduit['prixachat']."</td>";
            echo "<td>".$Unproduit['dateAchat']."</td>";
            echo "<td>".$Unproduit['idclient']."</td>";
        }
    }
    ?>
</table>