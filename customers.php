<?php
    require_once "config.php";
                    
    // Attempt select query execution
    $sql = "SELECT * FROM client";
    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            $customers = array();
            while($row = $result->fetch_array()){
                $customers[] = $row;
            }    
        }
    } 
    
    echo(json_encode($customers));
?>