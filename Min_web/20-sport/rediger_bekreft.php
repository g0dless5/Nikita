<?php

// Koble til databasen
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['rediger_medlem'])) {
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

    $query = "UPDATE medlemmer SET fornavn = :fornavn, etternavn = :etternavn, adresse = :adresse, postnr = :postnr, poststed = :poststed, fodt = :fodt, telefon = :telefon, mail = :mail, betalt = :betalt WHERE m_nr = :m_nr";
    
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
} else {
    $stmt = false;
}  
?>    
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Oppdater medlem</title>
</head>
<body>
    <header>
        <p>Oppdater medlem</p>
    </header>
    <main>
        <?php
        if ($stmt) {
            echo "<p>Medlemsinformasjonen er oppdatert!</p>";
        } else {
            echo "<p>Det oppsto en feil. Medlemsinformasjonen ble ikke oppdatert.</p>";
        }
        ?>
    </main>
</body>
</html>