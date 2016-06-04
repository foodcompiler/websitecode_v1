<?php
require('../../common/common.php');

if (!isset($_GET['category'])) {
	die("");
}

function search($keyword) {
  
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT category_internal FROM foodtable WHERE category_internal LIKE '%".$keyword."%' GROUP BY category_internal ORDER BY COUNT(*) DESC");

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

$category = $_GET['category'];

$data = search($category);

echo json_encode($data, JSON_HEX_APOS);