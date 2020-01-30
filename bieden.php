<?php 

include("header.php");
include("includes/bied.inc.php");

?>
<main>
	<style>

	.masthead {
	  height: 50vh;
	  min-height: 400px;
	  background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
	  background-size: cover;
	  background-position: center;
	  background-repeat: no-repeat;
	}

	</style>

	<header class="masthead">
	  <div class="container h-100">
	    <div class="row h-100 align-items-center">
	      <div class="col-12 text-center">
	        <h1 class="font-weight-light">Bieden</h1>
	      </div>
	    </div>
	  </div>
	</header>

  <div class="pt-5 container">
    <h1>Recente biedingen:</h1>
    <p> 
      <?php 
        showRecentBiedingen();
      ?>
    </p>
  </div>
  
	<div class="pt-5 container">
		<h1>Plaats een nieuw bod</h1>
			<form method="POST">
              <div class="form-group">
                <label for="bodbedrag">Bodbedrag:</label>
                <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text"> <i class="fa fa-euro-sign"></i> </div>
              </div>
                <input type="number" name="bodbedrag" class="form-control" placeholder="Geef hier uw bodbedrag aan.." required>
              </div>
            </div>

              <div class="form-group">
                <label for="volledigenaam">Volledige naam:</label>
                <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text"> <i class="fa fa-user"></i> </div>
              </div>
                <input type="text" name="volledigenaam" class="form-control" placeholder="Geef hier uw volledige naam op.." required>
              </div>
            </div>

              <div class="form-group">
                <label for="emailadres">E-mailadres:</label>
                <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text"> <i class="fa fa-envelope"></i> </div>
              </div>
                <input type="email" name="emailadres" class="form-control" placeholder="Voer hier uw e-mailadres in.." required>
              </div>
            </div><br>

			  <button type="submit" name="plaatsbod" class="btn btn-primary">Plaats bod</button>

			</form>

	</div>


  <div class="pt-5 container">
    <h1>Alle biedingen:</h1>
    <p> 
      <?php 
        showAllBiedingen();
      ?>
    </p>
  </div>

</main>


<?php

include("footer.php");

?>