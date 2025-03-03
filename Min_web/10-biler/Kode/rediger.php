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
    <title>Rediger bil</title>
</head>
<body>
    <header>
        <p>Rediger bil</p>
    </header>
    <main>
        <form action="rediger_bekreft.php" method="post">
            <label for="regnr">Registreringsnummer: </label><br><br>
            <input type="text" name="regnr" value="<?php echo $bil['regnr']; ?>" readonly required><br><br>

            <label for="merke">Merke: </label><br><br>
            <input type="text" name="merke" required><br><br>

            <label for="type">Type: </label><br><br>
            <input type="text" name="type" required><br><br>

            <label for="farge">Farge: </label><br><br>
            <input type="text" name="farge" required><br><br>

            <label for="aar">År: </label><br><br>
            <input type="text" name="aar" required><br><br>

            <input type="submit" name="rediger_bil" value="Lagre endringer">
        </form>
    </main>
  
</body>
</html>