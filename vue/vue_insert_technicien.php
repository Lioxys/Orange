<h3>Ajout d'un nouveau Technicien</h3>

<form method="post" action="traitement.php">
    <table>
        <tr>
            <td>Nom</td>
            <td> <input type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td> <input type="text" name="prenom"></td>
        </tr>
        <tr>
            <td>Qualification</td>
            <td> <input type="text" name="qualification"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> <input type="text" name="email"></td>
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