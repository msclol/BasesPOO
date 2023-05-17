<?php
    class Produit{
        private $nom; //variable d'objet ou variable d'instance accède aux attributs ou aux propriétés
        private $prix; //ou encore attribut ou propriété de classe
        public static $couleur ='noir'; //Variable  static de classe
        private static $warranty; //Variable de classe
        const REMISE = 2 ; //On ne définit pas de visibilité pour une constante car elle est publique et statique par défaut.

        //Création d'une méthode de classe de type setter(static définit la méthode de classe)
        // public static function setWarranty($warranty){
        //     self::$warranty = $warranty;
        // }

     

        public static function setWarranty($warranty){
            self::$warranty = $warranty;
        }

        public static function getWarranty(){
            return self::$warranty;

        }

        public function getAjouterWarranty(){
            return $this->prix + self::$warranty - self::REMISE;
        }

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

        /**
         * Ajout extension de garantie
         */
        public function exendedWarranty($warranty){
            $this -> prix = $this -> prix + $warranty;
        }

       

    }