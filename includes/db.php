<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="project";

    $conn=mysqli_connect($host,$user,$pass,$db_name);
    if($conn){
        echo"you have connected";        
    }
    else{
        echo"could not connect";
    }
?>