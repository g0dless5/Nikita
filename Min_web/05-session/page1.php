<?php
session_start();
$_SESSION["start"] = 100;
echo $_SESSION["start"] = 100;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>
<body>
    <h1>Page 1</h1>
    <a href="page2.php">Gå til page 2</a>
</body>
</html>