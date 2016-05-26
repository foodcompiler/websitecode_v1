function locationChanged() {    
    var locationInput = document.getElementsByName("location")[0];
    var location = locationInput.value; 

if (location.length > 0) {
		$.ajax({
			url: 'php/populateLocations.php',
			type: 'POST',
			data: {location: location},
			success:function(data){
				$('#locationResults').show();
				$('#locationResults').html(data);
			}
		});
	} else {
		$('#locationResults').hide();
	}
}