<?php	
// Kobler til databasen
include "connect.php";

//Prosedyre for å lese
$query = "SELECT m_nr, fornavn, etternavn, adresse, postnr, poststed, fodt, telefon, mail, betalt FROM medlem";
$stmt = $pdo->prepare($query);
$stmt ->execute();
$medlem = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($medlem);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">

    <title>Gym kundene</title>
</head>
<body>
    <header>
        <p>VIS ALLE medlem</p>
    </header>

    <main>
        <table>
                <thead>
                    <tr>
                        <th>M_nr</th>
                        <th>Fornavn</th>
                        <th>Etternavn</th>
                        <th>Adresse</th>
                        <th>Postnr</th>
                        <th>Poststed</th>
                        <th>Født</th>
                        <th>Telefon</th>
                        <th>Mail</th>
                        <th>Betalt</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($medlem as $med) {    ?>
                        <tr>
                            <td><?php echo $med['m_nr']; ?></td>
                            <td><?php echo $med['fornavn']; ?></td>
                            <td><?php echo $med['etternavn']; ?></td>
                            <td><?php echo $med['adresse']; ?></td>
                            <td><?php echo $med['postnr']; ?></td>
                            <td><?php echo $med['poststed']; ?></td>
                            <td><?php echo $med['fodt']; ?></td>
                            <td><?php echo $med['telefon']; ?></td>
                            <td><?php echo $med['mail']; ?></td>
                            <td><?php echo $med['betalt']; ?></td>
                            <td><a href="rediger.php?m_nr=<?php echo $med['m_nr']; ?>">Rediger</a></td>
                            <td><a id="slett" href="slett.php?m_nr=<?php echo $med['m_nr']; ?>">Slett</a></td>
                        </tr>
                        <?php } ?>


                </tbody>



        </table>

    </main>
    
</body>
</html>
