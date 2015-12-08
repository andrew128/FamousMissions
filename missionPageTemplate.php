<!DOCTYPE html>
<?php 
	require('missions.php');

	//DOC: using php url variables to set the current mission
	$url = $_SERVER[REQUEST_URI]; 
	$parts = parse_url($url);
	parse_str($parts['query'], $query);
	$missionSelected = $query['mission'];

	//DOC: getting mission-specific variables stored in missions.php
	$currentTitle = ${$missionSelected . "Title"};
	$currentPurpose = ${$missionSelected . "Purpose"};
	$currentTimelineEvents = ${$missionSelected . "Events"};
	$currentTimelineOptions = ${$missionSelected . "Options"};
	$currentTimelineCaption = ${$missionSelected . "Caption"};
?>
<html>
<head>
	<script src="./visjs/vis.js"></script>
  	<link href="./visjs/vis.css" rel="stylesheet" type="text/css" />
  	<link href="./mainStyleSheet.css" rel="stylesheet" type="text/css" />
	<title> <?php echo $currentTitle; ?> </title>
</head>
<body>
	<div id="missionPageHeader">
		<h1><?php echo $currentTitle; ?></h1>
		<h4><?php require("getQuote.php"); echo $quote; ?></h4>
	</div>

	<a href="mainPage.php">Back to main page</a>

	<p><?php echo $currentPurpose ?></p>

	<hr/>

	<?php 
		//DOC: nothing to show for timeline regarding Sputnik mission
		if($missionSelected=="Sputnik"){
			echo "";
		} else {
			echo '<p>';
			echo "Figure: " . $currentTimelineCaption; 
			echo '
			<p>-Scroll to control zoom on timeline</p>
			<p>-Drag left/right to observe different times</p>
			<p>-Red marker indicates current time</p>
			';
			echo '</p>';
		}	
	?>

	<div id="timeline"></div>

	<script type="text/javascript">
		var currentMission = '<?php echo $missionSelected; ?>';
		if(currentMission=="Sputnik"){
			document.write("<p>No information found regarding Sputnik's mission timeline. </p>");
		} else{
			//DOC: parse events for timeline from php array into javascript array
			var currentTimelineEventsFromPHP = '<?php echo json_encode($currentTimelineEvents); ?>';
			currentTimelineEventsFromPHP = currentTimelineEventsFromPHP.split(",");
			var currentTimelineEvents = [];
			for(var i=0; i<currentTimelineEventsFromPHP.length; i++){
				//console.log(currentTimelineEventsFromPHP[i]);
				var event = currentTimelineEventsFromPHP[i];
				event = event.split("\":\"");
				currentTimelineEvents.push(event);
			}

			var container = document.getElementById('timeline');

			var items = new vis.DataSet([]);

			//DOC: update items in timeline with items from javascript array
			for(var i=0; i<currentTimelineEvents.length; i++){
				var event = currentTimelineEvents[i][0].substring(1)
				console.log(event);
				var startTime = currentTimelineEvents[i][1].substring(0,(currentTimelineEvents[i][1].length)-1);
				console.log(startTime);

				//DOC: 2 if statements to remove extra quotations from first and last tokens
				if(i==currentTimelineEvents.length-1){
					console.log("HELLO");
					startTime = startTime.substring(0,startTime.length-1);	
					console.log(startTime);
				}
				if(i==0){
					event = event.substring(1);
				}

				items.add({content: event, start: startTime});
			}

			var options = {
			 	height: '300px',
			 	zoomMin: 1000 * 60 * 60, //DOC: zoom into minutes
			 	zoomMax: 1000 * 60 * 60 * 24 * 31 * 12 * 2, //DOC: zoom max is 2 years
			};

			var currentTimeline = new vis.Timeline(container, items, options);
		}	
	</script>

	<br/>

</body>
</html>
