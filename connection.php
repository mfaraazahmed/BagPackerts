<?php
error_reporting(0);
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="admin";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    
    if($conn)
    {
        echo "Connection success";
    }
    else
    {
        
        echo "Connection failed".mysqli_connect_error();
    }
    
    ?>
