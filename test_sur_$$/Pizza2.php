<?php
    class Pizza2{
        private $nom;
        private $prix;
        private $quantite;
        private static $emballage;

        /**Setters */
        public function setNom($nomPizza){
            $this->nom = $nomPizza;
        }
        public function setPrix($prixPizza){
            $this->prix = $prixPizza;
        }
        public function setQuantite($quantitePizza){
            if(!is_numeric($quantitePizza)){
                echo'Quantité incorrect';
             } else{
                $this->quantite = ceil(ABS($quantitePizza));
             }
        }
        public static function setEmballage($fraisEmballage){
            self::$emballage = $fraisEmballage;
        }

        /**Getters */
        public function getNom(){
            return $this->nom;
        }
        public function getPrix(){
            return $this->prix;
        }
        public function getQuantite(){
            return $this->quantite;
        }
        public static function getEmballage(){
           return self::$emballage;
        }

         /**Other functions : function calcul() */
         public function calcul(){
            if( !empty($this->prix) && !empty($this->quantite)){
                $calcul = ($this->prix * $this->quantite) + self::$emballage;
                return $calcul;
         }


    }

    }