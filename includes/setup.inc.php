<?php

if(isset($_POST['dbconntest'])) {
    $dbhost = $_POST[dbhost];
    $dbuser = $_POST[dbname];
    $dbpass = $_POST[dbpass];
    $dbname = $_POST[dbname];
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    
    
    if ($conn->connect_error) {
        echo "
            <div class='alert alert-danger' role='alert'>
            Er kon geen verbinding worden gemaakt met de database. Zijn de gegevens juist?
            </div>    
        ";
    }else {
        echo "
            <div class='alert alert-success' role='alert'>
            Huts! Er is verbinding gelegd met de database!
            </div>    
        ";
    }
}

?>
