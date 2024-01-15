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
}?>
 <?php class Cibo_Per_Cani
{
    public $Type;
    public $Company;
    public $Ingredients;
    public $For;

    public function getdogfood()
    {
        $result = $this->Type . "<br> " . $this->Company . "<br> " .  $this->Ingredients . "<br> " .  $this->For . "<br>";
        return $result;
    }

    public function __construct($Nome, $Marca, $Ingredienti, $Adatto)
    {
        $this->Type = $Nome;
        $this->Company = $Marca;
        $this->Ingredients = $Ingredienti;
        $this->For = $Adatto;
    }
}?>

<?php class Cibo_Per_Gatti
{
    public $Type;
    public $Company;
    public $Ingredients;
    public $For;

    public function getcatfood()
    {
        $result = $this->Type . "<br> " . $this->Company . "<br> " .  $this->Ingredients . "<br> " .  $this->For . "<br>";
        return $result;
    }

    public function __construct($Nome, $Marca, $Ingredienti, $Adatto)
    {
        $this->Type = $Nome;
        $this->Company = $Marca;
        $this->Ingredients = $Ingredienti;
        $this->For = $Adatto;
    }
}?>
