<?php
class Tableau {
    private $caption;
    private $entete;
    private $donnees;
    private $table;

    const DEBUT_TABLE = '<table>';
    const FIN_TABLE   = '</table>';


    public function __construct($legende) {
        $this->setCaption($legende);
    }

    private function setCaption($legende) {
        $this->caption = '<caption>'.$legende.'</caption>';
    }

    public function setEntete($data, $tr='', $class='', $rowspan='', $colspan='') {
        if(($tr == 1) || ($tr == 3)) { $trD = '<tr>'; } else { $trD = ''; }
        if(($tr == 2) || ($tr == 3)) { $trF = '</tr>'; } else { $trF = ''; }
        if(!is_numeric($rowspan)) { echo 'Erreur'; } else { $rowspan = $rowspan; }
        if(!is_numeric($colspan)) { echo 'Erreur'; } else { $colspan = $colspan; }
        $this->entete.= $trD.'<th class="'.$class.'" colspan="'.$colspan.'" rowspan="'.$rowspan.'">'.$data.'</th>'.$trF;
    }

    public function setDonnees($data, $tr='', $class='', $rowspan='', $colspan='') {
        if(($tr == 1) || ($tr == 3)) { $trD = '<tr>'; } else { $trD = ''; }
        if(($tr == 2) || ($tr == 3)) { $trF = '</tr>'; } else { $trF = ''; }
        if(!is_numeric($rowspan)) { echo 'Erreur'; } else { $rowspan = $rowspan; }
        if(!is_numeric($colspan)) { echo 'Erreur'; } else { $colspan = $colspan; }
        $this->donnees.= $trD.'<td class="'.$class.'" colspan="'.$colspan.'" rowspan="'.$rowspan.'">'.$data.'</td>'.$trF;
    }

    public function getTable() {
        $this->table = self::DEBUT_TABLE;
        $this->table.= $this->caption;
        $this->table.= $this->entete;
        $this->table.= $this->donnees;
        $this->table.= self::FIN_TABLE;

        return $this->table;
    }

}