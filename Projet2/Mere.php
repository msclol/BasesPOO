<?php
    class Mere{
        protected $resultAddition;

        public function addition($x, $y){
         $result  = ($this->resultAddition = $x + $y);
         return  $result;
        }
        

    }