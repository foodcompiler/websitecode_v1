<?php
    require('../../common/common.php');
    try {
        $db = getDbConnection();
        
        $table = array();
        $selectedCategory = $_GET['category'];
        
        if(empty($_GET['type'])) {
            $queryResult = $db->query("SELECT dish_name, restaurant, rating, type from foodtable WHERE category_internal='$selectedCategory' AND is_validated=1 ORDER BY price ASC");   
        }
        else {
            $selectedType = $_GET['type'];
           
           foreach($selectedType[0] as $child) {
   echo $child . "\n";
}
           
$implodedSelectedType = implode(', ', $selectedType);
            // print_r('implodedSelectedType> ', $implodedSelectedType);
            $queryResult = $db->query("SELECT dish_name, restaurant, rating, type from foodtable WHERE category_internal='$selectedCategory' AND type IN ('$implodedSelectedType') AND is_validated=1 ORDER BY price ASC");
        }
        
        $number_of_rows = $queryResult->rowCount();
        
        if($number_of_rows > 0) {
        
            $table['cols'] = array(array('id' => '', 'label' => 'Dish', 'type' => 'string'), array('id' => '', 'label' => 'Rating', 'type' => 'number'));
    
            $rows = array();
            foreach($queryResult as $row) {
                $temp = array();     
                $temp[] = array('v' => (string) $row['dish_name']. ' ('.$row['restaurant'].')');
                $temp[] = array('v' => (int) $row['rating']); 
                $rows[] = array('c' => $temp);
            }
            $table['rows'] = $rows;
        
            $jsonTable = json_encode($table, true);
    
            echo $jsonTable;
        }
        else {
            echo json_encode($table, true);
        }
        }    
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
?>