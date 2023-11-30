<?php
    require_once('config.php');

    $ownerid = $_GET['ownerid'];

    $sql = "SELECT COUNT(customerOrderId) AS repeatCalls
    FROM customerorder
    INNER JOIN customers
    ON customerorder.customerId = customers.customerId
    INNER JOIN restaurant
    ON customerorder.restaurantId = restaurant.restaurantId
    INNER JOIN OWNER 
    ON restaurant.ownerId = owner.ownerId
    WHERE owner.ownerId = '" . $ownerid . "'
    AND DATE(customerorder.createdAt)  > DATE(customers.createdAt)";

    //echo($sql);

    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            $totalRepeatCalls = array();
            while($row = $result->fetch_array()){
                $totalRepeatCalls[] = array('TotalRptCalls' => $row['repeatCalls']);    
            }
        }
    }

    echo(json_encode($totalRepeatCalls));

?>