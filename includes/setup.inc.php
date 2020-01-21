<?php

include("includes/functions.php");

if(isset($_POST['dbconntest'])) {
	testConnection();
};


if(isset($_POST['dbopslaan'])) {
	saveConnection();
};

if(isset($_POST['dbopzet'])) {
	dbOpzet();
};


if(isset($_POST['dataopslaan'])) {
	saveData();
};



?>
