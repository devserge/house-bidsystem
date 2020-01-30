<?php 

include("header.php");

 ?>

<main>


<style>

.masthead {
  height: 100vh;
  min-height: 500px;
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
        <h1 class="font-weight-light">Welkom bij de verkoop van <?php echo($adresDT['huisnaam']) ?></h1>
        <p class="lead">De minimale vraagprijs van dit huis is: &euro; <?php echo $biedprijs ?></p>
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->
<section class="mt-5">
  <div class="container mt-5">
    <h2 class="font-weight-light">Over het huis</h2>
    <p> <?php echo($infoDT['overhethuis']) ?> </p>
  </div>
</section>

<!-- Slideshow -->
<div class="container h-50">
    <div class="row h-50 align-items-center">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/01.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/03.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</div>



</main>


<?php

include("footer.php");

?>