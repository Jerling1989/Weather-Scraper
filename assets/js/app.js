
$('#find-weather').click(function(event) {
	event.preventDefault();
	
	$.get('../php/scraper.php?city=London', function(data) {
		alert(data);
	});
});