<?php
    class Chien{
        private $race; 
        private $nom; 
        private $age;

        /** 
         * set the value of race
        * */
        public function setRace($race){
            $this->race = $race;
        }

        /** 
         * get the value of race
        * */
        public function getRace($race){
           return $this->race;
        }


       
        /* 3) Création des méthodes permettant de lire les caractéristicques du 1er chien****** */

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
            if(($age <= 0) || !is_numeric($age)){
                echo 'Age entré non valide!!!';

            }else {
                $this->age = $age;
            }
            return $this;
                

                
        }

        /* 3) Création des méthodes aboyer et infos****** */
        public function bark(){
            $msg = $this->nom.' est en train d\'aboyer';
            return $msg;
        }

        public function infos(){
            $msg = $this->nom. ' est un '.$this->race.' qui a '.$this->age.' ans';
            return $msg;
        }
    }