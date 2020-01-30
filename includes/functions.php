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
    
    $dbConnection = fopen("../includes/dbconnection.php", "w") or die("Kon het bestand niet ophalen! Bestaat deze wel?");

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
        adres VARCHAR(80) NOT NULL,
        postcode VARCHAR(7) NOT NULL,
        woonplaats VARCHAR(100) NOT NULL,
        provincie VARCHAR(50) NOT NULL,
        huisnaam VARCHAR(30) NOT NULL,
        email VARCHAR(70) NOT NULL UNIQUE,
        telefoonnummer VARCHAR(15) NOT NULL
    )";
     $biedingen = "CREATE TABLE biedingen(
        bodid INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        naam VARCHAR (100) NOT NULL,
        emailadres VARCHAR(100) NOT NULL,
        bodbedrag VARCHAR(100) NOT NULL,
        datum DATETIME DEFAULT CURRENT_TIMESTAMP,
        akkoord VARCHAR(50) NOT NULL
    )";

     $informatie = "CREATE TABLE informatie(
        kleinetoelichting VARCHAR(20000) NOT NULL,
        overhethuis VARCHAR(100000) NOT NULL,
        prijs VARCHAR(30) NOT NULL,
        bouwjaar VARCHAR(70) NOT NULL,
        oppervlakte VARCHAR(15) NOT NULL
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

  if(mysqli_query($link, $informatie)){

        echo "
            <div class='alert alert-success' role='alert'>
            De informatie is opgeslagen.
            </div>    
        ";
    } else{
        echo "ERROR: We konden de table niet opslaan $informatie. " . mysqli_error($link);
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

	$datastmt = $link->prepare("INSERT INTO gegevens (adres, postcode, woonplaats, provincie, huisnaam, email, telefoonnummer)
    VALUES (?, ?, ?, ?, ?, ?, ?)");


	$datastmt->bind_param("sssssss", $adres, $postcode, $woonplaats, $provincie, $huisnaam, $mail, $telefoonnummer);

// set parameters and execute
    $adres = $_POST['adres'];
    $mail = $_POST['email'];
    $huisnaam = $_POST['huisnaam'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];
    $provincie = $_POST['provincie'];
    $telefoonnummer = $_POST['tnummer'];
	$datastmt->execute();

	$overstmt = $link->prepare("INSERT INTO informatie (kleinetoelichting, overhethuis, prijs, bouwjaar, oppervlakte)
    VALUES (?, ?, ?, ?, ?)");

	$overstmt->bind_param("sssss", $kleineover, $uitgebreideover, $prijs, $bouwjaar, $oppervlakte);

    $kleineover = $_POST['kleintoel'];
    $uitgebreideover = $_POST['uitgebtoel'];
    $prijs = $_POST['biedprijs'];
    $bouwjaar = $_POST['bouwjaar'];
    $oppervlakte = $_POST['oppervlakte'];
    $overstmt->execute();

	echo "<div class='alert alert-success' role='alert'>
			De gegevens zijn verwerkt. U wordt doorgestuurd naar de website.
	       </div>";

    $link->close();

    $sourcesetup = 'setup.php';
    $bestemmingpad = '../.secure/';
    rename($sourcesetup, $bestemmingpad . pathinfo($sourcesetup, PATHINFO_BASENAME));

    $sourcesetupsecond = 'setup2.php';
    rename($sourcesetupsecond, $bestemmingpad . pathinfo($sourcesetupsecond, PATHINFO_BASENAME));


    header( "refresh:2;url=../index.php" );

};

function stuurMailBodEigenaar() {

    include("definities.inc.php");

    $ontvanger = $adresDT['email'];
    $emailbieder = $_POST['emailadres'];
    $naamplaatser = $_POST['volledigenaam'];
    $bedragform = $_POST['bodbedrag'];
    $bedrag = number_format($bedragform, 2, ',', '.');
    $huis = $adresDT['huisnaam'];
    $emailnaam = $adresDT['huisnaam'];
    $emaileigenaar = $adresDT['email'];
    $onderwerp = "Er is op uw huis geboden door " . $naamplaatser;
    $headers = 'From:' . $emailnaam . '<' . $emaileigenaar . '>' .  "\r\n" . 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $Body = "Er is geboden door " . $naamplaatser . " op " . $huis . "<br><br>";
    $Body .= "<br>";

    $Body .= "<b>De naam van de bieder:</b> ";
    $Body .= $naamplaatser;
    $Body .= "<br>";
     
    $Body .= "<b>Het e-mailadres van de bieder:</b> ";
    $Body .= $ontvanger;
    $Body .= "<br>";

    $Body .= "<b>Het geboden bedrag:</b> ";
    $Body .= "&euro; " . $bedrag;
    $Body .= "<br><br>";

    $Body .= "U kunt dit bod nu terugzien op de website. Wilt u akkoord gaan? Klik dan op de knop hier beneden.";

    // verstuur mail
    $verstuur = mail($ontvanger, $onderwerp, $Body, $headers);

    // uitkomst van de mailfunction
    if ($verstuur == true){
       stuurMailBieder();
    }else{
        header("Location: '?error=mailbieder'");
    }

}


function stuurMailBieder() {

    include("definities.inc.php");

    $ontvanger = $_POST['emailadres'];
    $naamplaatser = $_POST['volledigenaam'];
    $bedragform = $_POST['bodbedrag'];
    $bedrag = number_format($bedragform, 2, ',', '.');
    $huis = $adresDT['huisnaam'];
    $emailnaam = $adresDT['huisnaam'];
    $emaileigenaar = $adresDT['email'];
    $onderwerp = "Uw bod op " . $adresDT['huisnaam'] . " is geplaatst.";
    $headers = 'From:' . $emailnaam . '<' . $emaileigenaar . '>' .  "\r\n" . 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $Body = "Uw bod op het huis " . $adresDT['huisnaam'] . " is geplaatst.<br><br>";
    $Body .= "<br>";

    $Body .= "<b>Uw naam:</b> ";
    $Body .= $naamplaatser;
    $Body .= "<br>";
     
    $Body .= "<b>Uw e-mailadres:</b> ";
    $Body .= $ontvanger;
    $Body .= "<br>";

    $Body .= "<b>Het geboden bedrag:</b> ";
    $Body .= "&euro; " . $bedrag;
    $Body .= "<br><br>";

    $Body .= "U kunt dit bod nu terugzien op de website. U ontvangt een e-mail zodra de eigenaar een reactie op uw bod heeft gegeven.";

    // verstuur mail
    $verstuur = mail($ontvanger, $onderwerp, $Body, $headers);

    // uitkomst van de mailfunction
    if ($verstuur){
       insertBod();
    }else{
        header("Location: '?error=mailbieder'");
    }

}

function insertBod() {
	include("dbh.inc.php");

	$bodstmt = $link->prepare("INSERT INTO biedingen (naam, emailadres, bodbedrag, akkoord) VALUES (?, ?, ?, ?)");

	$bodstmt->bind_param("ssss", $naam, $emailadres, $bodbedrag, $akkoord);

    $bodbedragform = $_POST['bodbedrag'];
	$bodbedrag = "€ " . number_format($bodbedragform, 2, ',', '.');
    $akkoord = "In afwachting";
    $emailadres = $_POST['emailadres'];
    $naam = $_POST['volledigenaam'];
	$bodstmt->execute();
	$link->close();
     
	echo "<script>
	swal('Je bod is geplaatst!', 'Je bod is gepubliceerd en de biedmeester kan deze nu zien!', 'success');
	</script>";
}

function showRecentBiedingen() {

    include("dbh.inc.php");

    $biedingenQR = "SELECT bodid, naam, bodbedrag, datum FROM biedingen ORDER BY bodid DESC LIMIT 3";
    $biedingenRS = mysqli_query($link, $biedingenQR); 

    echo "<br>";
    echo "<table class='table table-striped'";
    echo "
      <thead class='thead-dark'>
    <tr>
      <th scope='col'>Bodnummer</th>
      <th scope='col'>Volledige naam</th>
      <th scope='col'>Geboden bedrag</th>
      <th scope='col'>Datum van bod</th>
    </tr>
  </thead>
    ";
    while ($biedingenRW = mysqli_fetch_assoc($biedingenRS)) { 
        echo "<tr>";
        foreach ($biedingenRW as $biedingenFLD => $biedingenVL) { 
            echo "<td>" . $biedingenVL . "</td>"; 
        }
        echo "</tr>";
    }
    echo "</table>";



}

function showAllBiedingen() {

    include("dbh.inc.php");

    $biedingenQR = "SELECT bodid, naam, bodbedrag, datum FROM biedingen order by (0 + bodbedrag) asc";
    $biedingenRS = mysqli_query($link, $biedingenQR); 

    echo "<br>";
    echo "<table class='table table-striped'";
    echo "
      <thead>
    <tr>
      <th scope='col'>Bodnummer</th>
      <th scope='col'>Volledige naam</th>
      <th scope='col'>Geboden bedrag</th>
      <th scope='col'>Datum van bod</th>
    </tr>
  </thead>
    ";
    while ($biedingenRW = mysqli_fetch_assoc($biedingenRS)) { 
        echo "<tr>";
        foreach ($biedingenRW as $biedingenFLD => $biedingenVL) { 
            echo "<td>" . $biedingenVL . "</td>"; 
        }
        echo "</tr>";
    }
    echo "</table>";



}

function sendMessage() {

    include("definities.inc.php");

    $ontvanger = $adresDT['email'];
    $emailplaatser = $_POST['emailadres'];
    $naamplaatser = $_POST['naam'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $huis = $adresDT['huisnaam'];
    $bericht = $_POST['bericht'];
    $emailnaam = $adresDT['huisnaam'];
    $emaileigenaar = $adresDT['email'];
    $onderwerp = "U heeft een bericht ontvangen van " . $naamplaatser;
    $headers = 'From:' . $emailnaam . '<' . $emaileigenaar . '>' .  "\r\n" . 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $Body = "U heeft een nieuw contact verzoek van " . $naamplaatser . " ontvangen op " . $huis . "<br><br>";
    $Body .= "<br>";

    $Body .= "<b>Naam:</b> ";
    $Body .= $naamplaatser;
    $Body .= "<br>";
     
    $Body .= "<b>E-mailadres:</b> ";
    $Body .= $emailplaatser;
    $Body .= "<br>";

    $Body .= "<b>Telefoonnummer:</b> ";
    $Body .= $telefoonnummer;
    $Body .= "<br>";

    $Body .= "<b>Het bericht:</b> ";
    $Body .= $bericht;
    $Body .= "<br><br>";

    $Body .= "Reageren op dit verzoek? Stuur hem/haar dan handmatig een e-mail terug, of bel voor nog beter contact.";

    // verstuur mail
    $verstuur = mail($ontvanger, $onderwerp, $Body, $headers);

    // uitkomst van de mailfunction
    if ($verstuur == true){
           echo "<script>
    swal('Je bericht is verstuurd!', 'Je bericht is succesvol verstuurd, en de eigenaar vna het huis neemt spoedig contact met je op!', 'success');
    </script>";
    }else{
        header("Location: '?error=mailbieder'");
    }

}

?>