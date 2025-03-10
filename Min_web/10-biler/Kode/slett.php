<?php

//Koble til databasen
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['regnr']))
    {
    $regnr = $_GET['regnr'];
    
    $query = "SELECT regnr, merke, type, farge, aar FROM biler WHERE regnr = :regnr";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":regnr",$regnr);
    $stmt ->execute();
    $bil = $stmt->fetch(PDO::FETCH_ASSOC);        
   
    
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
    <title>Slett bil</title>
</head>
<body>
    <header>
        <p>Slett bil</p>
    </header>
    <main>
        <form action="slett_bekreft.php" method="post">
            <label for="regnr">Registreringsnummer: </label><br><br>
            <input type="text" name="regnr" value="<?php echo $bil['regnr']; ?>" readonly required><br><br>

            <label for="merke">Merke: </label><br><br>
            <input type="text" name="merke" value="<?php echo $bil['merke']; ?>" readonly required><br><br>

            <label for="type">Type: </label><br><br>
            <input type="text" name="type" value="<?php echo $bil['type']; ?>" readonly required><br><br>

            <label for="farge">Farge: </label><br><br>
            <input type="text" name="farge" value="<?php echo $bil['farge']; ?>" readonly required><br><br>

            <label for="aar">År: </label><br><br>
            <input type="text" name="aar" value="<?php echo $bil['aar']; ?>" readonly required><br><br>

            <input id="slett" type="submit" name="slett_bil" value="Slett">
        </form>
    </main>
  
</body>
</html>