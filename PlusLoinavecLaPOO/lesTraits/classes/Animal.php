<?php
    require_once('./trait/Name.php');
    class Animal{
        use Name;
        
        public function __construct()
        {
            echo 'Un nouvel animal a été créé <br>';
        }

        public function getNom(){
            return 'Cet animal est un: '.$this->nom.'<br>';
         }

        
    }
    