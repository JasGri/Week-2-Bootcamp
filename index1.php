<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Orbitron|Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">

<title>Jaspers blog</title>

</head>

<body>

<div class="navi">
	<button class="LoginBtn">Login</button>
	<div class="SearchMenu" align= right><input type="text" placeholder="zoek.." name="search">
		<button class="SearchBtn"><i class="fa fa-search"></i></button>
	</div>
	<div class="NameBlog"><h1>Jaspers'</h1><h2>blog</h2></div>
</div>

<div class="Left">
	<div class="LeftContent">
		<h2>Over Mij:</h2>
		<p>Mijn naam is Jasper Grit en ik ben 33 jaar.
		<br>
		Ik woon in Hoogeveen.
		<br>
		<br>
		Begin mei 2018 ben ik begonnen aan
		<br>
		een vier maandelijkse studie
		<br>
		bij CodeGorilla	als programmeur(PHP)</p>
	</div>
	<div class="LeftContent">
		<h2>contact:</h2>
		<p>U kunt mij bereiken via:</p>
		<i class="fa fa-envelope"></i>
		<i class="fa fa-facebook"></i>
		<i class="fa fa-linkedin"></i>
	</div>
	<div class="LeftContent">
		<h2>Categorieën:</h2>
	</div>
	<div class="LeftContent">
		<h2>Recente posts:</h2>
	</div>
	<div class="LeftContent">
		<h2>Archief:</h2>
	</div>
	<div class="LeftContent">
		<h2>Links:</h2>
	</div>
</div>

<form class="Article" action="mijnscript.php" method="post">
		<h2>Nieuwe post</h2>
		<ul>
				<li>Titel artikel: <input name="blogtitel"></li>
				<li>Auteur: <input name="naam"></li>
				<li>Uw tekst: <textarea name="posttxt"></textarea></li>
				<li><input type="submit" onclick="submit" class="submitBtn"></li>
		</ul>
</form>

<!-- <div class="PostArticle"> -->
<?php

$datum = file_get_contents('data/datum.txt', true);
$blogtitel = file_get_contents('data/blogtitel.txt', true);
$naam = file_get_contents('data/naam.txt', true);
$posttxt = file_get_contents('data/posttxt.txt', true);

echo "<h1>".$blogtitel. "</h1>". "<br>". $naam. "<br>". $datum. "<br>". "<br>". $posttxt. "<br>";

?>






</body>

</html>
