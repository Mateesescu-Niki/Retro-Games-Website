<html>
<head>
<meta name="description" content="Jocuri video"/>
<meta name="keywords" content="HTML,JavaScript,PHP"/>
<link rel = "stylesheet" type = "text/css" href = "style1.css">
<title> Sonic The Hedgehog 2 </title>
</head>
<body>

<div class="oriz-menu">
<?php include("menu.php"); ?> 
</div>
<br/>
<div class="description-p1">
	<p>Sonic the Hedgehog 2 is a 1992 platform game developed by Sega Technical Institute for the Sega Genesis. It follows Sonic as he attempts to stop Doctor Robotnik from stealing the Chaos Emeralds to power his space station.</p>
	<br/>
	
	<h1>Story</h1>
	<p>Taking place directly after the first, after Sonic defeated Dr. Robotnik, he uses his Tornado plane and travels to West Island. He arrives and discovers a orange fox named Miles Tails Prower, a two-tailed fox who got harassed by other fellow foxes. Dr. Robotnik then finds out about the island and the Chaos Emeralds that inhabit it, so he crashes onto the island, snatch the Chaos Emeralds and stuff the animals into badniks. So it's up to Sonic and the new sidekick Tails to destroy Dr. Robotnik, collect the Chaos Emeralds and free the animals.</p>
	<br/>
	<p>They introduce more elements into the series, a new sidekick for Sonic and a more rich environment filled with more areas for them to explore in. Once again when you start the game, you begin within the first level, all of this is explained in the game manual.</p>
	<br/>
	<h2>Gameplay</h2>
	<p>Sonic the Hedgehog 2 is a side-scroller 2D platformer video game, which plays identical as the first Sonic the Hedgehog game. The player can play as either Sonic or Tails or both. They can also play as Sonic while Tails is controlled by a second player or an AI. Both characters share the same abilities. The game has eleven Zones, most of which are divided into two Acts.</p>
	<br/>
	<p>The main objective of Sonic the Hedgehog 2 is to finish its Acts in less than ten minutes. In these Acts, the player can find many Rings, which serve as their playable character's main method of protection. If a character is hit while having at least one Ring, they will survive with the cost of losing all their Rings. However, if the playable character is hit without having Rings, they will lose a Life, or get a Game Over if they do not have any Lives left.</p>
	<br/>
	<p>From the options menu, players can select to either play as Sonic alone, Tails alone or Sonic and Tails. By default, players control Sonic while Tails tags along unhindered. However, a second player may control Tails separately. Should Tails move off-screen, fall off a platform, or die after getting hit from above, he will eventually return. There is minimal difference when playing as Tails instead of Sonic. Tails cannot fly when played as in this game, though he is several pixels smaller than Sonic, meaning he may not have to duck in some instances.</p>
	<br/>
	<p>Obtaining all seven Chaos Emeralds by clearing all of the Special Stages will unlock a new feature: Sonic's ability to change into Super Sonic. When Sonic has collected at least fifty Rings and jumps into the air, he will transform into Super Sonic. In this state, Sonic is virtually invincible, although he can still die by drowning, getting crushed, falling into a bottomless pits, or running out of time. His speed, acceleration and jump height are all increased as well. However, his Super Dash Attack is decreased in effectiveness as the initial velocity is decreased rapidly. Super Sonic consumes one Ring per second, and when he has no Rings left or he reaches the end of an Act, he reverts back to his normal state.</p>
	<br/>
	<h3>Controls</h3>
	<table border="2px" cellpadding = "5px">
	<tr>
		<th>Button formation</th>
		<th>Movement</th>
	</tr>
	<tr>
		<td>left/right</td>
		<td>Run</td>
	</tr>
	<tr>
		<td> up</td>
		<td>Look up</td>
	</tr>
	<tr>
		<td>down</td>
		<td>Look down/Crouch</td>
	</tr>
		<tr>
		<td>A/B/C</td>
		<td>Spin jump</td>
	</tr>
	<tr>
		<td> left/right + down</td>
		<td>Super Spin Attack</td>
	</tr>
	<tr>
		<td> down + A/B/C</td>
		<td>Super Dash Attack</td>
	</tr>
	<tr>
		<td>START</td>
		<td>Pause</td>
	</tr>
	</table>
	<br/>
	<h4>Playable characters</h4>
	<p>The only two characters that you can play as are: </p>
	<br/>
	<div class="myDIV">Miles "Tails" Prower</div>
	<div class="hide"><img src="Miles.png" alt="Miles" style="width: 15%; height: 20%;"></div>
	<br/>
	<div class="myDIV">Sonic the Hedgehog</div>
	<div class="hide"><img src="Sonic.png" alt="Sonic" style="width: 20%; height: 20%;"></div>
	<br/>
	<div class="yvideo">
		<h5>Playthrough</h5>
		<p>Here is a video of a complete playthrough:</p>
		<iframe src="https://www.youtube.com/embed/QmJRA94nbPM">
		</iframe>
	</div>
	<br/>
	<h6>Gallery</h6>
	<br/>
	<div class="slideshow-container">

		<div class="mySlides">
			<div class="numbertext">1 / 3</div>
			<img src="sonic-gameplay.png" style="width:100%">
    
		</div>

		<div class="mySlides">
			<div class="numbertext">2 / 3</div>
			<img src="sonic-gameplay2.jpg" style="width:100%">
		</div>

		<div class="mySlides">
			<div class="numbertext">3 / 3</div>
			<img src="sonic-gameplay3.png" style="width:100%">
		</div>

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
	let slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	showSlides(slideIndex = n);
	}

	function showSlides(n) {
	let i;
	let slides = document.getElementsByClassName("mySlides");
	let dots = document.getElementsByClassName("dot");
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
</div>

</body>
</html>