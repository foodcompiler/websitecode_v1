var MIN_LENGTH = 2;
var FADE_OUT_DURATION = 200;

function loadCategories() {
    $.get("../submit_review/php/populateCategory.php",
        {
            category: ''
        }).done(function (data) {
            var results = jQuery.parseJSON(data);
            $(results).each(function (key, value) {
                $('#categoryResults').append('<option>' + value + '</option>');
            })
        });
}

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

	$("#dish_name").keyup(function () {
		var dish_name = $("#dish_name").val();
		if (dish_name.length >= MIN_LENGTH) {
			$.get("../submit_review/php/populateDishNames.php",
				{
					dish_name: dish_name
				}).done(function (data) {
					$('#dishNameResults').html('');
					var results = jQuery.parseJSON(data);
					$(results).each(function (key, value) {
						$('#dishNameResults').append('<div class="item">' + value + '</div>');
					})

					$('.item').click(function () {
						var text = $(this).html();
						$('#dish_name').val(text);
					})

				});
		} else {
			$('#dish_name').html('');
		}
	});

	$("#cuisine").keyup(function () {
		var cuisine = $("#cuisine").val();
		if (cuisine.length >= MIN_LENGTH) {

			$.get("../submit_review/php/populateCuisines.php",
				{
					cuisine: cuisine
				}).done(function (data) {
					$('#cuisineResults').html('');
					var results = jQuery.parseJSON(data);
					$(results).each(function (key, value) {
						$('#cuisineResults').append('<div class="item">' + value + '</div>');
					})

					$('.item').click(function () {
						var text = $(this).html();
						$('#cuisine').val(text);
					})

				});
		} else {
			$('#cuisine').html('');
		}
	});

    $("#location").blur(function () {
		$("#locationResults").fadeOut(FADE_OUT_DURATION);
	}).focus(function () {
		$("#locationResults").show();
	});

	$("#restaurant").blur(function () {
		$("#restaurantResults").fadeOut(FADE_OUT_DURATION);
	}).focus(function () {
		$("#restaurantResults").show();
	});

	$("#dish_name").blur(function () {
		$("#dishNameResults").fadeOut(FADE_OUT_DURATION);
	}).focus(function () {
		$("#dishNameResults").show();
	});

	$("#cuisine").blur(function () {
		$("#cuisineResults").fadeOut(FADE_OUT_DURATION);
	}).focus(function () {
		$("#cuisineResults").show();
	});
});