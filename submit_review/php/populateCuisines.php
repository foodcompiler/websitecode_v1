<?php
require('../../common/common.php');

if (!isset($_GET['cuisine'])) {
	die("");
}

function search($keyword) {
  
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT DISTINCT cuisine FROM foodtable WHERE cuisine LIKE '%".$keyword."%' ORDER BY cuisine ASC");

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

$cuisine = $_GET['cuisine'];

$data = search($cuisine);

echo json_encode($data, JSON_HEX_APOS);