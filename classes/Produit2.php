<?php
class Produit2{
    private $nom; //variable d'objet ou variable d'instance accède aux attributs ou aux propriétés
    private $prix; //ou encore attribut ou propriété de classe
    public static $couleur ='noir'; //Variable  static de classe
    private static $warranty; //Variable de classe
    const REMISE = 2;

    public function __construct($nomProduit)
    {
        echo 'Le produit: '.$nomProduit. 'a bien été crée';
        $this->nom = $nomProduit ;
        
    }
    /**Setters */
    public function setNom($nomProduit){
        $this->nom = $nomProduit;
    }
    public function setPrix($prixProduit){
        $this->prix = $prixProduit;
    }
    public static function setCouleur($couleurProduit){
        self::$couleur = $couleurProduit;
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



}