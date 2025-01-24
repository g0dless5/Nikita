<?php
session_start();
echo $_SESSION["start"] = 100;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
</head>
<body>
    <h1>Page 2</h1>
    <a href="page1.php">Gå til page 1</a>
</body>
</html>