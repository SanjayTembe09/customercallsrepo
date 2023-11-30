<?php
    require_once('config.php');

    $ownerid = $_GET['ownerid'];
    $rstid = $_GET['restid'];

    $sql = "SELECT SUM(orderTotalAmount)  AS indrstnewOrdrValue 
    FROM customerorder 
    INNER JOIN customers ON customerorder.customerId = customers.customerId 
    INNER JOIN restaurant ON customerorder.restaurantId = restaurant.restaurantId 
    INNER JOIN OWNER ON restaurant.ownerId = owner.ownerId 
    WHERE owner.ownerId = '" . $ownerid . "' 
    AND customerorder.restaurantId = '". $rstid ."'
    AND DATE(customerorder.createdAt) = DATE(customers.createdAt)";

    //echo($sql);

    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            $indtotalNewValue = array();
            while($row = $result->fetch_array()){
                $indtotalNewValue[] = array('IndTotalNewValue' => $row['indrstnewOrdrValue']);    
            }
        }
    }

    echo(json_encode($indtotalNewValue));

?>