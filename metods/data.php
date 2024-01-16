<?php class Giochi_Generici
{
    public $Name;
    public $Type;
    public $Material;
    public $Price;

    public function getgentoy()
    {
        $result = $this->Name . "<br> " . $this->Type . "<br> " .  $this->Material . "<br> " .  $this->Price . "<br><br>";
        return $result;
    }

    public function __construct($Nome, $Tipo, $Materiale, $Prezzo)
    {
        $this->Name = $Nome;
        $this->Type = $Tipo;
        $this->Material = $Materiale;
        $this->Price = $Prezzo;
    }
} ?>

<?php class Giochi_Per_Cani extends Giochi_Generici
{
    public $Suitable;
    public function __construct($Nome, $Tipo, $Materiale, $Prezzo, $Adatto)
    {
        parent::__construct($Nome, $Tipo, $Materiale, $Prezzo);
        $this->Suitable = $Adatto;
    }
}
?>
<?php class Giochi_Per_Gatti extends Giochi_Generici
{
    public $Suitable;
    public function __construct($Nome, $Tipo, $Materiale, $Prezzo, $Adatto)
    {
        parent::__construct($Nome, $Tipo, $Materiale, $Prezzo);
        $this->Suitable = $Adatto;
    }
} ?>


 <?php class Cibo_Per_Animali
    {
        public $Type;
        public $Company;
        public $Ingredients;
        public $Price;

        public function getfood()
        {
            $result = $this->Type . "<br> " . $this->Company . "<br> " .  $this->Ingredients . "<br> " .  $this->Price . "<br><br>";
            return $result;
        }

        public function __construct($Nome, $Marca, $Ingredienti, $Prezzo)
        {
            $this->Type = $Nome;
            $this->Company = $Marca;
            $this->Ingredients = $Ingredienti;
            $this->Price = $Prezzo;
        }
    } ?>

<?php class Cibo_Per_Cani extends Cibo_Per_Animali
{
    public $For;
    public function __construct($Nome, $Marca, $Ingredienti,$Prezzo, $Adatto)
    {   parent::__construct($Nome, $Marca, $Ingredienti,$Prezzo);
        $this->For = $Adatto;
    }
} ?>

<?php class Cibo_Per_Gatti extends Cibo_Per_Animali
{
    public $For;
    public function __construct($Nome, $Marca, $Ingredienti,$Prezzo, $Adatto)
    {   parent::__construct($Nome, $Marca, $Ingredienti,$Prezzo);
        $this->For = $Adatto;
    }
} ?>
