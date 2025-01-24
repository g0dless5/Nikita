<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kjøp kino biletter</title>
</head>
<body>
    <main>
    <h2>Kjøp kino biletter. Barn (2-12 år): 80 kroner.
    Ungdom (13-17 år): 100 kroner.
    Voksen (over 18 år): 120 kroner. </h2>
    <form action="checkout.php" method="get">
    <label for= "barna"> Antall person fra 2 til 12 år gammel : </label><br>
    <input type="number" name= "barna"> <br>
    <label for= "ungdom"> Antall person fra 13 til 17 år gammel: </label><br>
    <input type="number" name= "ungdom"> <br>
    <label for= "voksen"> Antall voksen person: </label><br>
    <input type="number" name= "voksen"> <br>
    <input type="submit" name= "submit1">
</form>


    </main>
</body>
</html>