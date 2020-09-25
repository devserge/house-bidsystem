<?php

?>

<link rel="stylesheet" type="text/css" href="assets/css/footer.css">

<!-- Footer -->
<footer>

<div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2><?= $adresDT['huisnaam'] ?></h2>
      <p class="pr-5 text-white-50"><?= $infoDT['kleinetoelichting'] ?></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Handige links</h4>
        <ul class="m-0 p-0">
          <li>- <a href="index.php">Home</a></li>
          <li>- <a href="over.php">Over het huis</a></li>
          <li>- <a href="bieden.php">Bieden</a></li>
          <li>- <a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Adres</h4>
      <p><?= $adresDT['adres'] ?><br>
        <?= $adresDT['postcode'] ?>, <?= $adresDT['woonplaats'] ?><br>
        <?= $adresDT['provincie'] ?>
      </p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i></i><?= $adresDT['telefoonnummer'] ?></p>
      <p><i class="fa fa-envelope-o mr-3"></i><?= $adresDT['email'] ?></p>
    </div>
  </div>
  <div class="row mt-5">
  <div class="col footer-copyright text-center py-3">Met veel ✨ en ☕ gemaakt door 
    <a href="https://spixo.nl" target="_blank">Spixo Designs</a>. <br>
    2020 © Alle Rechten Voobehouden.
  </div>
  </div>
</div>
</footer>
<!-- Footer -->
