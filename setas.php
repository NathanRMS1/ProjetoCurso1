<style type="text/css">
#apDiv2 {
	position:absolute;
	left:41px;
	top:308px;
	width:35%;
	height:50%;
	z-index:2;
	background-color:#300000;
	margin-left: 5%;
}

#apDiv4 {
	position:absolute;
	top:174px;
	width:100%;
	height:1%;
	z-index:3;
	background-color: #000;
	margin-top: 0%;
}
#apDiv6 {
	position:absolute;
	top:0px;
	width:100%;
	height:116px;
	z-index:1;
	background-color:#300000;
	margin-left: 0px;
}


.conteudo {
	width: 90%;
	margin-left: 10%;
}
#apDiv3 {
	position:absolute;
	left:220px;
	top:1110px;
	width:112px;
	height:51px;
	z-index:7;
}
#apDiv7 {
	position:absolute;
	left:520px;
	top:1110px;
	width:112px;
	height:51px;
	z-index:7;
}
#apDiv8 {
	position:absolute;
	left:820px;
	top:1110px;
	width:112px;
	height:51px;
	z-index:7;
}
#apDiv9 {
	position:absolute;
	left:1130px;
	top:1110px;
	width:112px;
	height:51px;
	z-index:7;
}
.menu1 {
	background-color: #033;
	height: 10%;
	width: 100%;
	margin-top: 50%;
}

* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
	width:95%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
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
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
#apDiv10 {
	position:absolute;
	top:1220px;
	width:100%;
	height:100px;
	z-index:8;
	background-color:#330000;
}
.conteud{
	float:right;
	margin-left:5.5%;
	background-color:#000;
}
</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>

  
				<article class="conteud">
                    <img src="img/facebook.png" alt="Destaques Do site" title="Destaques Do Site" style="width:50%">
                    <p class="InfoProduto">Produto em destaque</p>
                    <button type="button" class="btn btn-info"><a href="#" class="linkProdutos">Detalhes</a></button>
                    <button type="button" class="btn btn-warning"><a href="#" class="AddCarrinho">Comprar</a></button>
                    <span class="precoProduto">R$99,99</span>
                </article>
				<article class="conteud">
                    <img src="img/facebook.png" alt="Destaques Do site" title="Destaques Do Site" style="width:50%">
                    <p class="InfoProduto">Produto em destaque</p>
                    <button type="button" class="btn btn-info"><a href="#" class="linkProdutos">Detalhes</a></button>
                    <button type="button" class="btn btn-warning"><a href="#" class="AddCarrinho">Comprar</a></button>
                    <span class="precoProduto">R$99,99</span>
                </article>
				<article class="conteud">
                    <img src="img/facebook.png" alt="Destaques Do site" title="Destaques Do Site" style="width:50%">
                    <p class="InfoProduto">Produto em destaque</p>
                    <button type="button" class="btn btn-info"><a href="#" class="linkProdutos">Detalhes</a></button>
                    <button type="button" class="btn btn-warning"><a href="#" class="AddCarrinho">Comprar</a></button>
                    <span class="precoProduto">R$99,99</span>
                </article>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/facebook.png" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/banner3.png" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

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
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>