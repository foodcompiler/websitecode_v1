<?php
require('../../common.php');

if (!isset($_GET['dishName'])) {
	die("");
}

function search($keyword) {
  
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT DISTINCT dish_name FROM foodtable WHERE dish_name LIKE '%".$keyword."%' ORDER BY dish_name ASC");

    $keyword = $keyword . '%';
    $stmt->bindParam(1, $keyword, PDO::PARAM_STR, 100);

    $isQueryOk = $stmt->execute();
  
    $results = array();
    
    if ($isQueryOk) {
      $results = $stmt->fetchAll(PDO::FETCH_COLUMN);
    } else {
      
      trigger_error('Error executing statement.', E_USER_ERROR);
    }

    $db = null; 

    return $results;
}

$dishName = $_GET['dishName'];

$data = search($dishName);

echo json_encode($data, JSON_HEX_APOS);