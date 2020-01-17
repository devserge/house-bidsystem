<?php

include("header.php");

?>

<body>
    <div class="container mt-5">
        <form>
            <div class="col md-5">
              <h1>Database gegevens:</h1>
              <div class="form-group">
                <label for="dbhost">Database host:</label>
                <input type="text" name="dbhost" class="form-control" placeholder="Vul database ip in.." required>
              </div>
                <div class="form-group">
                <label for="dbusername">Database gebruikersnaam :</label>
                <input type="text" name="dbuser" class="form-control" placeholder="Vul de database gebruikersnaam in.." required>
              </div>
                <div class="form-group">
                <label for="dbpassword">Database wachtwoord:</label>
                <input type="password" name="dbpassword" class="form-control" placeholder="Vul het database wachtwoord in.." required>
              </div>
                <div class="form-group">
                <label for="dbname">Database naam:</label>
                <input type="text" name="dbname" class="form-control" placeholder="Vul database naam in.." required>
              </div>
            <button type="submit" class="btn btn-warning" name="testconn">Test verbinding</button>  <button type="submit" class="btn btn-success" name="dbopslaan">Opslaan</button>

            </div>
            </form>
            
            <br>
            <div class="col md-5">
            <form>
              <h1>Administratieve gegevens:</h1>
              <div class="form-group">
                <label for="adres">Adres en huisnummer:</label>
                <input type="text" name="adres" class="form-control" placeholder="Vul uw adres en huinummer in.." required>
              </div>
              <div class="form-group">
                <label for="email">E-mailadres:</label>
                <input type="email" name="email" class="form-control" placeholder="Vul uw e-mailadres in.." required>
              </div>
                <div class="form-group">
                <label for="huisnaam">Naam van het huis:</label>
                <input type="text" name="huisnaam" class="form-control" placeholder="Vul hier de naam van het huis in.." required>
              </div>
              <button type="submit" class="btn btn-success" name="opslaan">Opslaan</button>
            </div>
          </form>
        </div>
</body>