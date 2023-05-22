<?php
    class Enfant extends Mere{
        public function AfficherPrix(){
           return $this->getPrix();
        }
    }