<?php
    require_once "config.php";
                    
    // Attempt select query execution
    $sql = "SELECT * FROM customers Where restaurantId = 'd433d238-7b81-11ee-97ed-f04da25d1f3d'";
    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            $customers = array();
            while($row = $result->fetch_array()){
                $customers[] = array('custName' => $row['customerName'],
                                     'custNumber' => $row['customerContactNumber'],
                                     'custAddress' =>($row['customerAddressLine1'] . ' ' . $row['customerAddressLine2']),
                                     'custArea' => $row['customerArea']);
            }                        
        }
    } 
    
    echo(json_encode($customers));
?>