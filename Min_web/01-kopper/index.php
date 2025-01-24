<?php
$hvit_kopp = "hvit penn";
$svart_kopp = "svart penn";
$mellom_lager = "";
//Skriv status av koppene til skjerm
echo "Innholdet i hvit kopp er: $hvit_kopp <br>";
echo "Innholdet i svart kopp er: $svart_kopp <br>";
// Her skal vi bytte verdier i koppene
echo "Nå byttes verdiene ... <br>";
$mellom_lager = $hvit_kopp;
$hvit_kopp = $svart_kopp;
$svart_kopp = $mellom_lager;
//Skriv status av koppene til skjerm
echo "Innholdet i hvit kopp er: $hvit_kopp <br>";
echo "Innholdet i svart kopp er: $svart_kopp <br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mine kopper</title>
</head>
<body>
    <h1>Her kommer mine kopper</h1>
       <p>Her skal jeg bytte verdiene i to kopper
</body>
</html>