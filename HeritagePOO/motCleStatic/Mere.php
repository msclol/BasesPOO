<?php
    class Mere{
        protected static function Afficher(){
            $msg='Je suis vraiment issu de la classe MERE';
            return $msg;
        }

        public static function recupAfficher(){
            return static::Afficher(); //Static c'est pour la classe qui l'appelle
        }

    }