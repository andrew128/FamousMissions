<?php 
	//DOC: this file gets random quotes from a table in the server
	require("config.php");
	$db = new PDO("mysql:socket=" . $GLOBALS["socket"] . ";dbname=" . $GLOBALS["database"] . ";host=" . $GLOBALS["hostname"] . ";port=" . $GLOBALS["port"], $GLOBALS["username"], $GLOBALS["password"]);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try{	
		//DOC: gets random number and selects id corresponding to that number in db
		$randNum = rand(1,5);
		$query = "SELECT quote FROM SpaceQuotes WHERE id=$randNum;";

		$statement = $db->prepare($query);
		$statement->execute(array('mission'=>$mission, 'topic'=>$topic));

		$result = $statement->fetchAll();
		$quote = $result[0][0];
	} catch(PDOException $ex){
		print ("Sorry, a database error occurred.");
		print ("Error details: $ex->getMessage()");	
	}	
?>