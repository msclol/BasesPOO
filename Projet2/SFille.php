<?php  
    class SFille extends Fille{
        public function soustraction($c){
           echo 'Résultat: '. parent::soustraction($c);
           if($this->resultSoustraction < 0){
            echo'<p>Le réultat est négatif</p>';
           }else{
            echo'<p>Le réultat est positif</p>';

           }
          }
        
    }