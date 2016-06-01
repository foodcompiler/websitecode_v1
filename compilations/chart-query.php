<?php
    require('../common.php');

    try {
        $selectedCategory = $_GET['category'];

        $db = getDbConnection();
        $queryResult = $db->query("SELECT dish_name, restaurant, rating from foodtable WHERE category_internal='$selectedCategory' AND is_validated=1");

        $table = array();
        $table['cols'] = array(array('id' => '', 'label' => 'Dish', 'type' => 'string'), array('id' => '', 'label' => 'Rating', 'type' => 'number'));
    
        $rows = array();
        foreach($queryResult as $row){
            $temp = array();     
            $temp[] = array('v' => (string) $row['dish_name']. ' ('.$row['restaurant'].')');
            $temp[] = array('v' => (int) $row['rating']); 
            $rows[] = array('c' => $temp);
        }

        $table['rows'] = $rows;
        
        // convert data into JSON format
        $jsonTable = json_encode($table, true);
    
        echo $jsonTable;
        } 
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
?>