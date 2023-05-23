<?php
   class Homme extends Personne{
        public function __construct($prenom, $age, $genre='Homme')
        {
           parent::__construct($prenom, $age,$genre);
           
        }
          
       
        final public function parler(){
            $msg = 'Bonjour Je m\'appelle '.$this->getPrenom().' et j\'ai: '.$this->getAge(). ' et je suis du genre: '.$this->getGenre();
            return $msg;
        }




    }