
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gangetabell</title>
    <h1>Din gangetabell</h1>
    <?php
$tall = $_GET['tall'];
$range = 10;
$begin = "Gangetabell: $tall";
$respons = "";
for ($i = 1; $i <= 10; $i++) {
    echo "$tall x $i = " . ($tall * $i) . "<br>";
}
?>
</head>
<body>
    
</body>
</html>