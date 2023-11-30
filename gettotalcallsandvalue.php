<?php
    require_once('config.php');

    $ownerid = $_GET['ownerid'];

    $sql = "SELECT COUNT(customerOrderId) as totalcalls, SUM(orderTotalAmount) as totalvalue
    FROM customerorder
    INNER JOIN restaurant
    ON customerorder.restaurantId = restaurant.restaurantId
    INNER JOIN OWNER 
    ON restaurant.ownerId = owner.ownerId
    WHERE owner.ownerId = '" . $ownerid . "'";

    //echo($sql);

    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            $totalcallsvalue = array();
            while($row = $result->fetch_array()){
                $totalcallsvalue[] = array('totalcalls' => $row['totalcalls'],
                                            'totalvalue' => $row['totalvalue']);    
            }
        }
    }

    echo(json_encode($totalcallsvalue));

?>