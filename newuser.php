<?php
include 'db.php';

$cus_id;
$cus_name = $_POST['name'];
$cus_phone = $_POST['phone'];
$cus_address = $_POST['address'];
$cus_email = $_POST['email'];
$cus_psw = $_POST['psw'];
$cus_repsw = $_POST['psw-repeat'];
$cus_gender = $_POST['gender'];


$sql = "INSERT INTO customer (cus_id, cus_name, cus_phone, cus_adress, cus_email, cus_password, cus_gender) 
	VALUES ('', '$cus_name', '$cus_phone', '$cus_address', '$cus_email', '$cus_psw', '$cus_gender');";
mysqli_query($con, $sql);
echo '<script>alert("Your new password successfully send to your E-mail")</script>';
header('location:home.php');
?>