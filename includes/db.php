<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce");

if(!$con){
    echo 'Not connected to the server!';
}

if(!mysqli_select_db($con, 'ecommerce')){
    echo 'Database not selected!';
}


?>