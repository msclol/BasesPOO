<?php
    include_once('./trait/monTrait.php');
    class Mere{
        use monTrait;
        public function Bonjour(){
            echo 'Bonjour, Je suis la MERE';
        }
    }