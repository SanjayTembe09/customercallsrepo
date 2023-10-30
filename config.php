<?php
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
	$db = 'customercalls';
		 
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
         
	 if($mysqli->connect_errno ) {
		printf("Connect failed: %s<br />", $mysqli->connect_error);
		exit();
	 } 
?>	 