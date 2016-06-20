<?php
    require('../../common/common.php');
    try {
        $db = getDbConnection();
        
        $table = array();
        $dishId = $_GET['dishId'];
        
        $queryResult = $db->query("SELECT dish_id, dish_name, category, restaurant, rating, photo_link, location, price from foodtable WHERE dish_id='$dishId'");
        
        $result = $queryResult->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result, true);
        }    
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
?>