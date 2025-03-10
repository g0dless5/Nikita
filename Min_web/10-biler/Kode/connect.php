<?php

// Denne filen inneholder databasetilkoblingsinformasjonen som brukes i de andre filene i prosjektet.
// Den kobler til databasen og oppretter en forbindelse som kan brukes i de andre filene.

//Parametere til databaseserver 
$host = 'localhost';
$brukernavn = 'root';
$passord = '';
$database = 'biler-2';

// Sett opp en forbindelse til databasen med PDO (PHP Data Object) 
try
    {
    $pdo = new PDO("mysql:host=$host;dbname=$database",$brukernavn,$passord);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Vellykket oppkobling til MySql!<br>";
    }
// Dersom ikke forbindelsen settes opp korrekt gir "catch" en feilmelding
catch(PDOException $e)
    {
    die("Oppkoblingsfeil til MySql: " . $e->getMessage() . "<br>");
    }

   
