<?php

$servername = '127.0.0.1';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

mysqli_select_db($conn, 'food_db' );

$selectedCategory = $_GET['category'];

if(empty($_GET['selectedType'])) {
	$selectedType = 'nonveg';
}
else {
	$selectedType = $_GET['selectedType'];
}

$query = "SELECT dishname, restaurant, rating FROM foodtable WHERE category='$selectedCategory' && type='$selectedType'";
$queryResult = mysqli_query($conn, $query);

$table = array();
$table['cols'] = array(
    array('id' => '', 'label' => 'Dish', 'type' => 'string'),
    array('id' => '', 'label' => 'Rating', 'type' => 'number')
    ); 

$rows = array();
foreach($queryResult as $row){
    $temp = array();
     
    $temp[] = array('v' => (string) $row['dishname']. '('.$row['restaurant'].')');
    $temp[] = array('v' => (int) $row['rating']); 
    $rows[] = array('c' => $temp);
    }

 
$table['rows'] = $rows;
 
$jsonTable = json_encode($table, true);
echo $jsonTable;

mysqli_close($conn);

?>