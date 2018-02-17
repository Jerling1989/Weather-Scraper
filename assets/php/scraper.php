<?php
	// GET VALUE FROM FROM FORM INPUT FIELD
	$city = $_GET['city'];

	// REMOVE EMPTY SPACES FROM VALUE
	$city = str_replace(' ', '', $city);
	
	// GETTING HTML CONTENTS FROM WEATHER SEARCH WEBSITE AFTER ADDING USER CITY VALUE
	$weatherSource = file_get_contents('https://www.weather-forecast.com/locations/'.$city.'/forecasts/latest');

	// USING REGEX TO GATHER SPECIFIC DATA FROM WEATHER SEARCH WEBSITE (SCRAPING)
	// ADDING FOUND DATA TO $MATCHES ARRAY 
	preg_match(
		'/<span class="phrase">(.*?)<\/span>/s',
		$weatherSource,
		$matches
	);

	// DISPLAYING DESIRED RESULT FROM SCRAPE LOCATED INSIDE $MATCHES ARRAY
	echo $matches[1];

?>