<?php
class Produit2{
    private $nom; //variable d'objet ou variable d'instance accède aux attributs ou aux propriétés
    private $prix; //ou encore attribut ou propriété de classe
    public static $couleur ='noir'; //Variable  static de classe
    private static $warranty; //Variable de classe
    const REMISE = 2;
    const TVA = 1.2;

    public function __construct($nomProduit,$prixProduit)
    {
        echo 'Le produit: '.$nomProduit. ' a bien été crée ';
        $this->setNom($nomProduit); 
        $this->setPrix($prixProduit);
        echo 'Prix TTC: '.$this->AjouterTVA();
       
        
    }
    /**Setters */
    private function setNom($nomProduit){
        $this->nom = $nomProduit;
    }
    private function setPrix($prixProduit){
        if(!is_numeric($prixProduit)){
            echo 'Prix incorrect';
        }else {
            $this->prix = ABS($prixProduit);
        } 
    }
    public static function setCouleur($couleurProduit){
        self::$couleur = $couleurProduit;
    }
    
    public function exendedWarranty($warranty){
       return  $this -> prix + self::getWarranty() - self::REMISE;
    }

    public function setWarranty($warranty){
        self::$warranty;
    }

        /**Getters */
    public function getNom(){
        return $this->nom;
    }
    public function getPrix(){
        return $this->prix;
    }
    public static function getCouleur(){
        return self::$couleur;
    }
    public function getWarranty(){
        return self::$warranty;

    }

    private function AjouterTVA(){
        return  $this ->getPrix() * self::TVA;
    }



}