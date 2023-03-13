<?php 
session_start();
include 'db.php';

//Generate random password ------------------------------>

$container=array("a", "b", "s", "f", "q", "@", "w", "1", "2", "3", "i", "u", "z", "b", "l", "k", "_");
$count=1;
$randpass="";
$rn;
$randomchar="";

while($count < 7){
    $rn=rand(0, count($container) - 1);
    $randomchar=$container[$rn];
    $randpass=$randpass.$randomchar;

    ++$count;
}
//-----------------------------------------------

if(isset($_POST["remember"])) 
{
    if(!isset($_COOKIE['user'])){
        setcookie("user", $_POST['email'], time() + 30);
        setcookie("password", $_POST['password'], time() + 30); 
    }
}
else 
{
    setcookie("user", "", time() - 30); 
    setcookie("password", "", time() - 30);
}


if(!isset($_SESSION['userId']))
$_SESSION['userId']=$_POST['email'];


if($_SESSION['userId']!=$_POST['email'])
{
$_SESSION['counter']=0;
$_SESSION['userId']=$_POST['email'];
}

$current_user;
$sql= "select * from customer";
$result= mysqli_query($con, $sql);
while($row=mysqli_fetch_array($result))
{
    if($row['cus_email']==$_POST['email'])
    {
        $current_user = $row['cus_name'];
        
        break;
    }
}
if($row['cus_password']==$_POST['password'])
{
    if(!isset($_SESSION['cusemail'])){
        $_SESSION['cusemail']=$row['cus_email'];
    }
    if(!isset($_SESSION['cusname'])){
        $_SESSION['cusname']=$row['cus_name'];
    }
    if(!isset($_SESSION['cusphone'])){
        $_SESSION['cusphone']=$row['cus_phone'];
    }
    if(!isset($_SESSION['cusaddress'])){
        $_SESSION['cusaddress']=$row['cus_adress'];
    }
    if(!isset($_SESSION['cusgender'])){
        $_SESSION['cusgender']=$row['cus_gender'];
    }
    echo "<script>alert('Welcome $current_user')</script>";
    header('Refresh:1;url=home.php');
}
else
{
    if(!isset($_SESSION['counter']))
        $_SESSION['counter']=0; 
        
    
    $_SESSION['counter'] = $_SESSION['counter']+1;    
    echo '<script>alert("You entered the wrong password ' . $_SESSION['counter'] . ' times")</script>';
    header('Refresh:1;url=home.php');
    if($_SESSION['counter']==3)
    {   
        echo '<script>alert("3 wrong attempt!")</script>';
        $_SESSION['counter']=0;
        
        // change user password
        $cus_email = $_POST['email'];
        $cus_psw = $_POST['password'];
        $update = "UPDATE customer set cus_password = '$randpass' where cus_email = '$cus_email'";
        mysqli_query($con, $update);

        if(!isset($_SESSION['rand_pass']))
        $_SESSION['rand_pass']=$randpass;

        $to = $row['cus_email'];
        $subject = "Reset password";
        $body = "Hi , your new password is $randpass";
        $headers = "From:salihsaeed48@gmail.com";
                
        if(mail($to, $subject, $body, $headers))
        {
            echo '<script>alert("Your new password successfully send to your E-mail")</script>';
        }
                
        else
        {
            echo '<script>alert("Email sending failed")</script>';
        }

        if(!isset($_SESSION['cus_mail']))
        $_SESSION['cus_mail']=$row['cus_email'];
                
        header('Refresh:1;url=changepass.php');
    }
   
}


?>   