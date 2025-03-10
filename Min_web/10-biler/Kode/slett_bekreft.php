<?php

//Koble til databasen
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['slett_bil']))
    {
    $regnr = $_POST['regnr'];
    
    $query = "DELETE FROM biler WHERE regnr = :regnr";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":regnr",$regnr);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Min bil</title>
</head>
<body>
    <header>
        <p>Slett bil</p>

    </header>

    <main>
        <?php
        if ($stmt)
            {
            echo "<p>Bilen er blitt slettet!</p>";

            }
        else
            {
            echo "<p>Det oppsto en feil. Bilen ble ikke slettet</p>";    
            }    


        ?>
    </main>
    
</body>
</html>    