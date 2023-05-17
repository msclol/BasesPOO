<?php
class Voiture{
    private $numero;
    private $couleur;
    private $puissance;

    /** 
     * Set the value of cpuissance
    */
    public function setPuissance($cv){
        if(($cv <= 0) || !is_numeric($cv)){
            echo'Puissance non conforme';
        } else {
            $this->puissance = $cv;
        }
        
    }

    public function getPuissance(){
        return $this -> puissance;
    }

    

    

    


    /**
     * Set the value of numero
     */
    public function setNumero($numero): self {
        $this->numero = $numero;
        return $this;
    }
}

