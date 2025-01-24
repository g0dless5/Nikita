<?php
$barna = $_GET['barna'];
$ungdom = $_GET['ungdom'];
$voksen = $_GET['voksen'];
$voksenpris = $voksen * 120;
$ungdompris = $ungdom * 100;
$barnapris = $barna * 80;
$totalpris = $barnapris + $ungdompris + $voksenpris;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h2>
        <?php
            echo "Total pris er $totalpris kr<br> Du har betalt $ungdompris kr for ungdomer, $barnapris kr for barna , $voksenpris kr for voksen. <br>"
        ?>
        <a href="index.php">Tilbake til bestilling?</a>
    </h2>
</body>
</html>

