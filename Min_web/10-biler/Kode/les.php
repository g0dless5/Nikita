<?php	
// Kobler til databasen
include "connect.php";

//Prosedyre for å lese
$query = "SELECT regnr, merke, type, farge, aar FROM biler";
$stmt = $pdo->prepare($query);
$stmt ->execute();
$biler = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($biler);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./CSS/style.css">

    <title>Mine biler</title>
</head>
<body>
    <header>
        <p>VIS ALLE biler</p>
    </header>

    <main>
        <table>
                <thead>
                    <tr>
                        <th>Regnr</th>
                        <th>Merke</th>
                        <th>Type</th>
                        <th>Farge</th>
                        <th>År</th>
                        <th>Rediger</th>
                        <th>Slett</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($biler as $bil) {    ?>
                        <tr>
                            <td><?php echo $bil['regnr']; ?></td>
                            <td><?php echo $bil['merke']; ?></td>
                            <td><?php echo $bil['type']; ?></td>
                            <td><?php echo $bil['farge']; ?></td>
                            <td><?php echo $bil['aar']; ?></td>
                            <td><a href="rediger.php?regnr=<?php echo $bil['regnr']; ?>">Rediger</a></td>
                            <td><a id="slett" href="slett.php?regnr=<?php echo $bil['regnr']; ?>">Slett</a></td>
                        </tr>
                        <?php } ?>


                </tbody>



        </table>

    </main>
    
</body>
</html>
