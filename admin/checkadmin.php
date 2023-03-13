<?php 
include "../db.php";
session_start();

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


if(!isset($_SESSION['user']))
$_SESSION['user']=$_POST['email'];


if($_SESSION['user']!=$_POST['email'])
{
    $_SESSION['counter']=0;
    $_SESSION['user']=$_POST['email'];
}
$flag = 0;
$admin;
$sql= "select * from admin";
$result= mysqli_query($con, $sql);
while($row=mysqli_fetch_array($result))
{
    if($row['user_email'] == $_POST['email'])
    {
        $admin = $row['user_name'];
        if(!isset($_SESSION['admin'])){
            $_SESSION['admin']=$row['user_email'];
        }
        if(!isset($_SESSION['admin_name'])){
            $_SESSION['admin_name']=$admin;
        }
        break;
    }
}
if($row['user_password'] == $_POST['password'])
{
    echo "<script>alert('Welcome $admin')</script>";
    header('Refresh:1;url=products.php');
}else{
    if(!isset($_SESSION['counter']))
        $_SESSION['counter']=0;
        
    
    $_SESSION['counter'] =$_SESSION['counter']+1;
    echo '<script>alert("You entered the wrong password ' . $_SESSION['counter'] . ' times")</script>';
    if($_SESSION['counter']==3)
    {   
        
        $_SESSION['counter']=0;
        echo '<script>alert("3 wrong attempt!")</script>';
    }
    }

?>   