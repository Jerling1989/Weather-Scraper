// CLICK EVENT FOR FORM SUBMIT BUTTON
$('#find-weather').click(function(event) {
	// PREVENT FORM SUBMIT/PAGE RELOAD
	event.preventDefault();
	
	// IF FORM INPUT FIELD IS NOT BLANK
	if ($('#city').val() != '') {
		// GET VALUE FROM INPUT FIELD AND ADD IT TO PHP URL SEARCH
		$.get('./assets/php/scraper.php?city='+$('#city').val(), function(data) {
			// BLOCK ERROR ALERT FROM DISPLAYING
			$('.alert-danger').css('display', 'none');
			// ADD DATA FROM PHP SCRAPE TO THE SUCCESSFUL WEATHER SEARCH ALERT

			// ~~~~ MESS AROUND WITH (data), CHANGE CELCIUS NUMBERS TO FAHRENHEIT BEFORE DISPLAYING ~~~~~~ //
			$('#forecast').html(data);
			

			// FADE IN SUCCESFUL WEATHER ALERT TO DISPLAY
			$('.alert-primary').fadeIn();

			// IF PHP SCRAPE DOES NOT YEILD RESULTS (USER PUT IN INVALID CITY NAME)
			if(data == '') {
				// BLOCK SUCCESS ALERT FROM DISPLAYING
				$('.alert-primary').css('display', 'none');
				// DISPLAY ERROR ALERT FOR USER TO ENTER A VALID CITY NAME
				$('.alert-danger').html('Could Not Find Weather Data for that City. Please Try Again.').fadeIn();
			}
		});
	// IF USER DOES NOT ENTER ANYTHING INTO FORM INPUT FIELD
	} else {
		// BLOCK SUCCESS ALERT FROM DISPLAYING
		$('.alert-primary').css('display', 'none');
		// DISPLAY ERROR ALERT FOR USER TO ENTER A CITY
		$('.alert-danger').html('Please Enter a City.').fadeIn();
	}

});