<?php

include("header.php");
include("../includes/setup.inc.php");

?>
<br>
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
                <label for="postcode">Postcode:</label>
                <input type="text" name="postcode" class="form-control" placeholder="Vul de postcode van het huis in..." required>
              </div>
              <div class="form-group">
                <label for="woonplaats">Woonplaats:</label>
                <input type="text" name="woonplaats" class="form-control" placeholder="Vul de woonplaats van het huis in..." required>
              </div>
              <!-- Maak hier een dropdown van met alle provincies in Nederland -->
              <div class="form-group">
                <label for="provincie">Provincie:</label>
                <select class="form-control" name="provincie">
                <option>Drenthe</option>
                <option>Flevoland </option>
                <option>Friesland</option>
                <option>Gelderland</option>
                <option>Groningen</option>
                <option>Limburg</option>
                <option>Noord-Brabant</option>
                <option>Noord-Holland </option>
                <option>Overijssel</option>
                <option>Utrecht</option>
                <option>Zeeland</option>
                <option>Zuid-Holland</option>
              </select>
              </div>
              <div class="form-group">
                <label for="email">E-mailadres:</label>
                <input type="email" name="email" class="form-control" placeholder="Vul hier uw e-mailadres in.." required>
              </div>
                            <div class="form-group">
                <label for="tnummer">Telefoonnummer:</label>
                <input type="text" name="tnummer" class="form-control" placeholder="Vul hier uw telefoonnummer in..." required>
              </div>
                <div class="form-group">
                <label for="huisnaam">Naam van het huis:</label>
                <input type="text" name="huisnaam" class="form-control" placeholder="Vul hier de naam van het huis in.." required>
              </div>
              <br>
              <h1>Over het huis:</h1>
              <div class="form-group">
                <label for="kleintoel">Kleine toelichting over het huis (max. 100 tekens):</label>
                        <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
               <div class="input-group-text"> <i class="fa fa-edit"></i> </div>
              </div>
                <input type="text" name="kleintoel" class="form-control" placeholder="Vertel hier in het kort over het huis.." required>
              </div>
            </div>
              <!-- Maak hier een col van -->
              <div class="form-group">
                <label for="uitgebtoel">Uitgebreide toelichting (max. 300 tekens):</label>
                          <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
               <div class="input-group-text"> <i class="fa fa-edit"></i> </div>
              </div>
                <input type="text" name="uitgebtoel" class="form-control" placeholder="Geef hier uw (verkoop)-verhaal over het huis.." required>
              </div>
            </div>
              <!-- Icon teken in klein vakje ervoor. -->
              <div class="form-group">
                <label for="biedprijs">Minimale biedprijs:</label>
                        <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">€</div>
                </div>
                <input type="number" name="biedprijs" class="form-control" placeholder="Vul hier het minimale biedbedrag in.." required>
              </div>
              </div>

              <!-- Icon teken in klein vakje ervoor. -->
                     <div class="form-group">
                <label for="bouwjaar">Bouwjaar:</label>
                 <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
               <div class="input-group-text"> <i class="fa fa-gavel"></i> </div>
              </div>
                <input type="number" name="bouwjaar" class="form-control" placeholder="Vul hier de bouwjaar van het huis in.." required>
              </div>
            </div>

              <!-- Icon teken in klein vakje ervoor. -->
              <div class="form-group">
                <label for="oppervlakte">Oppervlakte:</label>
                  <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
               <div class="input-group-text"> <i class="fa fa-home"></i> </div>
              </div>
                <input type="text" name="oppervlakte" class="form-control" placeholder="Vul hier de oppervlakte van het huis in" required>
              </div>
            </div>
              <button type="submit" name="dataopslaan" class="btn btn-primary">Installatie afronden</button>
          </form>
        </div>
</body>

<?php

include("footer.php");

?>