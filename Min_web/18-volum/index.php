
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beregn Maksimalt Volum</title>
</head>
<body>
    <h1>Størst volum</h1>
    <form action="volum.php" method="get">
        <label for="bredde">Bredde på arket (cm):</label>
        <input type="number" step="0.1" id="bredde" name="bredde" required>
        <br><br>
        <label for="lengde">Lengde på arket (cm):</label>
        <input type="number" step="0.1" id="lengde" name="lengde" required>
        <br><br>
        <input type="submit" value="Beregn">
    </form>
</body>
</html>
