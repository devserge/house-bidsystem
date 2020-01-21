<?php

function testConnection() {

    $host = $_POST['dbhost'];
    $user = $_POST['dbuser'];
    $pass = $_POST['dbpass'];
    $name = $_POST['dbname'];
    
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
};

function saveConnection() {

    $host = $_POST['dbhost'];
    $user = $_POST['dbuser'];
    $pass = $_POST['dbpass'];
    $name = $_POST['dbname'];
    
    $dbConnection = fopen("includes/dbconnection.php", "w") or die("Kon het bestand niet ophalen! Bestaat deze wel?");

    $php = "<?php \n \n";
    fwrite($dbConnection, $php);

    $php = '$dbhost = ' . "'$host'; \n \n";
    fwrite($dbConnection, $php);

    $php = '$dbuser = ' . "'$user'; \n \n";
    fwrite($dbConnection, $php);

    $php = '$dbpass = ' . "'$pass'; \n \n";
    fwrite($dbConnection, $php);

    $php = '$dbname = ' . "'$name'; \n \n";
    fwrite($dbConnection, $php);

    $php = "?>";
    fwrite($dbConnection, $php);

    fclose($dbConnection);

    include("dbh.inc.php");

    $gegevens = "CREATE TABLE gegevens(
        adres VARCHAR(100) NOT NULL,
        huisnaam VARCHAR(30) NOT NULL,
        email VARCHAR(70) NOT NULL UNIQUE
    )";
     $biedingen = "CREATE TABLE biedingen(
        bod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        biedingen VARCHAR(100) NOT NULL,
        hoogstebod VARCHAR(30) NOT NULL,
        laagstebod VARCHAR(70) NOT NULL
    )";

    if(mysqli_query($link, $gegevens)){

        echo "
            <div class='alert alert-success' role='alert'>
            De database is opgezet.
            </div>    
        ";
    } else{
        echo "ERROR: Could not able to execute $gegevens. " . mysqli_error($link);
    }

    if(mysqli_query($link, $biedingen)){
        echo "";
    }

        echo "
            <div class='alert alert-success' role='alert'>
            De database is opgeslagen in de configuratie. U wordt nu doorgestuurd.
            </div>    
        ";

        header( "refresh:2;url=setup2.php" );
};

function saveData() {

include("dbh.inc.php");

$adres = $_POST['adres'];
$mail = $_POST['email'];
$huisnaam = $_POST['huisnaam'];

$datainzet = "INSERT INTO gegevens (adres, huisnaam, email)
VALUES ('$adres', '$huisnaam', '$mail')";

if ($link->query($datainzet) === TRUE) {
        echo "
            <div class='alert alert-success' role='alert'>
            De gegevens zijn verwerkt. U wordt doorgestuurd naar de website.
            </div>    
        ";
} else {
    echo "Error: " . $datainzet . "<br>" . $link->error;
}

$link->close();

$setup = "setup.php";  
unlink($setup);

$setupw = "setup2.php";  
unlink($setupw);
        
header( "refresh:2;url=index.php" );
};

?>