<?php
    include_once'./traits/commun.php';
    include_once'./traits/Erreur.php';
    class Animal{
        use commun,Erreur;
        private $race;
        
        public function __construct()
        {
            echo'Nouvel animal créé';
        }

        public function setRace($race){
            $this->race = $race;
        }
       

        public function getRace(){
            return $this->race;
        }
        
        
        
    }
    
