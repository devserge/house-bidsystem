<?php

<<<<<<< HEAD
include("../includes/functions.php");
=======
// de functions includen
include("includes/functions.php");
>>>>>>> 38725b49cb4f6aab09a4c72acd742d580a10c00e

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
