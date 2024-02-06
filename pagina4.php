<html>
<head>
<meta name="description" content="Jocuri video"/>
<meta name="keywords" content="HTML,JavaScript,PHP"/>
<link rel = "stylesheet" type = "text/css" href = "style4.css">
<title> Forum </title>
</head>

<body>

<div class="oriz-menu">
<?php include("menu.php"); ?> 
</div>

<div class="description-p4">

	<br/>
	<p style="background-color: #0F52BA; display: inline-block;">There are a lot of other retro games that could be added to our website. What other games are you thinking about?</p>
	<br/>
	<p style="background-color: #0F52BA; display: inline-block;">Please complete the form below to help us!</p>
	<br/>
	<br/>


	<div class="forum">
		<h1>Forum</h1>
		<form action="pagina4.php" method="post">
			<label for="gname">Game name:</label>
			<input type="text" id="gname" name="gname"><br>
			<br/>
			<p>Post text:</p>
			<textarea name="post_text" rows=8 cols=40 wrap=virtual></textarea>
			<br/>
			<input type="submit" value="Submit">
		</form>	
	</div>
		<?php
			if(isset($_POST["gname"]))
				{
				// realizare conexiune MySQL
				$con = mysqli_connect("localhost","root","");
				if (!$con){
					die('Connection error! ' .mysqli_error());
				}

				// selectare baza de date
				 mysqli_select_db($con, "niki_bd"); 
				 $sql="INSERT INTO `forum` (Game_Name,Text) VALUES ('$_POST[gname]','$_POST[post_text]')";
				 if (!mysqli_query($con, $sql)){
					die('Eroare: ' . mysqli_error()); 
				 }
				 echo "Submited! <br />";
				 echo "<br />";
				 // selectare inregistrari din tabela
				 $rez = mysqli_query($con, "SELECT * FROM `forum`"); 
				 // afisare rezultate
				 echo "Here are the posts from our other retro game lovers: ";
				 echo "<table border=\"2\">";
				 echo "<tr> <th> Game Name </th> <th> Post </th> </tr>";
				 while($inreg = mysqli_fetch_array($rez)){
					echo "<tr> <td>";
					echo $inreg['Game_Name'] . "</td> <td>" . $inreg['Text'] . "</td> </tr>"; 
				 }
				 echo "</table>";
				 // inchidere conexiune
				mysqli_close($con);
				}
		?>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
// Get the button
let mybutton = document.getElementById("myBtn");
mybutton.style.display = "block";

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>