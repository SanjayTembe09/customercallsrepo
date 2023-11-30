<?php
    require_once('config.php');

    $ownerid = $_GET['ownerid'];

    $sql = "SELECT ownerName FROM owner WHERE ownerId = '$ownerid'";

    //echo($sql);

    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            $owner = array();
            while($row = $result->fetch_array()){
                $owner[] = array('ownerName' => $row['ownerName']);    
            }
        }
    }

    echo(json_encode($owner));

?>