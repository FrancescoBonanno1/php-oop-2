<?php class Giochi_Generici
{
    public $Name;
    public $Type;
    public $Material;
    public $Suitable;

    public function getgentoy()
    {
        $result = $this->Name . "<br> " . $this->Type . "<br> " .  $this->Material . "<br> " .  $this->Suitable . "<br>";
        return $result;
    }

    public function __construct($Nome, $Tipo, $Materiale, $Adatto)
    {
        $this->Name = $Nome;
        $this->Type = $Tipo;
        $this->Material = $Materiale;
        $this->Suitable = $Adatto;
    }
}
