var dishId = window.location.hash.substring(1);

var jsonData = $.ajax({
    url: "php/dishDetailsDbQuery.php",
    data: {
        dishId: dishId
    },
    dataType: "json",
    async: false
}).responseText;

var parsedJsonData = JSON.parse(jsonData);
document.getElementById("dishName").innerHTML = parsedJsonData[0]['dish_name'];
document.getElementById("location").innerHTML = parsedJsonData[0]['location'];
document.getElementById("restaurant").innerHTML = parsedJsonData[0]['restaurant'];
document.getElementById("rating").innerHTML = parsedJsonData[0]['rating'];
document.getElementById("category").innerHTML = parsedJsonData[0]['category'];
document.getElementById("price").innerHTML = parsedJsonData[0]['price'];
document.getElementById("dishImage").src = 'https://img.zmtcdn.com/data/reviews_photos/964/59038315793b192b96f559e8cd0c4964_1465276645.jpg';
