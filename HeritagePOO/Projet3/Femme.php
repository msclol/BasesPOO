<?php
    class Femme extends Personne{

        //Mise en place d'un constructeur
        public function __construct($prenom, $age)
        {
           parent::__construct($prenom, $age,'femme');
        }
          
        
        public function parler(){
            $msg = 'Mon prénom est: '.$this->getPrenom(). ' et mon age est: '.$this->getAge().'ans'.' et je suis du genre: '.$this->getGenre().'.';

            return $msg;
        }

    }