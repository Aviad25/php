<?php  ?>
<html lang="en">
  <head>
  <script type="text/javascript" src="js/closeForm.js"></script>
  <script type="text/javascript" src="js/menuAndForm.js"></script>   
  <link rel="stylesheet" href="css/menu.css">
  
</head>
  <body>
    <nav>
      <ul>
        <li><a href="home.php"><img src="img/logo.png" alt="Home" height="25rem"></a></li>
        <li class="dropdown">
          <a href="mensJacket.php" class="dropbtn">Men</a>
          <div class="dropdown-content">
            <a href="mensJacket.php">Jackets</a>
            <a href="#">T-shirts</a>
            <a href="#">Jeans</a>
          </div>
        </li>
        <li class="dropdown">
          <a href="womenshirt.php" class="dropbtn">Women</a>
          <div class="dropdown-content">
            <a href="#">dresses</a>
            <a href="#">jackets</a>
            <a href="#">jeans</a>
            <a href="womenshirt.php">T-shirts and Long sleeve</a>
          </div>
        </li> 

        <li class="dropdown">
          <a href="#" class="dropbtn"><?php echo $_SESSION['cusname']; ?></a>
          <div class="dropdown-content">
            <a href="profile.php">Profile</a>
            <a href="logout.php">Log Out</a>
          </div>
        </li> 

        <!-- Cart -->
        <li >
          <a href="cart.php" id="cart" > Cart 
          <?php 
            if(isset($_SESSION['cart'])) {
              $count = count($_SESSION['cart']);
              echo "<span id=\"cart_count\">$count</span>";
            }else{
              echo "<span id=\"cart_count\">0</span>";
            }
          ?>
          </a>
        </li>
      </ul>
    </nav>
  </body>
</html>


