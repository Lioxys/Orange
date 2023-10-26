<?php
    require_once("modele/modele.class.php");
    class Controleur{
        private $unModele;

        public function __construct(){
            //instanciation de la classe Modele
            $this->unModele = new Modele();
        }
        /* Gestion des classes */
        public function insertClient ($tab){
            //plus tard : controle des données avant insertion
            $this->unModele->insertClient($tab);
        }
        public function selectAllClients(){
            return $this->unModele->selectAllClients();
        }
        public function selectLikeClients($filtre){
            return $this->unModele->selectLikeClients($filtre);
        }
        public function deleteClient($idclient){
            $this->unModele->deleteClient($idclient);
        }
        
        public function testVide($tab){
            $vide = false;
            foreach($tab as $valeur){
                if ($valeur = "" || $valeur == null){
                    $vide = True;
                    break;
                }
            }
            return $vide;
        }
        public function selectWhereClient($idclient){
            return $this->unModele->selectWhereClient($idclient);
        }
        public function updateClient($tab){
            $this->unModele->updateClient($tab);
        }
        public function insertTechnicien ($tab){
            //plus tard : controle des données avant insertion
            $this->unModele->insertTechnicien($tab);
        }
        public function selectAllTechniciens(){
            return $this->unModele->selectAllTechniciens();
        }
        public function selectLikeTechniciens($filtre){
            return $this->unModele->selectLikeTechniciens($filtre);
        }
        public function deleteTechnicien($idtech){
            $this->unModele->deleteTechnicien($idtech);
        }
        public function selectWhereTechnicien($idtech){
            return $this->unModele->selectWhereTechnicien($idtech);
        }
        public function updateTechnicien($tab){
            $this->unModele->updateTechnicien($tab);
        }
    }

?>