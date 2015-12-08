<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="./mainStyleSheet.css"/>
	<title>Image Gallery</title>
</head>
<body>
	<div class="imageGalleryHead">
		<h1>Mission Image Gallery</h1>
		<h4><?php require("getQuote.php"); echo $quote; ?></h4>
		<ul class="nav nav-tabs">
			<li><a href="mainPage.php">Home</a></li>
		    <li class="active"><a href="imageGallery.php">Image Gallery</a></li>
		    <li><a href="sources.php">Sources</a></li>
		</ul>		
	</div>

	<form method="POST">
		<div class="form">
			<table>
				<tr>
				<td><p>Select a mission:</p></td>
				<td><input type = "radio" name="mission" value="Apollo11">  <p>Apollo11</p></td>
				<td><input type = "radio" name="mission" value="Curiosity">  <p>Curiosity</p></td>
				</tr>
				<tr>
				<td><p>Select a topic:</p></td>
				<td><input type = "radio" name="topic" value="Planet">  <p>Planet</p></td>
				<td><input type = "radio" name="topic" value="SpaceCraft">  <p>SpaceCraft</p></td>
				</tr>
			</table>
			<br/>
			<input type = "submit">
		</div>
	</form>

	<hr/>

	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$mission = $_POST["mission"];
			$topic = $_POST["topic"];

			//DOC: check to see if both options are selected, then fetch results
			if($mission == "" || $topic == ""){
				print "<p>Please give responses to both checkboxes</p>";
			} else {
				require("config.php");
				$db = new PDO("mysql:socket=" . $GLOBALS["socket"] . ";dbname=" . $GLOBALS["database"] . ";host=" . $GLOBALS["hostname"] . ";port=" . $GLOBALS["port"], $GLOBALS["username"], $GLOBALS["password"]);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				try{	
					$query = "SELECT * FROM MissionImages WHERE mission='$mission' and topic='$topic';";

					$statement = $db->prepare($query);
					$statement->execute(array('mission'=>$mission, 'topic'=>$topic));

					$results = $statement->fetchAll();
				} catch(PDOException $ex){
					print ("Sorry, a database error occurred.");
					print ("Error details: $ex->getMessage()");	
				}

				echo '<table>';

				//DOC: for each image in results, display image, caption, popularity
				for($i=0; $i<count($results); $i++){
					//DOC: increment popularity and then update in sql db
					$popularity = $results[$i][3];
					$popularity += 1;
					try{
						$query = "UPDATE MissionImages SET popularity=$popularity WHERE imageName='" . $results[$i][0] . "'";
						$statement = $db->prepare($query);
						$statement->execute();
					} catch(PDOException $ex){
						print ("Sorry, a database error occurred.");
						print ("Error details: $ex->getMessage()");	
					}
					if($i%3==0){
						echo '<tr>';
					} 
					echo '<td>';
					$imageName = "./imageFolder/" . $results[$i][0];
					echo "<img src=\"{$imageName}\">";
					echo "<br/>";
					echo "<p>";
					echo "  Source:  " . $results[$i][4];
					echo "<br/>";
					echo "  Number of searches:  " . $popularity;
					echo "</p>";
					echo "<br/><br/>";
					echo '</td>';
					if($i%3==2){
						echo '</tr>';
					}
				}
				echo '</table>';
			}
		}
	?>

</body>
</html>