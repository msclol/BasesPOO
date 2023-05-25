<?php
    class Client{
        private $nom;

        public function __construct($name)
        {
           $this->setNom($name) ;
        }

        public function setNom($name){
            $this->nom = $name;
        }

        public function getNom(){
            return $this->nom;
        }

        public function __toString()
        {
            $msg ='Le client se nomme: '.$this->getNom();
            return $msg;
        }
    }