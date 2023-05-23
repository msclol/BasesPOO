<?php
    class EnfantFille extends Femme{
        public function __construct($prenom, $age)
        {
           parent::__construct($prenom, $age, 'fillette');
        }
          

    }
