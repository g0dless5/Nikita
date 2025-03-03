<?php

//Henter forbindelses-streng
include 'connect.php';


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ny_bil'])) 
    {
       
    $regnr = $_POST['regnr'];
    $merke = $_POST['merke'];
    $type = $_POST['type'];
    $farge = $_POST['farge'];
    $aar = $_POST['aar'];
   

    $query = "INSERT INTO biler (regnr, merke, type, farge, aar) VALUES 
    (:regnr, :merke, :type, :farge, :aar)";
    
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
        <p>REGISTRER NY BIL<br></p>
    </header>
    
    <main>
        <?php
        if($stmt) 
            {
            echo '<p>En ny bil er blitt registrert!</p>';
            }
        else
            {
            echo '<p id="slett">Det oppsto en feil! Kunden ble ikke registrert!</p>';
            }    
    
       
        ?>
             
    </main>
        
    <footer>
        <?php // include 'footer.php';?>  
    </footer>
</body>
</html>
