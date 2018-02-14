<?php

	$weatherSource = file_get_contents('https://www.weather-forecast.com/locations/San-Francisco/forecasts/latest');

	preg_match(
		'/<span class="phrase">(.*?)<\/span>/s',
		$weatherSource,
		$matches
	);

	echo $matches[1];

?>