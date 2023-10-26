<h2>Gestion des techniciens</h2>

<?php

    
    $laClasse = null;
    
    require_once("modele/modele.class.php");
    if (isset($_GET['action']) && isset($_GET['idtech'])){
        $action = $_GET['action'];
        $idtech = $_GET['idtech'];
        switch($action){
            case "sup": 
            $unControleur->deleteTechnicien($idtech);
            break;
            case "edit":
            $leTech = $unControleur->selectWhereTechnicien($idtech);
            break;
        }
    } 
    require_once("vue/vue_insert_technicien.php");
    if (isset($_POST['Valider'])){
        //verification des données
        if ($unControleur->testVide($_POST)){
            echo "<br> Veuillez remplir les champs.";
        }else{
        //insertion de la nouvelle classe dans la BDD
            $unControleur->insertTechnicien($_POST);
        }
    }

    if (isset($_POST['Modifier'])){
        //verification des données
        if ($unControleur->testVide($_POST)){
            echo "<br> Veuillez remplir les champs.";
        }else{
        //update de la nouvelle classe dans la BDD
            $unControleur->updateTechnicien($_POST);
            //actualisation la page
            header("Location: index.php?page=2");
        }
    }

    if (isset($_POST['Filtrer'])){
        $filtre = $_POST['filtre'];
        $lesTechniciens = $unControleur->selectLikeTechniciens($filtre);
    }else{
        $lesTechniciens = $unControleur->selectAllTechniciens();
    }
    
    require_once("vue/vue_select_technicien.php");

?>