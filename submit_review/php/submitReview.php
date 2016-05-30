<?php
require('../../common.php');

$instagram_handle_error = "";
$instagram_handle = "";

if(isset($_POST["submit"])){
	
	if (empty($_POST["instagram_handle"])) {
    	$instagram_handle_error = "Instagram handle is required";
		die();
  	} else {
    	$instagram_handle = $_POST['instagram_handle'];
  	}
	
	$category_internal = $_POST['categorySelector'];
	$location = $_POST['location'];
	$restaurant = $_POST['restaurant'];
	$dish_name = $_POST['dish_name'];
	$price = $_POST['price'];
	$rating = $_POST['rating'];
	
	$db = getDbConnection();
	
	$sql = "INSERT INTO foodtable (dish_id, instagram_handle, category_internal, location, restaurant, dish_name, price, rating, is_validated) VALUES ('', '$instagram_handle','$category_internal', '$location', '$restaurant','$dish_name', '$price', '$rating', 0)";
	
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