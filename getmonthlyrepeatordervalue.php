<?php
    require_once('config.php');

    $ownerid = $_GET['ownerid'];

    $sql = "SELECT IFNULL(SUM(orderTotalAmount),0) AS repeatValue
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
            $totalRepeatValue = array();
            while($row = $result->fetch_array()){
                $totalRepeatValue[] = array('TotalRptValue' => $row['repeatValue']);    
            }
        }
    }

    echo(json_encode($totalRepeatValue));

?>