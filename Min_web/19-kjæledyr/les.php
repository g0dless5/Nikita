<?php	
// Kobler til databasen
include "connect.php";

// Prosedyre for å lese
$query = "SELECT merkenummer, navn, art, fodselsdato, kjonn FROM kjaledyr";
$stmt = $pdo->prepare($query);
$stmt->execute();
$kjaledyr = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./CSS/style.css?v=1">
    <script src="js.js"></script>

    <title>Mine kjæledyr</title>
</head>
<body>
    <?php
        include "meny.php";?>
    <header>
        <p>VIS ALLE kjæledyr</p>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Merkenummer</th>
                    <th>Navn</th>
                    <th>Art</th>
                    <th>Fødselsdato</th>
                    <th>Kjønn</th>
                    <th>Rediger</th>
                    <th>Slett</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($kjaledyr as $dyr) { ?>
                    <tr>
                        <td><?php echo $dyr['merkenummer']; ?></td>
                        <td><?php echo $dyr['navn']; ?></td>
                        <td><?php echo $dyr['art']; ?></td>
                        <td><?php echo $dyr['fodselsdato']; ?></td>
                        <td><?php echo $dyr['kjonn']; ?></td>
                        <td><a href="rediger.php?merkenummer=<?php echo $dyr['merkenummer']; ?>">Rediger</a></td>
                        <td><a class="slett" href="slett.php?merkenummer=<?php echo $dyr['merkenummer']; ?>">Slett</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>