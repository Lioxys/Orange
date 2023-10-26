<?php

    class Modele {
        private $unPDO ; //php data object

        public function __construct(){
            try{
                $url="mysql:host=localhost;dbname=orange_JV_24";
                $user = "root";
                $mdp="";
                //instanciation de la classe PDO
                $this->unPDO = new PDO($url, $user, $mdp);
            }
            catch(PDOException $exp){
                echo "Erreur connexion BDD : ".$exp->getMessage();
            }
        }

        /* Gestion des classes CRUD */
        public function insertClient ($tab){
            $requete = "insert into client values(null, :nom, :prenom, :adresse, :email);";
            $select = $this->unPDO->prepare ($requete);
            $donnees = array(
                ":nom"=>$tab['nom'],
                ":prenom"=>$tab['prenom'],
                ":adresse"=>$tab['adresse'],
                ":email"=>$tab['email']
            );
            $select->execute($donnees);
        }
        public function selectAllClients(){
            $requete = "select * from client;";
            $select = $this->unPDO->prepare($requete);
            $select->execute();
            return $select->fetchAll();
        }
        public function deleteClient($idclasse){
            $requete = "delete from client where idclient = :idclient;";
            $select = $this->unPDO->prepare($requete);
            $donnees=array(":idclient"=>$idclasse);
            $select->execute($donnees);
        }
        public function selectWhereClient ($idclasse){
            $requete="select * from client where idclient=:idclient;";
            $select = $this->unPDO->prepare($requete);
            $donnees=array(":idclient"=>$idclasse);
            $select->execute($donnees);
            return $select->fetch(); //un seul résultat
        }
        public function updateClient($tab){
            $requete = "update client set nom=:nom, prenom=:prenom, adresse=:adresse, email=:email where idclient=:idclient;";
            $donnees = array(
                ":nom"=>$tab['nom'],
                ":prenom"=>$tab['prenom'],
                ":adresse"=>$tab['adresse'],
                ":email"=>$tab['email'],
                ":idclient"=>$tab['idclient']
            );
            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
        }
        public function selectLikeClients($filtre){
            $requete = "select * from client where nom like :filtre or prenom like :filtre or email like :filtre; or adresse like :adresse";
            $select = $this->unPDO->prepare($requete);
            $donnees=array(":filtre"=>"%".$filtre."%");
            $select->execute($donnees);
            return $select->fetchAll();
        }
        public function insertTechnicien ($tab){
            $requete = "insert into technicien values(null, :nom, :prenom, :qualification, :email);";
            $select = $this->unPDO->prepare ($requete);
            $donnees = array(
                ":nom"=>$tab['nom'],
                ":prenom"=>$tab['prenom'],
                ":qualification"=>$tab['qualification'],
                ":email"=>$tab['email']
            );
            $select->execute($donnees);
        }
        public function selectAllTechniciens(){
            $requete = "select * from technicien;";
            $select = $this->unPDO->prepare($requete);
            $select->execute();
            return $select->fetchAll();
        }
        public function deleteTechnicien($idtech){
            $requete = "delete from technicien where idtech = :idtech;";
            $select = $this->unPDO->prepare($requete);
            $donnees=array(":idtech"=>$idtech);
            $select->execute($donnees);
        }
        public function selectWhereTechnicien ($idtech){
            $requete="select * from technicien where idtech=:idtech;";
            $select = $this->unPDO->prepare($requete);
            $donnees=array(":idtech"=>$idtech);
            $select->execute($donnees);
            return $select->fetch(); //un seul résultat
        }
        public function updateTechnicien($tab){
            $requete = "update technicien set nom=:nom, prenom=:prenom, qualification=:qualification, email=:email where idtech=:idtech;";
            $donnees = array(
                ":nom"=>$tab['nom'],
                ":prenom"=>$tab['prenom'],
                ":qualification"=>$tab['qualification'],
                ":email"=>$tab['email'],
                ":idtech"=>$tab['idtech']
            );
            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
        }
        public function selectLikeTechniciens($filtre){
            $requete = "select * from technicien where nom like :filtre or prenom like :filtre or email like :filtre or qualification like :qualification";
            $select = $this->unPDO->prepare($requete);
            $donnees=array(":filtre"=>"%".$filtre."%");
            $select->execute($donnees);
            return $select->fetchAll();
        }
    }

?>