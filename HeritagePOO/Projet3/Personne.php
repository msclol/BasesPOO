<?php
    abstract class Personne{
        protected $prenom;
        protected $age;
        protected $genre;

        protected function __construct($prenom, $age,$genre)
        {
            $this->setPrenom($prenom);
            $this->setAge($age);
            $this->setGenre($genre);
            
            
        }

        /*
            Setters
        */
        private function setPrenom($prenom){
            $this->prenom = $prenom;
            }

        private function setAge($age){
                $this->age = $age;
            }
        
        private function setGenre($genre){
                $this->genre = $genre;
            }

        /*
            Getters
        */
        protected function getPrenom(){
            return $this->prenom;
        }
        protected function getAge(){
            return $this->age;
        }
        protected function getGenre(){
            return $this->genre;
        }


         /*
            Abstract Methods
        */
        abstract protected function parler();

    }

