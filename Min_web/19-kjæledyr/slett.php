<?php

// Koble til databasen
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['merkenummer'])) {
    $merkenummer = $_GET['merkenummer'];
    
    $query = "SELECT merkenummer, navn, art, fodselsdato, kjonn FROM kjaledyr WHERE merkenummer = :merkenummer";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":merkenummer", $merkenummer);
    $stmt->execute();
    $kjaledyr = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    $stmt = 0;
}  

?>    
    
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css?v=1">
    <script src="js.js"></script>
    <title>Slett kjæledyr</title>
</head>
<body>
    <header>
        <p>Slett kjæledyr</p>
    </header>
    <main>
        <form action="slett_bekreft.php" method="post">
            <label for="merkenummer">Merkenummer: </label><br><br>
            <input type="text" name="merkenummer" value="<?php echo $kjaledyr['merkenummer']; ?>" readonly required><br><br>

            <label for="navn">Navn: </label><br><br>
            <input type="text" name="navn" value="<?php echo $kjaledyr['navn']; ?>" readonly required><br><br>

            <label for="art">Art: </label><br><br>
            <input type="text" name="art" value="<?php echo $kjaledyr['art']; ?>" readonly required><br><br>

            <label for="fodselsdato">Fødselsdato: </label><br><br>
            <input type="date" name="fodselsdato" value="<?php echo $kjaledyr['fodselsdato']; ?>" readonly required><br><br>

            <label for="kjonn">Kjønn: </label><br><br>
            <input type="text" name="kjonn" value="<?php echo $kjaledyr['kjonn']; ?>" readonly required><br><br>

            <input id="slett" type="submit" name="slett_kjaledyr" value="Slett">
        </form>
    </main>
</body>
</html>
