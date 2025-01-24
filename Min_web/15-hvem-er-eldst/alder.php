<?php
$fornavn1 = $_GET['fornavn1'];
$fornavn2 = $_GET['fornavn2'];
$alder1 = $_GET['alder1'];
$alder2 = $_GET['alder2'];
$dif1 = $alder1-$alder2;
$dif2 = $alder2-$alder1;
$respons = "";

if($alder1 > $alder2) {
    $respons = " $fornavn1 er $dif1 år eldre $fornavn2 !";
} 
elseif ($alder2 > $alder1) {
    $respons = " $fornavn2 er $dif2 år eldre $fornavn1 !";
}
else 
{
    $respons = "Hei $fornavn1 og $fornavn2 er samme alder";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alder</title>
    <h1>Hvem er eldst</h1>
    <h2>
    <?php
        echo $respons;
        ?>
    </h2>
</head>
<body>
    
</body>
</html>