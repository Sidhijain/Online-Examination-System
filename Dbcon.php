<?php
    
    $servername ="localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "project";
    
    // create a connection using conn obj.
    $conn = mysqli_connect($servername, $username, $password, $dbname);
	// if($conn){
	// 	echo "connection successful";
    // }
    // else{
    //     echo "no connection".mysql_connect_error(); // this func tells the reason of failure of connection
    // }
    
    
?>