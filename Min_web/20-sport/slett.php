<?php

// Koble til databasen
include "connect.php";
include "meny.php";
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['m_nr'])) {
    $m_nr = $_GET['m_nr'];
    
    $query = "SELECT m_nr, fornavn, etternavn, adresse, postnr, poststed, fodt, telefon, mail, betalt FROM medlem WHERE m_nr = :m_nr";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":m_nr", $m_nr);
    $stmt->execute();
    $medlem = $stmt->fetch(PDO::FETCH_ASSOC);        
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
    <title>Slett medlem</title>
</head>
<body>
    <header>
        <p>Slett medlem</p>
    </header>
    <main>
        <form action="slett_bekreft.php" method="post">
            <label for="m_nr">Nummer av medlem: </label><br><br>
            <input type="text" name="m_nr" value="<?php echo $medlem['m_nr']; ?>" readonly required><br><br>

            <label for="fornavn">Fornavn: </label><br><br>
            <input type="text" name="fornavn" value="<?php echo $medlem['fornavn']; ?>" readonly required><br><br>

            <label for="etternavn">Etternavn: </label><br><br>
            <input type="text" name="etternavn" value="<?php echo $medlem['etternavn']; ?>" readonly required><br><br>

            <label for="adresse">Adresse: </label><br><br>
            <input type="text" name="adresse" value="<?php echo $medlem['adresse']; ?>" readonly required><br><br>

            <label for="postnr">Postnr: </label><br><br>
            <input type="text" name="postnr" value="<?php echo $medlem['postnr']; ?>" readonly required><br><br>

            <label for="poststed">Poststed: </label><br><br>
            <input type="text" name="poststed" value="<?php echo $medlem['poststed']; ?>" readonly required><br><br>

            <label for="fodt">Født: </label><br><br>
            <input type="text" name="fodt" value="<?php echo $medlem['fodt']; ?>" readonly required><br><br>

            <label for="telefon">Telefon: </label><br><br>
            <input type="text" name="telefon" value="<?php echo $medlem['telefon']; ?>" readonly required><br><br>

            <label for="mail">Mail: </label><br><br>
            <input type="text" name="mail" value="<?php echo $medlem['mail']; ?>" readonly required><br><br>

            <label for="betalt">Betalt: </label><br><br>
            <input type="text" name="betalt" value="<?php echo $medlem['betalt']; ?>" readonly required><br><br>

            <input id="slett" type="submit" name="slett_medlem" value="Slett">
        </form>
    </main>
</body>
<script src="js.js"></script>
</html>
