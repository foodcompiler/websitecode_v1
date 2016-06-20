<?php
    require('../../common/common.php');
    try {
        $db = getDbConnection();
        
        $table = array();
        $selectedCategory = $_GET['category'];
        
        if(empty($_GET['type'])) {
            $queryResult = $db->query("SELECT dish_id, dish_name, restaurant, rating, type, photo_link, location, price from foodtable WHERE category='$selectedCategory' AND is_validated=1 ORDER BY price ASC");   
        }
        else {
            $selectedType = $_GET['type'];
            $implodedSelectedType = implode("', '", $selectedType);
            $queryResult = $db->query("SELECT dish_id, dish_name, restaurant, rating, type, photo_link, location, price from foodtable WHERE category='$selectedCategory' AND type IN ('$implodedSelectedType') AND is_validated=1 ORDER BY price ASC");
        }
        
        $result = $queryResult->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result, true);
        }    
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
?>