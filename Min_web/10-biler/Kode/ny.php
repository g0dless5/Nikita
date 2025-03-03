<?php

//Henter forbindelses-streng
include 'connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='./css/style.css' rel='stylesheet' type='text/css'>
    <title>Min Bil</title>
</head>
<body>
    <?php //include 'meny.php';?>
    <header>
      <p>REGISTRER NY BIL<br></p>
    </header>

    <main>
    
      <form action='ny_bekreft.php' method="POST">

        <label for="regnr">Regnr: </label> <br>
        <input type='text' name='regnr' id="regnr" required> <br> <br>
        
        <label for="merke">Merke: </label> <br>
        <input type='text' name='merke' id="merke" required> <br> <br>

        <label for="type" >Type: </label> <br>
        <input type='text' name='type' id="type" required> <br> <br>

        <label for="farge" >Farge: </label> <br>
        <input type='text' name='farge' id="farge" required> <br> <br>
        
        <label for="aar" >År: </label> <br>
        <input type='text' name='aar' id="aar" required> <br> <br>  

        <input type='submit' name='ny_bil' id="ny_bil" value="Registrer" > <br>
        
           
      </form>   
    </main>
    
    <footer>
      <?php// include 'footer.php';?>  
    </footer>

          
</body>
</html>