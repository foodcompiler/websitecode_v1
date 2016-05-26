<html>

<body>
    <div>
        <h2>Fill in the details to share your review.</h2>
        <form action="php/submit_review.php" method="post">
            Instagram handle:
            <input type="text" name="instagram">
            <br> <br> 
            
            Location: <input type="text" name="location">
            <br>
            <div id="locationResults" name="locationResults"></div>
            <br> <br> 
            
            Dish name:
            <input type="text" name="dish_name">
            <br> <br> 
            
            Category:
            <? include ('php/populateCategories.php'); ?>
            <br> <br> 
            
            Restaurant name:
            <input type="text" name="restaurant_name">
            <br> <br> 
            
            Rating:
            <select name="rating">
                <option value="">Select rating</option>
  				<option value="3">Delicious</option>
  				<option value="2">Average</option>
  				<option value="1">Bad</option>
			</select>
            <br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
    <div id="result"></div>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script>
    window.addEventListener('input', function (e) {
        console.log(e.target.name);
        if(e.target.name == 'location') {
            locationChanged();
        } else if(e.target.name == 'dish_name') {
            console.log("dishName");
        } else if(e.target.name == 'restaurant_name') {
            console.log("restaurant name");
        }
    }, false);
</script>

<script src="js/util.js"></script>

</html>