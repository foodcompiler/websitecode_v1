<html>

<body>
    <div>
        <h2>Add review</h2>
        <form action="php/submitReview.php" method="post">
            
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
            
            Rating:
            <? include ('php/populateRatings.php') ?>
            <hr>
            
            Type: <input type="text" placeholder="veg, chicken, mutton, hot, cold" name="type" id="type">
            <br> 
            <hr>
            
            Category: <input type="text" placeholder="Burger, Pasta, Paratha, Gravy Chicken" name="category" id="category">
            <br> 
            <div id="categoryResults"></div>
            <hr>
            
            Presentation:
            <? include ('php/populatePresentationRatings.php') ?>
            <hr>
            
            Price: <input type="text" placeholder="Price (as on menu)" name="price" id="price">
            <br> 
            <hr> 
            
            <input type="submit" value=" Submit " name="submit"/>            

        </form>
    </div>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script src="js/util.js"></script>

</html>