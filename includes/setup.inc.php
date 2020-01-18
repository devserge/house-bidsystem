<?php

$host = $_POST['dbhost'];
$user = $_POST['dbuser'];
$pass = $_POST['dbpass'];
$name = $_POST['dbname'];

// Database connectie testen zodra op de knop gedrukt wordt
if(isset($_POST['dbconntest'])) { //
    
    // database connectie leggen
    $conn = new mysqli($host, $user, $pass, $name);
    
    // als de verbinding mislukt geef error
    if ($conn->connect_error) {
        echo "
            <div class='alert alert-danger' role='alert'>
            Er kon geen verbinding worden gemaakt met de database. Zijn de gegevens juist?
            </div>    
        ";
    }else { // als de verbinding slaagt geef succes
        echo "
            <div class='alert alert-success' role='alert'>
            De verbinding is gelukt. Je kunt verder gaan met het proces.
            </div>    
        ";
    }
}

if(isset($_POST['dbopslaan'])) {
    echo "
    De volgende database gegevens zijn opgeslagen:
    Host: $host
    Gebruiker: $user
    Wachtwoord: $pass
    Database: $name
    ";
    
    
}




?>
