<?php
    class EnfantGarcon extends Homme{
        public function __construct($prenom, $age)
        {
           parent::__construct($prenom, $age,' garçon');
           
        }
          
    }