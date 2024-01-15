<?php
require __DIR__ .'/models/data.php';

$generictoy1 = new Giochi_Generici("Pallina Rimbalzina", "Giocattolo Rimbalzante","P.L.U.", "Adatto a tutti i tipi di animali") 
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
        <?="<h2>Oggetti Generici Per Animali<h2>"?>
    </div>
    <div id="card">
        <?=$generictoy1-> getgentoy()?>
    </div>
</body>
</html>