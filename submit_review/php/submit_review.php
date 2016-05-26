<?php

$servername = '127.0.0.1';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

mysqli_select_db($conn, 'food_db');

$dish_name = $_POST['dish_name'];
$restaurant_name = $_POST['restaurant_name']; 
$location = $_POST['location']; 
$rating = $_POST['rating'];
$category = $_POST['categorySelector'];
$instagram = $_POST['instagram'];

$query = "INSERT INTO foodtable (instagram_handle, restaurant, dishname, location, rating, category, type) VALUES ('$instagram', '$restaurant_name', '$dish_name', '$location', '$rating', '$category', 'nonveg')";
$queryResult = mysqli_query($conn, $query);

if($queryResult)
{
echo "<html><body><h2>Thank you for sharing your review. Please visit the chart section.</h2></body></html>";

}
else
{
echo "Error submitting form, please try again later.";

}


mysqli_close($conn);

?>