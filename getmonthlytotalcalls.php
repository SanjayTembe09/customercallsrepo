<?php
    require_once('config.php');

    $ownerid = $_GET['ownerid'];

    $sql = "SELECT COUNT(customerOrderId) AS newCalls
    FROM customerorder
    INNER JOIN customers
    ON customerorder.customerId = customers.customerId
    INNER JOIN restaurant
    ON customerorder.restaurantId = restaurant.restaurantId
    INNER JOIN OWNER 
    ON restaurant.ownerId = owner.ownerId
    WHERE owner.ownerId = '" . $ownerid . "'
    AND DATE(customerorder.createdAt)  = DATE(customers.createdAt)";

    //echo($sql);

    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            $totalNewCalls = array();
            while($row = $result->fetch_array()){
                $totalNewCalls[] = array('TotalNewCalls' => $row['newCalls']);    
            }
        }
    }

    echo(json_encode($totalNewCalls));

?>