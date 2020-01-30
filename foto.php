<?php 

include("header.php");

 ?>

<main>
<br><br><br><br>
<style>
* {
  box-sizing: border-box
}

body {
	counter-reset: srl;
	font-family: Verdana, sans-serif; 
	margin:0
}
.mySlides {
  display: none;
}

.Petrov{
  counter-reset: srl;
}

/*weet ik veel wat ze doen? als het kan erin laten*/
.fotoslideshow {
  vertical-align: middle;
}

/* Slideshow container */
.slideshow-container {
  max-width: 625px;
  position: relative;
  margin: auto;
  border: 1px solid black;
  /*float: left;*/
}
/*zorgt ervoor dat de fotos eerst worden verborgen*/
.Petrov{
  display: none;
}

/* volgende & terugious buttons */
.terug, .volgende {
  background-color: rgba(0,0,0,0.8);
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  /*float: left; */
}

/* Position the "volgende button" to the right */
/*zorgt ervoor dat de links-rechts knop zo staan*/
/*erin houden*/
.volgende {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
/*zorgt voor het zwart worden van de pijlen*/
/*moet erin worde gehouden */
/*.terug .volgende {
  background-color: rgba(0,0,0,0.8);
}*/

/* Caption text */
/*zorgt ervoor dat de tekst onderin de foto staat*/
.text {
  /*color: #fjavascript:void(0);2f2f2;*/
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  transform: translate(0,-10px);
}

/* Number text (1/3 etc) */
/*zorgt er voor dat de nummers in de fotos staan*/
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/*--kleur van het rondje onderaan----*/
.actief, .dot:hover {
  background-color: #717171;
}*/

/* Fading animation */
.vervaag {
  -webkit-animation-name: vervaag;
  -webkit-animation-duration: 1.5s;
  animation-name: vervaag;
  animation-duration: 1.5s;
}*/

@-webkit-keyframes vervaag {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes vervaag {
  from {opacity: .4} 
  to {opacity: 1}
}*/

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .terug, .volgende,.text {font-size: 11px}
}

/*------image en zo ---------*/


		:target {
    		display: inline-block;
    		width: 100%;
    		height: auto;
		}

.verdwijtekst{
  display: none;
}

.Petrov{
  max-width: 70%;
  border-radius: 10px;
  border: 2px solid black;
  position: absolute;
  transform: translateX(-50%);
  left: 50%;
  margin-bottom: 35px;
  margin-top: 35px;
}

.naarlinks{
	
}

	.masthead {
	  height: 50vh;
	  min-height: 400px;
	  background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
	  background-size: cover;
	  background-position: center;
	  background-repeat: no-repeat;
	}

</style>
</head>
<body>

	<header class="masthead">
	  <div class="container h-100">
	    <div class="row h-100 align-items-center">
	      <div class="col-12 text-center">
	        <h1 class="font-weight-light">Foto's - leidt jezelf rond</h1>
	        <p>Klik op de pijltjes om de foto's te zien van de ruimte.</p>
	      </div>
	    </div>
	  </div>
	</header>

<br>
<div class="slideshow-container">
	<div class="naarlinks">

<div class="mySlides vervaag">
	<div class="numbertext"> 1/5</div>
	<map name="verdiepinkjeB">

		<area shape="circle" coords="159,386,20" href="#1">
		<area shape="circle" coords="102,425,20" href="#2">
		<area shape="circle" coords="152,182,20" href="#3">
		<area shape="circle" coords="160,270,20" href="#4">
		<area shape="circle" coords="97,272,20" href="#5">
		<area shape="circle" coords="94,185,20" href="#6">	
		<area shape="circle" coords="124,81,20" href="#7">
		<area shape="circle" coords="98,155,20" href="#8">
		<area shape="circle" coords="144,361,10" href="#9">
	</map>

<figure style="text-align: center;">
	
<img usemap="#verdiepinkjeB" src="fotos/plattegrondB.jpg" style="width: 255px; height: 540px;">

</figure>		

<div class="text"> Begaande grond</div>
</div>
<!---------------------------------->

<div class="mySlides vervaag">
	<div class="numbertext"> 2/5</div>
	<map name="verdiepinkje1">

		<area shape="circle" coords="76,355,20" href="#10">
		<area shape="circle" coords="164,359,20" href="#11">
		<area shape="circle" coords="113,313,20" href="#12">
		<area shape="circle" coords="93,239,10" href="#13">
		<area shape="circle" coords="77,135,20" href="#14">
		<area shape="circle" coords="79,204,10" href="#15">	
		<area shape="circle" coords="90,218,10" href="#16">
		<area shape="circle" coords="77,98,20" href="#17">
	</map>

<figure style="text-align: center;">
	
<img usemap="#verdiepinkje1" src="fotos/plattegrond1ste.jpg" style="width: 236px; height: 540px;">

</figure>		

<div class="text"> Eerste verdieping</div>
</div>
<!---------------------------------->

<!---------------------------------->

<div class="mySlides vervaag">
	<div class="numbertext"> 3/5</div>
	<map name="verdiepinkje2">

		<area shape="circle" coords="169,335,15" href="#18">
		<area shape="circle" coords="127,332,15" href="#19">
		<area shape="circle" coords="114,448,15" href="#20">
		<area shape="circle" coords="95,434,15" href="#21">
		<area shape="circle" coords="94,104,20" href="#22">
		<area shape="circle" coords="169,195,20" href="#23">	
		<area shape="circle" coords="95,196,20" href="#24">
		<area shape="circle" coords="103,303,10" href="#25">
		<area shape="circle" coords="103,280,10" href="#26">
		<area shape="circle" coords="97,240,10" href="#27">
		<area shape="circle" coords="166,303,10" href="#28">
	</map>

<figure style="text-align: center;">
	
<img usemap="#verdiepinkje2" src="fotos/plattegrond3_2.0.jpg" style="width: 245px; height: 540px;">

</figure>		

<div class="text"> Tweede verdieping</div>
</div>
<!---------------------------------->

<div class="mySlides vervaag">
	<div class="numbertext"> 4/5</div>
	<map name="verdiepinkje3">

		<area shape="circle" coords="124,372,15" href="#29">
		<area shape="circle" coords="172,373,15" href="#30">
		<area shape="circle" coords="123,436,15" href="#31">
		<area shape="circle" coords="90,94,20" href="#32">
		<area shape="circle" coords="155,97,20" href="#33">
		<area shape="circle" coords="106,249,20" href="#34">	
		<area shape="circle" coords="166,223,20" href="#35">
		<area shape="circle" coords="140,329,10" href="#36">
		<area shape="circle" coords="148,343,10" href="#37">
		<area shape="circle" coords="163,320,10" href="#38">
	</map>

<figure style="text-align: center;">
	
<img usemap="#verdiepinkje3" src="fotos/plattegrond3de.jpg" style="width: 248px; height: 540px;">

</figure>		

<div class="text"> Derde verdieping</div>
</div>
<!---------------------------------->



<div class="mySlides vervaag">
	<div class="numbertext"> 5/5</div>
	<map name="verdiepinkje4">

		<area shape="circle" coords="123,350,20" href="#39">
		<area shape="circle" coords="122,185,20" href="#40">
		<area shape="circle" coords="252,350,20" href="#41">
	</map>

<figure style="text-align: center;">
	
<img usemap="#verdiepinkje4" src="fotos/plattegrond4de.jpg" style="width: 374px; height: 540px;">

</figure>		

<div class="text"> Vierde verdieping</div>
</div>
<!---------------------------------->



<!-- knoppen voor rechts en links --->
<a class="terug" onclick="plusSlides(-1)">&#10094;</a>
<a class="volgende" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<!--- balletjes eronder --->
<div style="text-align: center;">
<!--style="text-align:center"-->
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <!--<span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>-->
</div>

</div>

<div>

<!----verdieping B-------->

<div>
	
<img id="1" class="Petrov" src="fotos/huistekoop/01.jpg" alt="een foto">

</div>

<div>
	
<img id="2" class="Petrov" src="fotos/huistekoop/02.jpg" alt="een foto">

</div>

<div>
	
<img id="3" class="Petrov" src="fotos/huistekoop/03.jpg" alt="een foto">

</div>

<div>
	
<img id="4" class="Petrov" src="fotos/huistekoop/04.jpg" alt="een foto">

</div>

<div>
	
<img id="5" class="Petrov" src="fotos/huistekoop/05.jpg" alt="een foto">

</div>

<div>
	
<img id="6" class="Petrov" src="fotos/huistekoop/06.jpg" alt="een foto">

</div>

<div>
	
<img id="7" class="Petrov" src="fotos/huistekoop/07.jpg" alt="een foto">

</div>

<div>
	
<img id="8" class="Petrov" src="fotos/huistekoop/08.jpg" alt="een foto">

</div>

<div>
	
<img id="9" class="Petrov" src="fotos/huistekoop/09.jpg" alt="een foto">

</div>

<!------------->

<div>
	
<img id="10" class="Petrov" src="fotos/huistekoop/10.jpg" alt="een foto">

</div>

<div>
	
<img id="11" class="Petrov" src="fotos/huistekoop/11.jpg" alt="een foto">

</div>

<div>
	
<img id="12" class="Petrov" src="fotos/huistekoop/12.jpg" alt="een foto">

</div>

<div>
	
<img id="13" class="Petrov" src="fotos/huistekoop/13.jpg" alt="een foto">

</div>

<div>
	
<img id="14" class="Petrov" src="fotos/huistekoop/14.jpg" alt="een foto">

</div>

<div>
	
<img id="15" class="Petrov" src="fotos/huistekoop/15.jpg" alt="een foto">

</div>

<div>
	
<img id="16" class="Petrov" src="fotos/huistekoop/16.jpg" alt="een foto">

</div>

<div>
	
<img id="17" class="Petrov" src="fotos/huistekoop/17.jpg" alt="een foto">

</div>

<!-------------------------------->
<div>
	
<img id="18" class="Petrov" src="fotos/huistekoop/18.jpg" alt="een foto">

</div>

<div>
	
<img id="19" class="Petrov" src="fotos/huistekoop/19.jpg" alt="een foto">

</div>

<div>
	
<img id="20" class="Petrov" src="fotos/huistekoop/20.jpg" alt="een foto">

</div>

<div>
	
<img id="21" class="Petrov" src="fotos/huistekoop/21.jpg" alt="een foto">

</div>

<div>
	
<img id="22" class="Petrov" src="fotos/huistekoop/22.jpg" alt="een foto">

</div>

<div>
	
<img id="23" class="Petrov" src="fotos/huistekoop/23.jpg" alt="een foto">

</div>

<div>
	
<img id="24" class="Petrov" src="fotos/huistekoop/24.jpg" alt="een foto">

</div>

<div>
	
<img id="25" class="Petrov" src="fotos/huistekoop/25.jpg" alt="een foto">

</div>

<div>
	
<img id="26" class="Petrov" src="fotos/huistekoop/26.jpg" alt="een foto">

</div>

<div>
	
<img id="27" class="Petrov" src="fotos/huistekoop/27.jpg" alt="een foto">

</div>

<div>
	
<img id="28" class="Petrov" src="fotos/huistekoop/28.jpg" alt="een foto">

</div>

<!-------------------------------->
<div>
	
<img id="29" class="Petrov" src="fotos/huistekoop/29.jpg" alt="een foto">

</div>

<div>
	
<img id="30" class="Petrov" src="fotos/huistekoop/30.jpg" alt="een foto">

</div>

<div>
	
<img id="31" class="Petrov" src="fotos/huistekoop/31.jpg" alt="een foto">

</div>

<div>
	
<img id="32" class="Petrov" src="fotos/huistekoop/32.jpg" alt="een foto">

</div>

<div>
	
<img id="33" class="Petrov" src="fotos/huistekoop/33.jpg" alt="een foto">

</div>

<div>
	
<img id="34" class="Petrov" src="fotos/huistekoop/34.jpg" alt="een foto">

</div>

<div>
	
<img id="35" class="Petrov" src="fotos/huistekoop/35.jpg" alt="een foto">

</div>

<div>
	
<img id="36" class="Petrov" src="fotos/huistekoop/36.jpg" alt="een foto">

</div>

<div>
	
<img id="37" class="Petrov" src="fotos/huistekoop/37.jpg" alt="een foto">

</div>

<div>
	
<img id="38" class="Petrov" src="fotos/huistekoop/38.jpg" alt="een foto">

</div>

<!-------------------------------->
<div>
	
<img id="39" class="Petrov" src="fotos/huistekoop/39.jpg" alt="een foto">

</div>

<div>
	
<img id="40" class="Petrov" src="fotos/huistekoop/40.jpg" alt="een foto">

</div>

<div>
	
<img id="41" class="Petrov" src="fotos/huistekoop/41.jpg" alt="een foto">

</div>


<!--JAVASCRIPT gwn niet in klote-->

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" actief", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " actief";
}
</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>

</main>


<?php

include("footer.php");

?>