<?php
    class Fille extends Mere{
        protected $resultSoustraction;

        public function soustraction($c){
          return $this->resultSoustraction = $this->resultAddition - $c ;
        }
        
    }