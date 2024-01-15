<?php
require __DIR__ . '/metods/data.php';
$generictoy1 = new Giochi_Generici("Pallina Rimbalzina", "Giocattolo Rimbalzante", "P.L.U.", "Adatto a tutti i tipi di animali");
$generictoy2 = new Giochi_Generici("Topolino di pezza", "Giocattolo di Tessuto", "Cotone 100%", "Adatto a tutti i tipi di animali");
$generictoy3 = new Giochi_Generici("Pupazzo che scappa", "Giocattolo con carica a molla", "80% tessuto, plastica 20%", "Adatto a tutti i tipi di Animali");

$dogf1 = new Cibo_Per_Cani("Polpettine di carne", "Petfood", "60% Manzo, 40% POllo", "Adatto ai cani di taglia Media/Grande");
$dogf2 = new Cibo_Per_Cani("Bocconcini di pollo", "Friskas", "100% Pollo", "Adatto ai cani di taglia Media/Grande");
$dogf3 = new Cibo_Per_Cani("Croccantini Junior", "Petxyness", "30% frumento/30% Salmone/40% Manzo", "Adatto ai cuccioli da 3 a 12 mesi");

$catf1 = new Cibo_Per_Gatti("Patè di carne", "Petfood", "60% Manzo, 40% Pollo", "Adatto a gatti adulti (1 anno in su)");
$catf2 = new Cibo_Per_Gatti("Croccantini Junior", "Friskas", "30% frumento/30% Salmone/40% Manzo", "Adatto ai cuccioli da 3 a 11 mesi");
$catf3 = new Cibo_Per_Gatti("erba gatta", "Petxyness", "100% Erba gatta", "Adatta per tutti i tipi di gatti");
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
        <?= "<h2>Giochi Generici Per Animali<h2>" ?>
    </div>

    <?php
    $generictoy = [$generictoy1, $generictoy2, $generictoy3];

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
    $DogFood = [$dogf1, $dogf2, $dogf3];

    foreach ($DogFood as $food) {
        echo '<div id="card">';
        echo $food->getdogfood();
        echo '</div>';
    }
    ?>

    <div>
        <?= "<h2>Cibo Per Gatti<h2>" ?>
    </div>

    <?php
    $CatFood = [$catf1, $catf2, $catf3];

    foreach ($CatFood as $food) {
        echo '<div id="card">';
        echo $food->getcatfood();
        echo '</div>';
    }
    ?>



</body>

</html>