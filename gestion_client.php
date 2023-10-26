<h2>Gestion des clients</h2>

<?php

    
    $laClasse = null;
    
    require_once("modele/modele.class.php");
    if (isset($_GET['action']) && isset($_GET['idclient'])){
        $action = $_GET['action'];
        $idclient = $_GET['idclient'];
        switch($action){
            case "sup": 
            $unControleur->deleteClient($idclient);
            break;
            case "edit":
            $leClient = $unControleur->selectWhereClient($idclient);
            break;
        }
    } 
    require_once("vue/vue_insert_client.php");
    if (isset($_POST['Valider'])){
        //verification des données
        if ($unControleur->testVide($_POST)){
            echo "<br> Veuillez remplir les champs.";
        }else{
        //insertion de la nouvelle classe dans la BDD
            $unControleur->insertClient($_POST);
        }
    }

    if (isset($_POST['Modifier'])){
        //verification des données
        if ($unControleur->testVide($_POST)){
            echo "<br> Veuillez remplir les champs.";
        }else{
        //update de la nouvelle classe dans la BDD
            $unControleur->updateClient($_POST);
            //actualisation la page
            header("Location: index.php?page=2");
        }
    }

    if (isset($_POST['Filtrer'])){
        $filtre = $_POST['filtre'];
        $lesClients = $unControleur->selectLikeClients($filtre);
    }else{
        $lesClients = $unControleur->selectAllClients();
    }
    
    require_once("vue/vue_select_client.php");

?>