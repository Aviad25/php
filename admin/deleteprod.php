<?php
    include('../db.php');
    include('menu.php');

    if(isset($_GET['id'])){
        $prod_id = $_GET['id'];
        $sql = "DELETE FROM product WHERE prod_id='$prod_id'";
        $result = mysqli_query($con, $sql);
        header('location:products.php');
    }
?>