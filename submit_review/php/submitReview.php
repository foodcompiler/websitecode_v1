<?php
require('../../common/common.php');

if(isset($_POST["submit"])){
	
	$category = $_POST['category'];
	$location = $_POST['location'];
	$restaurant = $_POST['restaurant'];
	$dish_name = $_POST['dish_name'];
	$price = $_POST['price'];
	$rating = $_POST['rating'];
	$type = $_POST['type'];
	
	$db = getDbConnection();
	
	$sql = "INSERT INTO foodtable (dish_id, category, location, restaurant, type, dish_name, price, rating, is_validated) VALUES ('', '$category', '$location', '$restaurant', '$type', '$dish_name', '$price', '$rating', 0)";
	
	if ($db->query($sql)) {
		echo "Thank you for sharing your response. <a href='../index.php'>Click here</a> to submit another response.";
	}
	else{
		echo "Error submitting response, please try again. If problem persists, please email to foodcompiler@gmail.com with the details.";
	}
}
else {
	echo 'here';
}