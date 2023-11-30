<?php
    require_once('config.php');

    $rstid = $_GET['rstid'];

    $sql = "SELECT restaurant.restaurantName,COUNT(customerOrderId) AS indtotalCalls, 
            SUM(orderTotalAmount) AS indtotalValue FROM customerorder
            INNER JOIN restaurant ON 
            customerorder.restaurantId = restaurant.restaurantId
            Where customerorder.restaurantId = '" . $rstid . "'";

    //echo($sql);

    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            $indrestaurant = array();
            while($row = $result->fetch_array()){
                $indrestaurant[] = array('indrestaurantName' => $row['restaurantName'],
                                        'indrestaurantcalls' =>  $row['indtotalCalls'],
                                        'indrestaurantvalue' => $row['indtotalValue']);    
            }
        }
    }

    echo(json_encode($indrestaurant));

?>