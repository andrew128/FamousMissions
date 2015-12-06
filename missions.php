<?php
	//DOC: this page contains variables used to refactor the mission pages
	$missionSelected = "Sputnik";

	$Apollo11Title = "Apollo 11 Mission";
	$CuriosityTitle = "Curiosity Mission";
	$SputnikTitle = "Sputnik Mission";

	$Apollo11Purpose = "
	The primary objective of Apollo 11 was to complete a national goal set by President John F. Kennedy on May 25, 1961: perform a crewed lunar landing and return to Earth.
	Additional flight objectives included scientific exploration by the lunar module, or LM, crew; deployment of a television camera to transmit signals to Earth; and deployment of a solar wind composition experiment, seismic experiment package and a Laser Ranging Retroreflector. During the exploration, the two astronauts were to gather samples of lunar-surface materials for return to Earth. They also were to extensively photograph the lunar terrain, the deployed scientific equipment, the LM spacecraft, and each other, both with still and motion picture cameras. This was to be the last Apollo mission to fly a \"free-return\" trajectory, which would enable a return to Earth with no engine firing, providing a ready abort of the mission at any time prior to lunar orbit insertion.
	";
	$CuriosityPurpose = "
	With its rover named Curiosity, Mars Science Laboratory mission is part of NASA's Mars Exploration Program, a long-term effort of robotic exploration of the red planet. Curiosity was designed to assess whether Mars ever had an environment able to support small life forms called microbes. In other words, its mission is to determine the planet's \"habitability.\"
	";
	$SputnikPurpose = "
	On Oct. 4, 1957, Sputnik 1 successfully launched and entered Earth's orbit. Thus, began the space age. The successful launch shocked the world, giving the former Soviet Union the distinction of putting the first human-made object into space. The word 'Sputnik' originally meant 'fellow traveler,' but has become synonymous with 'satellite' in modern Russian.
	This historic image shows a technician putting the finishing touches on Sputnik 1, humanity's first artificial satellite. The pressurized sphere made of aluminum alloy had five primary scientific objectives: Test the method of placing an artificial satellite into Earth orbit; provide information on the density of the atmosphere by calculating its lifetime in orbit; test radio and optical methods of orbital tracking; determine the effects of radio wave propagation though the atmosphere; and, check principles of pressurization used on the satellites.
	";

	$Apollo11Events = [
		"Terminal countdown started"=>'1969-07-14T21:00:00', 
		"Liftoff"=>'1969-07-16T13:32:00', 
		"Orbital navigation started"=>'1969-07-16T13:45:21', 
		"LMP on lunar surface"=>'1969-07-21T03:15:16',
		"United States flag deployed"=>'1969-07-21T03:41:43',
		"LM lunar liftoff ignition"=>'1969-07-21T17:54:00',
		"Entry into atmosphere"=>'1969-07-24T16:35:05',
		"Splashdown"=>'1969-07-24T16:50:35'
	];
	$Apollo11Options = [
		"min"=>'1969-07-13',
		"max"=>'1969-08-28'
	];
	$Apollo11Caption = "
		LMP: Lunar Module Pilot(Edwin E. Aldrin Jr.) 
		CDR: Commander(Neil A. Armstrong)
		CMP: Command Module Pilot(Michael Collins)
		LM: Lunar Module
	";

	$CuriosityEvents = [
		"Launch"=>'2011-11-26T07:02:00',
		"Landing"=>'2012-08-05T10:32:00',
		"First Drive of Rover"=>'2012-08-22T00:00:00',
		"Behind the Sun"=>'2013-08-04T00:00:00',
		"Reached Hidden Valley"=>'2014-07-29T00:00:00'
	];
	$CuriosityOptions = [];
	$CuriosityCaption = "This timeline includes major events in Curiosity's mission";

	//DOC: no information found on sputnik
	$SputnikEvents = [];
	$Curiosity = [];
	$SputnikCaption = "";
?>