<?php
    include_once('./trait/Name.php');
    class Legume{
        use Name; // Très important à ne pas oublier
        
        public function __construct()
        {
            echo 'un nouveau légume a été créé<br>';
        }
       
    }