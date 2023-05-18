<?php
    class Pizza{
        private $nom; // variable d'objet
        private $prix;// variable d'objet
        private $quantite;// variable d'objet
        private static $emballage; // variable de classe
        const  REMISE = 2;

        /**
         * Setters
         */
         public function setNom($nomPizza){
            $this->nom = $nomPizza; //$this(objet courant)
         }
         public function setPrix($prixPizza){
            if(!is_numeric($prixPizza)){
                echo 'Prix incorrect';
            }else {
                $this->prix = ABS($prixPizza);
            }            
         }
         public function setQuantite($quantitePizza){
            if(!is_numeric($quantitePizza)){
               echo'Quantité incorrect';
            } else{
               $this->quantite = ceil(ABS($quantitePizza));
            }
            
         }

         public static function setEmballage($emballagePizza){
            if(!is_numeric($emballagePizza)){
               echo'Frais incorrect';
            } else{
               self::$emballage =ABS($emballagePizza);
            }
            
         }

         /**
         * Getters
         */
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

         /**
          * Methode de calcul:
          * (Prix*Quantité + emballage)
          */
          public function calcul(){
            if( !empty($this->prix) && !empty($this->quantite)){
               $calcul = ($this->prix * $this->quantite) + self::$emballage;
               return $calcul;
          }

         }
         

       

      
    }