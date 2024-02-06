<html>
<head>
<meta name="description" content="Jocuri video"/>
<meta name="keywords" content="HTML,JavaScript,PHP"/>
<link rel = "stylesheet" type = "text/css" href = "style.css">
<title> Retro video games </title>
</head>
<body bgcolor="black">

<div class="oriz-menu">
<?php include("menu.php"); ?> 
</div>
<br/>
<div class="principal-description">
	<p>It's okay to admit it: you're a sucker for retro video games. It's okay because there's a reason why so many people are into them. As with everything vintage, the sense of nostalgia for our childhood and the "good old times" is still able to grip our curiosity like nothing else.</p>
	<br/>
	<p>Retro gaming has witnessed rising interest in the gamers' community in recent years, with more and more people being drawn to classic consoles and games from the 20th century.</p>
	<br/>
	<p>That's why we want to present you a three retro video games that might remind you of the old days.</p>
</div>
<br/>
<br/>

<div class="slideshow-container">

  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
	<img src="sonic2.png" style="width:100%">
    <div class="text">Sonic The Hedgehog 2</div>
    
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
	<img src="ms_pac.jpg" style="width:100%">
    <div class="text">Ms. Pac-Man</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
    <img src="doom.jpg" style="width:100%">
    <div class="text">Doom</div>
  </div>
  <!--for the arrows-->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
// Set slide # to 1
let slideIndex = 1;
// Show the current slide
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
// Increase the slide index by 1 and show that slide
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
// Show the current slide
  showSlides(slideIndex = n);
}

// Toggle correct slides
function showSlides(n) {
  let i;
  // All of the slides in the document
  let slides = document.getElementsByClassName("mySlides");
  // All of the slide dots in the document
  let dots = document.getElementsByClassName("dot");
  // If slide # is greater than the total number of slides
  if (n > slides.length) {slideIndex = 1}  
  // If slide # is less than total number of slides
  if (n < 1) {slideIndex = slides.length}
  // Hide each of the slides
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  // Replace each of the dots with the class "active" with ""
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  // Set the current slide to display as a block element
  slides[slideIndex-1].style.display = "block";
  // Set the current slide's respective dot to the "active" class  
  dots[slideIndex-1].className += " active";
}

// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


<div class="principal-link">
	<p><i> If you'd like to play one of these games online, you can click the button below.</p>
	<a href="https://www.retrogames.cz/?language=EN">Retro Games</a>
</div>

</body>
</html>