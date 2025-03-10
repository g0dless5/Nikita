<?php

// Henter forbindelses-streng
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['slett_kjaledyr'])) {
    $merkenummer = $_POST['merkenummer'];

    $query = "DELETE FROM kjaledyr  WHERE merkenummer = :merkenummer";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":merkenummer", $merkenummer);
    $stmt->execute();
} else {
    $stmt = 0;    
}
?>    

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css?v=1">
    <script src="js.js"></script>
    <title>Slett kjæledyr</title>
</head>
<body>
    <header>
        <p>Slett kjæledyr<br></p>
    </header>
    
    <main>
        <?php
        if ($stmt) {
            echo '<p>Kjæledyret er slettet!</p>';
        } 
        else {
            echo '<p id="slett">Det oppsto en feil! Kjæledyret ble ikke slettet!</p>';
        }    
        ?>
    </main>
    
    <footer>
    </footer>
</body>
</html>
