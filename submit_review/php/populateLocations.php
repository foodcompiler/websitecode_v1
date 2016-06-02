<?php
require('../../common/common.php');

if (!isset($_GET['location'])) {
	die("");
}

function searchForLocations($location) {
  
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT DISTINCT location FROM foodtable WHERE location LIKE '%".$location."%' ORDER BY location ASC");

    $location = $location . '%';
    $stmt->bindParam(1, $location, PDO::PARAM_STR, 100);

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

$location = $_GET['location'];

$data = searchForLocations($location);

echo json_encode($data, JSON_HEX_APOS);