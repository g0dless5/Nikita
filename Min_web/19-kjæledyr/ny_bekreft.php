<?php
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['ny_kjaledyr'])) {
    $merkenummer = $_POST['merkenummer'];
    $navn = $_POST['navn'];
    $art = $_POST['art'];
    $fodselsdato = $_POST['fodselsdato'];
    $kjonn = $_POST['kjonn'];

    $query = "INSERT INTO kjaledyr (merkenummer, navn, art, fodselsdato, kjonn) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    
    $success = $stmt->execute([$merkenummer, $navn, $art, $fodselsdato, $kjonn]);
}
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css?v=1">
    <script src="js.js"></script>
    <title>Bekreftelse</title>
</head>
<body>
    <header>
        <p>Bekreftelse</p>
    </header>
    <main>
        <?php if (isset($success) && $success): ?>
            <p>Kjæledyret er registrert!</p>
        <?php else: ?>
            <p>Feil: Kunne ikke registrere kjæledyret.</p>
        <?php endif; ?>
    </main>
</body>
</html>
