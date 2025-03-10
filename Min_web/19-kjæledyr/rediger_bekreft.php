<?php

// Henter forbindelses-streng
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['rediger_kjaledyr'])) {
    $merkenummer = $_POST['merkenummer'];
    $navn = $_POST['navn'];
    $art = $_POST['art'];
    $fodselsdato = $_POST['fodselsdato'];
    $kjonn = $_POST['kjonn'];

    $query = "UPDATE kjaledyr SET navn = :navn, art = :art, fodselsdato = :fodselsdato, kjonn = :kjonn WHERE merkenummer = :merkenummer";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":merkenummer", $merkenummer);
    $stmt->bindParam(":navn", $navn);
    $stmt->bindParam(":art", $art);
    $stmt->bindParam(":fodselsdato", $fodselsdato);
    $stmt->bindParam(":kjonn", $kjonn);
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
    <title>Oppdater kjæledyr</title>
</head>
<body>
    <header>
        <p>Oppdater kjæledyr<br></p>
    </header>
    
    <main>
        <?php
        if ($stmt) {
            echo '<p>Kjæledyret er blitt endret!</p>';
        } else {
            echo '<p id="slett">Det oppsto en feil! Kjæledyret ble ikke endret!</p>';
        }    
        ?>
    </main>
    
    <footer>
    </footer>
</body>
</html>
