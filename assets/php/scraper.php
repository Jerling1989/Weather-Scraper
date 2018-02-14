<?php

	$city = $_GET['city'];

	$city = str_replace(' ', '', $city);
	
	$weatherSource = file_get_contents('https://www.weather-forecast.com/locations/'.$city.'/forecasts/latest');

	preg_match(
		'/<span class="phrase">(.*?)<\/span>/s',
		$weatherSource,
		$matches
	);

	echo $matches[1];

?>