<?php

// Koble til databasen
include "connect.php";

include "meny.php";
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['slett_medlem'])) {
    $m_nr = $_POST['m_nr'];
    
    $query = "DELETE FROM medlem WHERE m_nr = :m_nr";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":m_nr", $m_nr);
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
    <title>Slett medlem</title>
</head>
<body>
    <header>
        <p>Slett medlem</p>
    </header>
    <main>
        <?php
        if ($stmt) {
            echo "<p>Medlemmet er blitt slettet!</p>";
        } else {
            echo "<p>Det oppsto en feil. Medlemmet ble ikke slettet</p>";
        }
        ?>
    </main>
    <script src="js.js"></script>
</body>
</html>