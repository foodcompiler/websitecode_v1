<?php

$servername = '127.0.0.1';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

mysqli_select_db($conn, 'food_db');

$query = "SELECT DISTINCT category FROM foodtable";
$queryResult = mysqli_query($conn, $query);

$select= '<select name="select">';
$select.= '<option value="">Select Category</option>'; 
while ($row = mysqli_fetch_array($queryResult)) {
    $select.= '<option value="">'.$row[0].'</option>'; 
}
$select.='</select>';
echo $select;

mysqli_close($conn);

?>

