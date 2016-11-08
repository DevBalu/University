<?php
	$cGB = $_POST["cGB"];
	$cMD = $_POST["cMD"];
	$cCC = $_POST["cCC"];

	$cGBr = "London";
	$cMDr = "Chisinau";
	$cCCr = "Managvat";

	$count = 0;


// Great Britan
	if($cGB === $cGBr){
		$count+= 1;
	}

// Moldaova
	if($cMD === $cMDr){
		$count+= 1;
	}

// Cucuruzeshti
	if($cCC === $cCCr){
		$count+= 1;
	}


	$rezultat = $count * 100 / 3;
	$nota = floor(10 * $rezultat / 100);

	echo("aveti balluri : $count <br>");
	echo("ati rezolvat $rezultat % din test <br>");
	echo("ati acumulat nota $nota <br>");



?>	