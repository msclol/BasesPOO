<?php
    // Création de la super class ou class parent
    class Pizza{
        protected $tarif;
        private $nom;
        private static $emballage;
        const MONNAIE = 'euros';

        public function __construct($nom, $prix)
        {
            $this->setNom($nom);
            $this->setTarif($prix);
        }

        /**
         * Setters
         */
        private function setTarif($prix)
        {
            if(!is_numeric($prix)){
                echo'Tarif incorrect';
            } else {
                $this->tarif = $prix + self::$emballage;
            }
            
        }
        private function setNom($nom)
        {
            $this->nom = $nom;
        }
        public static function setEmballage($emballage){
            self::$emballage = $emballage;
        }

        /**
         * Getters
         */
        public function getTarif(){
            return $this->tarif.self::MONNAIE;
        }

        public function getNom(){
            return $this->nom ;
        }
    }