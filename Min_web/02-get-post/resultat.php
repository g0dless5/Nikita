<?php
$fornavn = $_GET['fornavn'];
$respons = "";

if($fornavn == "Sigma") {
    $respons = "Hei $fornavn, velkommen tilbake til oss!";
} 
else 
{
    $respons = "Hei $fornavn? Hvem er du?";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min side</title>
    <h1>Vår hjemmeside</h1>
    <h2>
    <?php
        echo $respons;
        ?>
    </h2>
</head>
<body>
    
</body>
</html>