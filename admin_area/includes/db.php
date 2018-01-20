<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce");

if(mysqli_connect_errno()){
    echo "Failed to connecte to MySQL: " . mysqli_connect_error();
}

if(!mysqli_select_db($con, 'ecommerce')){
    echo 'Database not selected!';
}

?>