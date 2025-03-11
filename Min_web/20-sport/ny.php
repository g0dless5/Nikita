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
        <form action="ny_bekreft.php" method="post">
            <label for="m_nr">Nummer av medlem: </label><br><br>
            <input type="text" name="m_nr" required><br><br>

            <label for="fornavn">Fornavn: </label><br><br>
            <input type="text" name="fornavn" required><br><br>

            <label for="etternavn">Etternavn: </label><br><br>
            <input type="text" name="etternavn" required><br><br>

            <label for="adresse">Adresse: </label><br><br>
            <input type="text" name="adresse" required><br><br>

            <label for="postnr">Postnr: </label><br><br>
            <input type="text" name="postnr" required><br><br>

            <label for="poststed">Poststed: </label><br><br>
            <input type="text" name="poststed" required><br><br>

            <label for="fodt">Født: </label><br><br>
            <input type="text" name="fodt" required><br><br>

            <label for="telefon">Telefon: </label><br><br>
            <input type="text" name="telefon" required><br><br>

            <label for="mail">Mail: </label><br><br>
            <input type="text" name="mail" required><br><br>

            <label for="betalt">Betalt: </label><br><br>
            <select id = "betalt" name="betalt">
                <option value="Ja">Ja</option>
                <option value="Nei">Nei</option>
            </select><br><br>
            
            <input type="submit" name="ny_medlem" value="Legg til medlem">
        </form>
    </main>
  
</body>
</html>