<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css?v=1">
    <script src="js.js"></script>
    <title>Registrer nytt kjæledyr</title>
</head>
<body>
    <header>
        <p>Registrer nytt kjæledyr</p>
    </header>
    <main>
        <form action="ny_bekreft.php" method="post">
            <label for="merkenummer">Merkenummer: </label><br><br>
            <input type="text" name="merkenummer" required><br><br>

            <label for="navn">Navn: </label><br><br>
            <input type="text" name="navn" required><br><br>

            <label for="art">Art: </label><br><br>
            <input type="text" name="art" required><br><br>

            <label for="fodselsdato">Fødselsdato: </label><br><br>
            <input type="text" name="fodselsdato" placeholder="YYYY-MM-DD" required><br><br>

            <label for="kjonn">Kjønn: </label><br><br>
            <input type="text" name="kjonn" required><br><br>

            <input class="green" type="submit" name="ny_kjaledyr" value="Legg til kjæledyr">
        </form>
    </main>
</body>
</html>
