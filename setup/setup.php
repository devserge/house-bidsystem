<?php

include("header.php");
include("../includes/setup.inc.php");

?>

<body>
    <div class="container mt-5">
        <form method="POST" >
            <div class="col md-5">
              <h1>Database gegevens:</h1>
              <div class="form-group">
                <label for="dbhost">Database host:</label>
                <input type="text" name="dbhost" class="form-control" placeholder="Vul database ip in.." value="<?php echo isset($_POST['dbhost']) ? $_POST['dbhost'] : '' ?>" required>
              </div>
                <div class="form-group">
                <label for="dbusername">Database gebruikersnaam :</label>
                <input type="text" name="dbuser" class="form-control" placeholder="Vul de database gebruikersnaam in.." value="<?php echo isset($_POST['dbuser']) ? $_POST['dbuser'] : '' ?>" required>
              </div>
                <div class="form-group">
                <label for="dbpassword">Database wachtwoord:</label>
                <input type="password" name="dbpass" class="form-control" placeholder="Vul het database wachtwoord in.." value="<?php echo isset($_POST['dbpass']) ? $_POST['dbpass'] : '' ?>" required>
              </div>
                <div class="form-group">
                <label for="dbname">Database naam:</label>
                <input type="text" name="dbname" class="form-control" placeholder="Vul database naam in.." value="<?php echo isset($_POST['dbname']) ? $_POST['dbname'] : '' ?>" required>
              </div>
            <button type="submit" class="btn btn-warning" name="dbconntest">Test verbinding</button>  <button type="submit" class="btn btn-success" name="dbopslaan">Opslaan</button>

            </div>
            </form>

        </div>
</body>

<?php

include("footer.php");

?>