
$('#find-weather').click(function(event) {
	event.preventDefault();
	
	if ($('#city').val() != '') {
		$.get('./assets/php/scraper.php?city='+$('#city').val(), function(data) {
			$('.alert-danger').css('display', 'none');
			$('#forecast').html(data);
			$('.alert-primary').fadeIn();

			if(data == '') {
				$('.alert-primary').css('display', 'none');
				$('.alert-danger').html('Could Not Find Weather Data for that City. Please Try Again.').fadeIn();
			}
		});
	} else {
		$('.alert-primary').css('display', 'none');
		$('.alert-danger').html('Please Enter a City.').fadeIn();
	}

});