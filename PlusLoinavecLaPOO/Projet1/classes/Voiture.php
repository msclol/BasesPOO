<?php
    include_once'./traits/commun.php';
    include_once'./traits/Erreur.php';
    class Voiture{
        use commun,Erreur;
        private $marque;

        public function __construct()
        {
            echo 'Nouvelle voiture crééé';
        }

        public function setMarque($marque){
            $this->marque = $marque;
        }
      

        public function getMarque(){
           return  $this->marque;
        }
      
    }