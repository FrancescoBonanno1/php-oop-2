<?php
require __DIR__ . '/metods/data.php';
$generictoy1 = new Giochi_Generici("Pallina Rimbalzina", "Giocattolo Rimbalzante", "P.L.U.", "3,50$");
$generictoy2 = new Giochi_Generici("Topolino di pezza", "Giocattolo di Tessuto", "Cotone 100%", "2,50$");
$generictoy3 = new Giochi_Generici("Pupazzo che scappa", "Giocattolo con carica a molla", "80% tessuto, plastica 20%", "4$");

$dogtoy1 = new Giochi_Per_Cani("Corda Dura", "Corda da tirare", "100% tessuto grezzo", "3,50$", "Adatto a tutti i tipi di Cane");
$dogtoy2 = new Giochi_Per_Cani("Frisbee","Oggetto circolare da lancio","100% P.E.T.","4,50$","Adatto a tutti i tipi di Cane" );

$cattoy1= new Giochi_Per_Gatti("laser felino", "Laser ricreativo per gatti", "100% autentico fascio di elettroni", "10,90$","Adatto per Tutti i tipi di Gatto");
$cattoy2= new Giochi_Per_Gatti("Tiragraffi jungle", "Tiragraffi scalabile per gatti", "80% legno di banano, 20% liane delle amazzoni", "25,99$","Adatto per Tutti i tipi di Gatto");

$dogf1 = new Cibo_Per_Cani("Polpettine di carne", "Petfood", "60% Manzo, 40% Pollo","2,50$", "Adatto ai cani di taglia Media/Grande");
$dogf2 = new Cibo_Per_Cani("Bocconcini di pollo", "Friskas", "100% Pollo","4,99$", "Adatto ai cani di taglia Media/Grande");
$dogf3 = new Cibo_Per_Cani("Croccantini Junior", "Petxyness", "30% frumento/30% Salmone/40% Manzo","6,50$", "Adatto ai cuccioli da 3 a 12 mesi");

$catf1 = new Cibo_Per_Gatti("Patè di carne", "Petfood", "60% Manzo, 40% Pollo","3,99$", "Adatto a gatti adulti (1 anno in su)");
$catf2 = new Cibo_Per_Gatti("Croccantini Junior", "Friskas", "30% frumento/30% Salmone/40% Manzo","5$", "Adatto ai cuccioli da 3 a 11 mesi");
$catf3 = new Cibo_Per_Gatti("erba gatta", "Petxyness", "100% Erba gatta","7,50$", "Adatta per tutti i tipi di gatti");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
</head>

<body>
    <div>
        <?= "<h2>Giochi Per Animali<h2>" ?>
    </div>

    <?php
    $generictoy = [$generictoy1, $generictoy2, $generictoy3, $dogtoy1 , $dogtoy2, $cattoy1, $cattoy2];

    foreach ($generictoy as $toy) {
        echo '<div id="card">';
        echo $toy->getgentoy();
        echo '</div>';
    }
    ?>

    <div>
        <?= "<h2>Cibo Per Cani<h2>" ?>
    </div>

    <?php
    $GenFood = [$dogf1, $dogf2, $dogf3];

    foreach ($GenFood as $food) {
        echo '<div id="card">';
        echo $food->getfood();
        echo '</div>';
    }
    ?>

    <div>
        <?= "<h2>Cibo Per Gatti<h2>" ?>
    </div>

    <?php
    $GenFood = [$catf1, $catf2, $catf3];

    foreach ($GenFood as $food) {
        echo '<div id="card">';
        echo $food->getfood();
        echo '</div>';
    }
    ?>



</body>

</html>