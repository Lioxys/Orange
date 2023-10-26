<h3>Ajout d'un nouveau Produit</h3>

<form method="post">
    <table>
            <tr>
                    <td> Nom du Produit </td>
                    <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                    <td> Prix achat </td>
                    <td><input type="text" name="*prix"></td>
            </tr>
            <tr>
                    <td> Etat</td>
                    <td><input type="text" name="état"></td>
            </tr>
            <tr>
                    <td> Desigantion </td>
                    <td><input type="date" name="catégorie"></td>
            </tr>
            <tr>
                    <td> Nom du client </td>
                    <td><select name="idclient">
            </tr>
            <tr>
                    <td> Date achat </td>
                    <td><select name="Dateachat">
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