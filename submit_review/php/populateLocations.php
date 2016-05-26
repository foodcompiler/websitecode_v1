<?php

$servername = '127.0.0.1';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

mysqli_select_db($conn, 'food_db');

$location = $_POST['location'];

$query = "SELECT DISTINCT location FROM foodtable WHERE location LIKE '%".$location."%' ORDER BY location ASC";
$queryResult = mysqli_query($conn, $query);

echo '<table>';

while ($row = mysqli_fetch_array($queryResult)) {
    // $select.= '<option value="">'.$row[0].'</option>';
	echo '<tr><td>'.$row[0].'</td></tr>'; 
}

echo '</table>';

mysqli_close($conn);

?>

