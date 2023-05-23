<?php
    trait name {
        private $nom;
        
        public function setNom($nom){
            $this->nom = $nom;
        }

        public function getNom(){
           return $this->nom.'<br>';
        }

    }