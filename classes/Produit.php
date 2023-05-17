<?php
    class Produit{
        private $nom;
        private $prix;

        public function setNom($nomProduit){
            $this->nom = $nomProduit;
        }

        public function getNom(){
            return $this->nom;
        }

        public function setPrix($prixProduit){
            if(!is_numeric($prixProduit)){
                echo 'Erreur de prix';
            }else {
                $this->prix = $prixProduit;
            }
            
        }

        public function getPrix(){
            return $this->prix;
        }

    }