<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="mainStyleSheet.css"/>
	<title>Sources</title>
</head>
<body>
	<div class="sourcesHead">
		<h1>Sources</h1>
		<h4><?php require("getQuote.php"); echo $quote; ?></h4>
		<ul class="nav nav-tabs">
			<li><a href="mainPage.php">Home</a></li>
		    <li><a href="imageGallery.php">Image Gallery</a></li>
		    <li class="active"><a href="sources.php">Sources</a></li>
		</ul>		
	</div>

	<ul>
		<br/>
		<li><p>Javascript library for timeline: http://visjs.org/</p></li>
		<br/>
		<li><p>Quotations: http://www.spacequotations.com/magicspacequotes.html, http://www.brainyquote.com/</p></li>
		<br/>
		<li><p>Apollo 11 Timeline: http://history.nasa.gov/SP-4029/Apollo_11i_Timeline.htm</p></li>
		<li><p>Apollo 11 Pictures: http://history.nasa.gov/ap11ann/kippsphotos/apollo.html</p></li>
		<li><p>Apollo 11 Purpose: https://www.nasa.gov/mission_pages/apollo/missions/apollo11.html</p></li>
		<br/>
		<li><p>Curiosity Timeline: http://mars.nasa.gov/msl/mission/timeline/, http://www.nytimes.com/interactive/science/space/mars-curiosity-rover-tracker.html?_r=0</p></li>
		<li><p>Curiosity Pictures: http://mars.nasa.gov/msl/multimedia/images/</p></li>
		<li><p>Curiosity Purpose: http://mars.nasa.gov/msl/mission/overview/</p></li>
		<br/>
		<li><p>Sputnik Pictures: https://en.wikipedia.org/wiki/Sputnik_1</p></li>
		<li><p>Sputnik Purpose: http://www.nasa.gov/multimedia/imagegallery/image_feature_924.html</p></li>
	</ul>
</body>
</html>