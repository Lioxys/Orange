<h3>Ajout d'une nouvelle Intervention</h3>

<form method="post" action="traitement.php">
    <table>
        <tr>
            <td>Date de l'Intervention</td>
            <td> <input type="date" name="dateinter"></td>
        </tr>
        <tr>
            <td>Prix de l'Intervention</td>
            <td> <input type="number" step="0.01" name="prixinter"></td>
        </tr>
        <tr>
            <td>Rapport</td>
            <td> <textarea name="rapport"></textarea></td>
        </tr>
        <tr>
            <td>Produit</td>
            <td>
                <select name="idproduit">
                    <!-- Remplacez cette section par la liste de produits existants -->
                    <option value="1">Produit 1</option>
                    <option value="2">Produit 2</option>
                    <!-- Ajoutez d'autres options en fonction de vos produits -->
                </select>
            </td>
        </tr>
        <tr>
            <td>Technicien</td>
            <td>
                <select name="idtech">
                    <!-- Remplacez cette section par la liste de techniciens existants -->
                    <option value="1">Technicien 1</option>
                    <option value="2">Technicien 2</option>
                    <!-- Ajoutez d'autres options en fonction de vos techniciens -->
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="reset" name="Annuler" value="Annuler">
                <input type="submit" name="Valider" value="Valider">
            </td>
        </tr>
    </table>
</form>