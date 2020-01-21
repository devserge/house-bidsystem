<?php

include("header.php");
include("includes/setup.inc.php");

?>

<body>
    <div class="container mt-5">
            <div class="col md-5">
            <form method="POST">
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
              <button type="submit" class="btn btn-warning" name="dbopzet">Database opzetten</button>
              <button type="submit" class="btn btn-primary" name="dataopslaan">Afronden</button>
            </div>
          </form>
        </div>
</body>

<?php

include("footer.php");

?>