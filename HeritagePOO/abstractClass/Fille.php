<?php
    class Fille extends Mere{
        public function getPrix(){
            return $this->prix;  
        }

        public function calculer(){
            $calcul = $this->prix +10;
            return $calcul;
        }
     

    }