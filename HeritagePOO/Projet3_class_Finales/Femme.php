<?php
    class Femme extends Personne{

        //Mise en place d'un constructeur
        public function __construct($prenom, $age, $genre='femme')
        {
           parent::__construct($prenom, $age,$genre);
        }
          
        
        public function parler(){
            $msg = 'Mon prénom est: '.$this->getPrenom(). ' et mon age est: '.$this->getAge().'ans'.' et je suis du genre: '.$this->getGenre().'.';

            return $msg;
        }

    }