<?php
    class PizzaPromo extends Pizza{
        private static $remise;
        public function getTarif(){
            return ($this->tarif - self::$remise).self::MONNAIE;
        }

        public static function setRemise($remise){
            self::$remise = $remise;
        }

    }