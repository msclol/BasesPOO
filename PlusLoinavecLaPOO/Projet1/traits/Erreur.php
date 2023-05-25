<?php
    trait Erreur{
       public function __call($methodeName, $arguments){
        echo '<p>La méthode: '.$methodeName.' est indisponible <br>. Les arguments passés à cette méthodes sont: '.implode(',', $arguments).'</p>';

       }
    }