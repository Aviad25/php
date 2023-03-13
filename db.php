<?php
    $con=mysqli_connect("localhost","root","1234","fit4u");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return $con;
?>