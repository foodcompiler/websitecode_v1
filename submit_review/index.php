<html>

<body>
    <div>
        <h2>Fill in the details to share your review.</h2>
        <form action="php/submitReview.php" method="post">
            Instagram handle:
            <input type="text" name="instagram">
            <hr> 
            
            Location: <input type="text" placeholder="CP, Punjabi Bagh, etc." id="location">
            <br> 
            <div id="locationResults"></div>
            <hr>
            
            Restaurant: <input type="text" placeholder="Restaurant name" id="restaurant">
            <br> 
            <div id="restaurantResults"></div>
            <hr>
            
            Name of the dish: <input type="text" placeholder="Dish name" id="dishName">
            <br> 
            <div id="dishNameResults"></div>
            <hr>
            
            Category:
            <? include ('php/populateCategories.php'); ?>
            <hr> 
            
            Rating:
            <? include ('php/populateRatings.php') ?>
            <hr>

            <input type="submit" value="Submit">
        </form>
    </div>
    <div id="result"></div>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script src="js/util.js"></script>

</html>