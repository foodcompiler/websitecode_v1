<html>

<body>
    <div>
        <h2>Few details required, and your review shall be up on Foodcompiler.</h2>
        <form action="php/submitReview.php" method="post">
            Instagram handle:
            <input type="text" id="instagram_handle" name="instagram_handle" required>
            <hr> 
            
            Location: <input type="text" placeholder="CP, Punjabi Bagh, etc." name="location" id="location" required>
            <br> 
            <div id="locationResults"></div>
            <hr>
            
            Restaurant: <input type="text" placeholder="Restaurant name" name="restaurant" id="restaurant" required>
            <br> 
            <div id="restaurantResults"></div>
            <hr>
            
            Name of the dish: <input type="text" placeholder="Dish name" name="dish_name" id="dish_name" required>
            <br> 
            <div id="dishNameResults"></div>
            <hr>
            
            Price: <input type="text" placeholder="Price (as on menu)" name="price" id="price">
            <br> 
            <hr> 
            
            Category:
            <? include ('../common/populateCategories.php'); ?>
            <hr> 
            
            Rating:
            <? include ('php/populateRatings.php') ?>
            <hr>

            <input type="submit" value=" Submit " name="submit"/>
        </form>
    </div>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script src="js/util.js"></script>

</html>