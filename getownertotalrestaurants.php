<?php
    require_once('config.php');

    $ownerid = $_GET['ownerid'];

    $sql = "SELECT count(ownerId) AS totalNumber FROM restaurant WHERE ownerId = '$ownerid'";

    //echo($sql);

    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            $ownerTotalRestaurants = array();
            while($row = $result->fetch_array()){
                $ownerTotalRestaurants[] = array('totalRestaurants' => $row['totalNumber']);    
            }
        }
    }

    echo(json_encode($ownerTotalRestaurants));

?>