<?php
    class Homme extends Personne{
        public function __construct($prenom, $age)
        {
           parent::__construct($prenom, $age,'homme');
           
        }
          
       
        public function parler(){
            $msg = 'Bonjour Je m\'appelle '.$this->getPrenom().' et j\'ai: '.$this->getAge(). ' et je suis du genre: '.$this->getGenre();
            return $msg;
        }




    }