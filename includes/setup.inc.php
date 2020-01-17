<?php

if(isset($_POST['dbconntest'])) {
    $host = $_POST['dbhost'];
    $user = $_POST['dbuser'];
    $pass = $_POST['dbpass'];
    $name = $_POST['dbname'];
    
    $conn = new mysqli($host, $user, $pass, $name);
    
    
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
