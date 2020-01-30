<body>

<?php 

include("header.php");
include("includes/contact.inc.php");

 ?>


<style>

.masthead {
  height: 100vh;
  min-height: 500px;
  background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
	text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

</style>


<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">Contact</h1>
        <p class="lead">Voor al uw vragen of opmerkingen zijn wij beschikbaar!</p>
      </div>
    </div>
  </div>
</header>

<main>

<!-- Contact Form -->

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://spixo.nl/img/spixo-x-zwart.png" alt="spixo-image"/>
            </div>
            <form method="post">
                <h3>Laat een berichtje achter</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="naam" class="form-control" placeholder="Uw naam *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Uw e-mailadres *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="telefoonnummer" class="form-control" placeholder="Uw telefoonnummer *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="stuurbericht" class="btnContact" value="Verstuur bericht"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="bericht" class="form-control" placeholder="Uw bericht *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                    </div>
                </div>
            </form>
		</div>



</main>



<?php

include("footer.php");

?>


</body>
</html>

