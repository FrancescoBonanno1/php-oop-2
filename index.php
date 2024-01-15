<?php
require __DIR__ . '/metods/data.php';
$generictoy1 = new Giochi_Generici("Pallina Rimbalzina", "Giocattolo Rimbalzante", "P.L.U.", "Adatto a tutti i tipi di animali");
$generictoy2 = new Giochi_Generici("Topolino di pezza", "Giocattolo di Tessuto", "Cotone 100%", "Adatto a tutti i tipi di animali");
$generictoy3 = new Giochi_Generici("Pupazzo che scappa", "Giocattolo con carica a molla", "80% tessuto, plastica 20%", "Adatto a tutti i tipi di Animali");
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
        <?= "<h2>Oggetti Generici Per Animali<h2>" ?>
    </div>

    <?php
    $generictoy = [$generictoy1, $generictoy2, $generictoy3];
    
    foreach ($generictoy as $toy) {
        echo '<div id="card">';
        echo $toy->getgentoy();
        echo '</div>';
    }
    ?>


</body>

</html>