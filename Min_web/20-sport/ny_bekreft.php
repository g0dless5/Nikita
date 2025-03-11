<?php

// Koble til databasen
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['ny_medlem'])) {
    $m_nr = $_POST['m_nr'];
    $fornavn = $_POST['fornavn'];
    $etternavn = $_POST['etternavn'];
    $adresse = $_POST['adresse'];
    $postnr = $_POST['postnr'];
    $poststed = $_POST['poststed'];
    $fodt = $_POST['fodt'];
    $telefon = $_POST['telefon'];
    $mail = $_POST['mail'];
    $betalt = $_POST['betalt'];

    $query = "INSERT INTO medlemmer (m_nr, fornavn, etternavn, adresse, postnr, poststed, fodt, telefon, mail, betalt) 
              VALUES (:m_nr, :fornavn, :etternavn, :adresse, :postnr, :poststed, :fodt, :telefon, :mail, :betalt)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":m_nr", $m_nr);
    $stmt->bindParam(":fornavn", $fornavn);
    $stmt->bindParam(":etternavn", $etternavn);
    $stmt->bindParam(":adresse", $adresse);
    $stmt->bindParam(":postnr", $postnr);
    $stmt->bindParam(":poststed", $poststed);
    $stmt->bindParam(":fodt", $fodt);
    $stmt->bindParam(":telefon", $telefon);
    $stmt->bindParam(":mail", $mail);
    $stmt->bindParam(":betalt", $betalt);
    $stmt->execute();
}
else {
    $stmt = false;
}  
?>    
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrer ny medlem</title>
</head>
<body>
    <header>
        <p>Registrer ny medlem</p>
    </header>

    <main>
        <?php
        if ($stmt) {
            echo "<p>Medlemmet er blitt lagt til!</p>";
        } else {
            echo "<p>Det oppsto en feil. Medlemmet ble ikke lagt til.</p>";    
        }
        ?>
    </main>
</body>
</html>