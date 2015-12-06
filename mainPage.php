<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="./mainPage.css"/>
	<title>Famous Missions</title>
</head>
<body>
	<div class="mainPageHeader">
		<h1>Famous Missions to Space</h1>
		<h4><?php require("getQuote.php"); echo $quote; ?></h4>
		<ul class="nav nav-tabs">
			<li class="active"><a href="mainPage.php">Home</a></li>
		    <li><a href="imageGallery.php">Image Gallery</a></li>
		    <li><a href="sources.php">Sources</a></li>
		</ul>		
	</div>

	<div id="wrapper">
	<div class="mainLinks">
		<div class="covers">
		<a href = "missionPageTemplate.php?mission=Apollo11" class="imageLinks" id="Apollo11">
			<p>Apollo 11</p>
			<img src="./imageFolder/Apollo11MainImage.jpg">
		</a>
		</div>
		<div class="covers">
		<a href = "missionPageTemplate.php?mission=Curiosity" class="imageLinks" id="Curiosity">
			<p>Curiosity Rover</p>
			<img src="./imageFolder/CuriosityMainImage.jpg">
		</a>
		</div>
		<div class="covers">
		<a href = "missionPageTemplate.php?mission=Sputnik" class="imageLinks" id="Sputnik">
			<p>Sputnik</p>
			<img src="./imageFolder/SputnikMainImage.jpg">
		</a>
		</div>
	</div>
	</div>
</body>
</html>