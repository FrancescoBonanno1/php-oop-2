<?php class Giochi_Generici {
public $Name;
public $Type;
public $Material;
static $Suitable;

public function getgentoy(){
    $result = $this->Name . ", " . $this->Type . ", " .  $this->Material . ", " .  $this->Suitable . ".";
    return $result;
}

public function __construct($Nome , $Tipo, $Materiale, $Adatto) {
   $this->Name = $Nome ;
   $this->Type = $Tipo ;
   $this->Material = $Materiale ;
   $this->Suitable = $Adatto ;


}
}