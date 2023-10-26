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
        public function insertProduit ($tab){
            $requete = "insert into produit values(null, :designation, :prixachat, :etat, :dateachat, :idclient);";
            $select = $this->unPDO->prepare ($requete);
            $donnees = array(
                ":designation"=>$tab['designation'],
                ":prixachat"=>$tab['prixachat'],
                ":etat"=>$tab['etat'],
                ":dateachat"=>$tab['dateachat'],
                ":idclient"=>$tab['idclient']
            );
            $select->execute($donnees);
        }
        public function selectAllProduits(){
            $requete = "select * from produit;";
            $select = $this->unPDO->prepare($requete);
            $select->execute();
            return $select->fetchAll();
        }
        public function deleteProduit($idproduit){
            $requete = "delete from produit where idproduit = :idproduit;";
            $select = $this->unPDO->prepare($requete);
            $donnees=array(":idproduit"=>$idproduit);
            $select->execute($donnees);
        }
        public function selectWhereProduit ($idproduit){
            $requete="select * from produit where idproduit=:idproduit;";
            $select = $this->unPDO->prepare($requete);
            $donnees=array(":idproduit"=>$idproduit);
            $select->execute($donnees);
            return $select->fetch(); //un seul résultat
        }
        public function updateProduit($tab){
            $requete = "update produit set designation=:designation, prixachat=:prixachat, etat=:etat, dateachat=:dateachat where idclient=:idclient;";
            $donnees = array(
                ":designation"=>$tab['designation'],
                ":prixachat"=>$tab['prixachat'],
                ":etat"=>$tab['etat'],
                ":dateachat"=>$tab['dateachat'],
                ":idclient"=>$tab['idclient']
            );
            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
        }
        public function selectLikeProduits($filtre){
            $requete = "select * from produit where designation like :filtre or prixachat like :filtre or dateachat like :filtre or etat like :etat or idclient like :idclient";
            $select = $this->unPDO->prepare($requete);
            $donnees=array(":filtre"=>"%".$filtre."%");
            $select->execute($donnees);
            return $select->fetchAll();
        }
    }

?>