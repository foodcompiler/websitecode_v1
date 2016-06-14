<?php
require('../../common/common.php');

if (!isset($_GET['restaurant'])) {
	die("");
}

function search($keyword) {
  
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT DISTINCT restaurant FROM foodtable WHERE is_validated=1 AND restaurant LIKE '%".$keyword."%' ORDER BY restaurant ASC");

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

$restaurant = $_GET['restaurant'];

$data = search($restaurant);

echo json_encode($data, JSON_HEX_APOS);