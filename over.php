<?php 

include("header.php");

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
	        <h1 class="font-weight-light">Over het huis</h1>
	      </div>
	    </div>
	  </div>
	</header>



	<div class="pl-3 pt-5 container">
		<div class="row">
	  <h1>Over het huis </h1>
	  <div class="row">
	    <div class="col">
	    <p> <?= $infoDT['overhethuis'] ?> </p>
	    </div>
	  </div>
	</div>

	<div class="pl-3 pt-2 container">
		<div class="row">

    <div class="col">
    	<div class="text-center">
	  		<i class="fas fa-home fa-2x"></i><br>
	  		<b>Oppervlakte:</b>
	  		<p class="text-center"> <?= $infoDT['oppervlakte']  ?> m&sup2;</p>
	  	</div> 
    </div>

    <div class="col">
    	<div class="text-center">
	  		<i class="fas fa-gavel fa-2x"></i><br>
	  		<b>Bouwjaar:</b>
	  		<p> <?= $infoDT['bouwjaar']  ?> </p>
	  	</div> 
    </div>

    <div class="col">
    	<div class="text-center">
	  		<i class="fas fa-euro-sign fa-2x"></i><br>
	  		<b>Vraagprijs:</b>
	  		<p> &euro; <?= $biedprijs  ?> </p>
	  	</div> 
    </div>
</div>
</div>
</div>

</main>
<?php

include("footer.php");

?>
