<html>
<head>
<meta name="description" content="Jocuri video"/>
<meta name="keywords" content="HTML,JavaScript,PHP"/>
<link rel = "stylesheet" type = "text/css" href = "style2.css">
<title> Ms. Pac-Man </title>
</head>
<body>

<div class="oriz-menu">
<?php include("menu.php"); ?> 
</div>

<br/>

<div class="description-p2">
	<p>Ms. Pac-Man is the second game in the Pac-Man series, released in 1982 by Bally Midway.</p>
	<br/>
	<h1>Gameplay</h1>
	<p>The goal of the game is to have Ms. Pac-Man eat all of the on-screen dots and avoid the attacks of the four ghosts. The gameplay follows the same premise as Pac-Man, although there are some key differences:</p>
	<ul>
	<li>The game has four different colorful mazes that alternate. The orange maze appears in levels 1 and 2, the light blue maze appears in levels 3, 4, and 5, the brown maze appears in levels 6 through 9, and the dark blue maze appears in levels 10 through 13. Starting with level 14, the last two maze configurations alternate between each other every 4th level.</li>
	<li>The Fruits are now cherries, strawberries, oranges, pretzels, apples, pears, and bananas, respectively. After the banana appears, the fruit prizes are chosen at random.</li>
	<li>The fruit bounces around the screen instead of remaining stationary below the ghost pen, starting from one of the tunnel entrances and leaving through another if not eaten.</li>		<li>The intermissions have been changed to "Acts". The first one shows how Pac-Man and Ms. Pac-Man first meet, the second shows the two chasing each other around the screen, and the third shows Pac-Man and Ms. Pac-Man awaiting the arrival of Junior.</li>
	<li>The orange ghost (originally named "Clyde") is now named "Sue".</li>
	<li>The ghosts do not move in "scatter" and "chase" cycles as they did in the original game; Blinky and Pinky will move randomly and Inky and Sue will head for their "scatter" corners only during first behavior mode of a round. From there, while they will change direction occasionally, they will remain in constant attack.</li>
	<li>There are no longer any paths that the ghosts cannot travel through.</li>
	<li>Tunnels do not slow the ghosts down after Round 3.</li>
	</ul>
	<br/>
	<h2>Scoring system</h2>
	<table border="2px" cellpadding = "5px">
	<tr>
		<th>Character</th>
		<th>Special</th>
		<th>Points</th>
	</tr>
	<tr>
		<td>Pac-Dot</td>
		<td></td>
		<td>10</td>
	</tr>
	<tr>
		<td>Power Pellet</td>
		<td></td>
		<td>50</td>
	</tr>
	<tr>
		<td rowspan="4">Vulnerable Ghosts</td>
		<td>#1 in succession</td>
		<td>200</td>
	</tr>
	<tr>
		<td>#2 in succession</td>
		<td>400</td>
	</tr>
	<tr>
		<td>#3 in succession</td>
		<td>800</td>
	</tr>
	<tr>
		<td>#4 in succession</td>
		<td>1600</td>
	</tr>
	<tr>
		<td rowspan="7">Fruit</td>
		<td>Cherry</td>
		<td>100</td>
	</tr>
	<tr>
		<td>Strawberry</td>
		<td>200</td>
	</tr>
	<tr>
		<td>Orange</td>
		<td>500</td>
	</tr>
	<tr>
		<td>Pretzel</td>
		<td>700</td>
	</tr>
	<tr>
		<td>Apple</td>
		<td>1000</td>
	</tr>
	<tr>
		<td>Pear</td>
		<td>2000</td>
	</tr>
	<tr>
		<td>Banana</td>
		<td>5000</td>
	</tr>
	</table>
	<br/>
	<div class="yvideo">
		<h3>Playthrough</h3>
		<p>Here is a video of a playthrough:</p>
		<iframe src="https://www.youtube.com/embed/c4n_6NFYvLY">
		</iframe>
	</div>
	<br/>
	<h4>Gallery</h4>
	<br/>
	<div class="slideshow-container">

		<div class="mySlides">
			<div class="numbertext">1 / 3</div>
			<img src="ms-pacman-gameplay.jpg" style="width:100%">
    
		</div>

		<div class="mySlides">
			<div class="numbertext">2 / 3</div>
			<img src="ms-pacman-gameplay2.jpg" style="width:100%">
		</div>

		<div class="mySlides">
			<div class="numbertext">3 / 3</div>
			<img src="ms-pacman-gameplay3.jpg" style="width:100%">
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