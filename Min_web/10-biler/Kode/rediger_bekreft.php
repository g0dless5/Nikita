<?php

//Henter forbindelses-streng
include 'connect.php';


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['rediger_bil'])) 
    {
       
    $regnr = $_POST['regnr'];
    $merke = $_POST['merke'];
    $type = $_POST['type'];
    $farge = $_POST['farge'];
    $aar = $_POST['aar'];
   

    $query = "UPDATE biler SET merke = :merke, type = :type, farge = :farge, aar = :aar WHERE regnr = :regnr" ;
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":regnr", $regnr);
    $stmt->bindParam(":merke", $merke);
    $stmt->bindParam(":type", $type);
    $stmt->bindParam(":farge", $farge);
    $stmt->bindParam(":aar", $aar);
    $stmt->execute();
    

    }
else
    {
    $stmt = 0;    
    }    
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='./css/style.css' rel='stylesheet' type='text/css'>
    
    <title>Min CRM</title>
</head>
<body>
    <?php// include 'meny.php';?>
    <header>
        <p>Oppdater bil<br></p>
    </header>
    
    <main>
        <?php
        if($stmt) 
            {
            echo '<p>Bilen er blitt endret!</p>';
            }
        else
            {
            echo '<p id="slett">Det oppsto en feil! Bilen ble ikke endret!</p>';
            }    
    
       
        ?>
             
    </main>
        
    <footer>
        <?php // include 'footer.php';?>  
    </footer>
</body>
</html>
