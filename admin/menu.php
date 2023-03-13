<?php
session_start();
if(!isset($_SESSION['admin']) && empty($_SESSION['admin']) ){
  header('location:../home.php');
}


?>
<!DOCTYPE html>
<html>
<head>
  <!--bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: gainsboro;">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="products.php">Fit4U</a>
    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown mt-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Products
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="products.php">view Products </a>
          <a class="dropdown-item" href="addproducts.php">Add Products</a>
        </div>
      </li>

      <li class="nav-item dropdown mt-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          <?php 
            if(isset($_SESSION['admin_name'])){
              echo $_SESSION['admin_name'];
            }  
          ?>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
</body>
</html>