var MIN_LENGTH = 2;

$(document).ready(function () {
	$("#location").keyup(function () {
		var location = $("#location").val();
		if (location.length >= MIN_LENGTH) {

			$.get("../submit_review/php/populateLocations.php",
				{
					location: location
				}).done(function (data) {
					$('#locationResults').html('');
					var results = jQuery.parseJSON(data);
					$(results).each(function (key, value) {
						$('#locationResults').append('<div class="item">' + value + '</div>');
					})

					$('.item').click(function () {
						var text = $(this).html();
						$('#location').val(text);
					})

				});
		} else {
			$('#location').html('');
		}
	});

	$("#restaurant").keyup(function () {
		var restaurant = $("#restaurant").val();
		if (restaurant.length >= MIN_LENGTH) {
			$.get("../submit_review/php/populateRestaurants.php",
				{
					restaurant: restaurant
				}).done(function (data) {
					$('#restaurantResults').html('');
					var results = jQuery.parseJSON(data);
					$(results).each(function (key, value) {
						$('#restaurantResults').append('<div class="item">' + value + '</div>');
					})

					$('.item').click(function () {
						var text = $(this).html();
						$('#restaurant').val(text);
					})

				});
		} else {
			$('#restaurant').html('');
		}
	});
	
	$("#dishName").keyup(function () {
		var dishName = $("#dishName").val();
		if (dishName.length >= MIN_LENGTH) {
			$.get("../submit_review/php/populateDishNames.php",
				{
					dishName: dishName
				}).done(function (data) {
					$('#dishNameResults').html('');
					var results = jQuery.parseJSON(data);
					$(results).each(function (key, value) {
						$('#dishNameResults').append('<div class="item">' + value + '</div>');
					})

					$('.item').click(function () {
						var text = $(this).html();
						$('#dishName').val(text);
					})

				});
		} else {
			$('#dishName').html('');
		}
	});

    $("#location").blur(function () {
		$("#locationResults").fadeOut(500);
	}).focus(function () {
		$("#locationResults").show();
	});
	$("#restaurant").blur(function () {
		$("#restaurantResults").fadeOut(500);
	}).focus(function () {
		$("#restaurantResults").show();
	});
	$("#dishName").blur(function () {
		$("#dishNameResults").fadeOut(500);
	}).focus(function () {
		$("#dishNameResults").show();
	});
});