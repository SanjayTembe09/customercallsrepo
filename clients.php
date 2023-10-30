<?php
    require_once "config.php";
                    
    // Attempt select query execution
    $sql = "SELECT * FROM clients";
    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            $clients = array();
            while($row = $result->fetch_array()){
                $clients[] = $row;
            }    
        }
    } 
    
    echo(json_encode($clients));