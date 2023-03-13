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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit4U</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>




<div>
<div class="about-section">
  <h1>About Us Page</h1>
  <p>Clothing store</p>
  <p>the fastest and easiest way to get your favorite Clothing .</p>
</div>

<h2 style="text-align:center">New products</h2>
<div class="row">
  <div class="column">
    <a href="mensJacket.php">
    <div class="card">
      <img src="img/5.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>jacket </h2>
        <p class="title">Mens jacket</p>
        <p>Casual for everyday life</p>
        
        
      </div>
    </div>
    </a>
  </div>

  <div class="column">
    <a href="mensJacket.php">
    <div class="card" >
      <img src="img/4.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>jacket</h2>
        <p class="title">Mens jacket</p>
        <p>Casual dark look</p>
        
      </div>
      </a>
    </div>
  </div>

  

</div>








<footer>
  <p>Contact us here or on Facobook:</p>
  <p><a href="mailto:aviad.25@hotmail.com">Aviad.25@hotmail.com</a></p>
  <p><a href="https://www.facebook.com/aviad.b.harush/">ⓕ</a></p>
</footer>
</body>
</html>