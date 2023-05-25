<?php
    class Article{
       private $nom;
       
       public static $prix;


       public function setNom($nom){
        $this->nom = $nom;
       }

       public function getNom(){
        return $this->nom;
       }

       public static function setPrix($tarif){
         self::$prix = $tarif;
       }

       public static function getPrix(){
         return self::$prix ;
       }


       public function __call($methodeName, $arguments)
       {
        echo 'La méthode: '.'<strong>'.$methodeName.'</strong>'.'  n\'est pas disponible <br>
        Les arguments sont: '.implode(', ',$arguments);
       }

       public static function __callStatic($methodeName, $arguments)
       {
         echo 'La méthode: '.'<strong>'.$methodeName.'</strong>'.'  n\'est pas disponible <br>
        Les arguments sont: '.implode(', ',$arguments);         
       }
    }