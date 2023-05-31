<?php
    namespace importee;
    class Calculer{
        private $a;
        private $b;

        public function __construct($a, $b)
        {
            $this->setNombreA($a);
            $this->setNombreB($b);
        }

        private function setNombreA($a){
            if(!is_numeric($a)){
                echo 'Merci de donner une valeur numérique au nombre A.';
            } else{
                $this->a = $a;
            }
            
        }
        private function setNombreB($b){
            if(!is_numeric($b)){
                echo 'Merci de donner une valeur numérique au nombre B.';
            } else{
                $this->b = $b;
            }
            
        }

        public function Calculer(){
            $calcul = $this->a - $this->b;
            return $calcul;
         }


        
    }