<?php

require("dbconnection.php");

// Verbinden met database
$link = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Controleren van verbinding
if($link === false){
    die("ERROR: Kon niet verbinden met database. " . mysqli_connect_error());
}


?>