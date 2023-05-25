<?php
    class Personne{
        private $prenom;
        private $nom;
        public function __construct($prenom, $nom)
        {
            try{
                $this->setPrenom($prenom);
            }catch(Exception $e){
                echo $e->getMessage();
            }
            try{
                $this->setNom($nom);
            }catch(Exception $e){
                echo $e->getMessage();
            }
            
           
        }

        private function setPrenom($prenom){
            if(!is_string($prenom)){
                throw new Exception('Le prénom entré n\'est pas une chaine de caractère.<br>'); //Lever une exception
            }else{
                $this->prenom = $prenom;
            }
            
        }
        public function getPrenom(){
           return $this->prenom;
        }

        private function setNom($nom){
            if(!is_string($nom)){
                throw new Exception('Le nom entré n\'est pas une chaine de caractère.<br>'); //Lever une exception
            }else{
                $this->nom = $nom;
            }
        }
        public function getNom(){
            return $this->nom;
         }
    }