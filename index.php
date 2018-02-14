<!DOCTYPE html>
<html>
<head>
	<!-- PAGE TITLE -->
	<title>Weather Scraper</title>

	<!-- FAVICON -->
	<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

	<!-- META DATA -->
  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">

	<!-- RESET CSS LINK -->
  <link rel="stylesheet" type="text/css" href="assets/css/reset.css">

	<!-- CUSTOM CSS LINK -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	<!-- BOOTSTRAP CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row text-center">
			<div id="weather-panel" class="col-12 col-sm-10 col-md-8">

				<h1>WEATHER FINDER</h1>
				<p>Search any City name to find the current weather anywhere in the World!</p>

				<form method="post">
					<div class="form-group">
						<input type="text" name="city" id="city" class="form-control" placeholder="Eg. London, Hong Kong, New York City..." />
					</div>

					<button type="submit" id="find-weather" class="btn btn-primary btn-lg">Submit</button>
				</form>

				<div class="alert alert-primary" role="alert">
					<p>Three Day Weather Forecast:</p>
					<span id="forecast"></span>
				</div>

				<div class="alert alert-danger" role="alert"></div>

			</div>
		</div>
	</div>



<!-- JQUERY CDN -->
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<!-- POPPER.JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- BOOTSTRAP JS CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- CUSTOM APP JS LINK -->
<script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html>