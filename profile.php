<?php
session_start();
if(!isset($_SESSION['cusemail'])){
  require_once 'menu.php';
}else{
  require_once 'menu2.php';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/profile.css">
</head>
<body>
  <section class="main">
  <div class="profile-card">
    <div class="data">
      <h2>Name: <?php echo $_SESSION['cusname']; ?></h2>
      <span>E-mail: <?php echo $_SESSION['cusemail']; ?></span>
    </div>
    <div class="row">
      <div class="info">
        <h3>Phone Number</h3>
        <span><?php echo $_SESSION['cusphone']; ?></span>
      </div>
      <div class="info">
        <h3>Address</h3>
        <span><?php echo $_SESSION['cusaddress']; ?></span>
      </div>
      <div class="info">
        <h3>Gender</h3>
        <span><?php echo $_SESSION['cusgender']; ?></span>
      </div>
    </div>
    <div class="buttons">
      <a href="#" class="btn">Edit</a>
    </div>
  </div>
</section>
</body>
</html>