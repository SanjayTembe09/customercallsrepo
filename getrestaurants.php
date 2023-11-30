<?php
    require_once('config.php');

    $ownerid = $_GET['ownerid'];

    $sql = "SELECT restaurantId, restaurantName FROM restaurant WHERE ownerId = '$ownerid'";

    //echo($sql);

    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            $restaurants = array();
            while($row = $result->fetch_array()){
                $restaurants[] = array('restaurantId' =>  $row['restaurantId'],
                                        'restaurantName' => $row['restaurantName']);    
            }
        }
    }

    echo(json_encode($restaurants));

?>