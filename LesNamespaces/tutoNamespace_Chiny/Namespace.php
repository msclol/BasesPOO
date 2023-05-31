<?php
namespace Std;
    class PDO{
        public function prepare(){
            echo "il s'agit d'une classe personnalisée";
        }
    }
    $ob = new PDO();
    $ob->prepare();

    echo '<hr>';

    $ob=new \PDO("mysql:host=localhost;dbname=todoapp","root","");
    $sel = $ob->prepare("show tables");
    $sel->execute();
    $tab=$sel->fetchAll();
    for($i=0;$i<count($tab);$i++){
        echo $tab[$i][0].'<br>';

        echo __NAMESPACE__; //Constance prédéfinie pour connaître le dans quel espace de nom on travaille actuellement.
    
    }
?>