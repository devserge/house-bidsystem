<?php

// de functions includen
include("includes/functions.php");

// naar functie als er op de button wordt gedrukt
if(isset($_POST['dbconntest'])) {
	testConnection();
};

// naar functie als er op de button wordt gedrukt
if(isset($_POST['dbopslaan'])) {
	saveConnection();
};
// naar functie als er op de button wordt gedrukt
if(isset($_POST['dbopzet'])) {
	dbOpzet();
};

// naar functie als er op de button wordt gedrukt
if(isset($_POST['dataopslaan'])) {
	saveData();
};



?>
