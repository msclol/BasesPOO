<?php
    class Fille extends Mere{
        public function getMethode(){
          //  $this->getMere(); //Appeler une méthode au sein d'une fonction
            parent::getMethode(); //Surcharger une méthode
            echo'<br>';
            echo 'Je suis la classe FILLE';
        }
    }