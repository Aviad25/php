<?php
session_start();
if(!isset($_SESSION['cusemail'])){
  require_once 'menu.php';
}else{
  require_once 'menu2.php';
}

include_once 'db.php';

$msg_old = "";
$msg_mail = "";
$msg_pass = "";
$cus_mail = "";

if(isset($_POST["oldpsw"])) 
$old_pass = $_POST['oldpsw']; 

if(isset($_POST["psw"])) 
$cus_psw = $_POST['psw'];    

if(isset($_POST["psw-repeat"])) 
$cus_repsw = $_POST['psw-repeat'];

if(isset($_POST["email"])) 
$cus_mail = $_POST['email'];

if($cus_mail == $_SESSION['cus_mail']){
    if($old_pass == $_SESSION['rand_pass']){
        if($cus_psw == $cus_repsw){
            $sql= "select * from customer";
            $result= mysqli_query($con, $sql);
            while($row=mysqli_fetch_array($result))
            {
                if($row['cus_email']==$_SESSION['cus_mail'])
                {
                    $cus_psw = $_POST['psw'];
                    $update = "UPDATE customer set cus_password = '$cus_psw' where cus_email = '$cus_mail'";
                    mysqli_query($con, $update);
                    
                    echo '<script>alert("Password changed :)")</script>';
                    break;
                }
                else{
                    echo '<script>alert("can not change your password :( ")</script>';
                }
            }
        }else{
            $msg_pass = "The Password do not match";
        }
    }else{
        $msg_old = "random pass is wrong";
    }
}else{
    $msg_mail = "Enter your email";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="modal-content" action="changepass.php" method="post">
        <div class="container">
            <h1>Change your password</h1>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <p style="color: red;"><?php echo $msg_mail;?></p>

            <label for="oldpsw"><b>Password</b></label>
            <input type="password" placeholder="Enter Old Password" name="oldpsw" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
            <p style="color: red;"><?php echo $msg_pass;?></p>

            <div class="clearfix">
              <button type="submit" class="signup">Submit</button>
            </div>
        </div>
    </form>             
</body>
</html>