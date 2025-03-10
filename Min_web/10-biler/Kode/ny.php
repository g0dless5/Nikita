<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Registrer ny bil</title>
</head>
<body>
    <header>
        <p>Registrer ny bil</p>
    </header>
    <main>
        <form action="ny_bekreft.php" method="post">
            <label for="regnr">Registreringsnummer: </label><br><br>
            <input type="text" name="regnr" required><br><br>

            <label for="merke">Merke: </label><br><br>
            <input type="text" name="merke" required><br><br>

            <label for="type">Type: </label><br><br>
            <input type="text" name="type" required><br><br>

            <label for="farge">Farge: </label><br><br>
            <input type="text" name="farge" required><br><br>

            <label for="aar">År: </label><br><br>
            <input type="text" name="aar" required><br><br>

            <input type="submit" name="ny_bil" value="Legg til bil">
        </form>
    </main>
  
</body>
</html>