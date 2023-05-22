<?php
    class Mere{
        private $prix;

        public function setPrix($tarif){
            $this->prix = $tarif;
        }

        public function getPrix(){
           return $this->prix;
        }

    }