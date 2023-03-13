<?php  ?>
<html lang="en">
  <head>
    <script type="text/javascript" src="js/closeForm.js"></script>
    <script type="text/javascript" src="js/menuAndForm.js"></script>   
    <link rel="stylesheet" href="css/menu.css">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->

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






        <!-- LOGIN FORM -->
        <li class="dropdown">
          <a onclick="document.getElementById('id01').style.display='block'" class="dropbtn">Login/Sign-up</a>
          <div class="dropdown-content">
            <a onclick="document.getElementById('id01').style.display='block'">Customer</a>
            <a onclick="document.getElementById('id03').style.display='block'">Admin</a>
            <a onclick="document.getElementById('id02').style.display='block'">sign-up</a>
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






        <!-- The Modal -->
        <div id="id01" class="modal">
          <span onclick="document.getElementById('id01').style.display='none'"
          class="close" title="Close Modal">&times;</span>

          <!-- Modal Content -->
          <form class="modal-content animate" action="checkuser.php" method="post">
            <div class="imgcontainer">
              <img src="img/logo.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label for="email"><b>E-mail</b></label>
              <input type="text" placeholder="Enter E-mail" name="email" required>
              <br/>
              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
              <br/>
              <button type="submit">Login</button>
              <br/>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>

        
        <!-- Thw Modal (contains the Login form for Admin) -->
        <div id="id03" class="modal">
          <span onclick="document.getElementById('id03').style.display='none'"
          class="close" title="Close Modal">&times;</span>

          <!-- Modal Content -->
          <form class="modal-content animate" action="admin/checkadmin.php" method="post">
            <div class="imgcontainer">
              <img src="img/admin.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label for="email"><b>E-mail</b></label>
              <input type="text" placeholder="Enter E-mail" name="email" required>
              <br/>
              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
              <br/>
              <button type="submit">Login</button>
              <br/>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>


        <!-- The Modal (contains the Sign Up form) -->
        <div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="newuser.php" method="post">
          <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone number" name="phone" required>

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter address" name="address" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <label for="gender"><b>Gender</b></label>
              <div>
                <label for="male" ><input type="radio" name="gender" value="male" id="male">Male</label>
                <label for="female" ><input type="radio" name="gender" value="female" id="female">Female</label>
                <label for="n/a" ><input type="radio" name="gender" value="n/a" id="n/a">N/A</label>
              </div>
            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
              <button type="submit" class="signup">Sign Up</button>
              <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
          </div>
        </form>
        </div>
      </ul>
    </nav>








    



  </body>
</html>


