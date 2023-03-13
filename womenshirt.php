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
        <link rel="stylesheet" href="css/womenshirt.css">
        <link rel="stylesheet" href="/css/cart.css">

    <title>Women Shirt</title>
</head>
    <body>
        <div class="container">
            <div class="col-md-25">
                <div class="row text-center py-5">
                    <?php 
                        require_once 'getProducts.php';
                        $sql = " SELECT * FROM product;";
                        $result = mysqli_query($con, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if($resultCheck > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                if($row['prod_gender'] == "women"){
                                    prodComponent($row['prod_id'], $row['prod_desc'], $row['prod_img'], $row['prod_price'], $row['prod_gender']);
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
<!-- <table>
    <container class="container" >
        <div class="row">
            <div class="column">
                <div class="card">
                <img src="img/Wshirt1.jpg" class="model"  >
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                <img src="img/Wshirt2.jpg"  class="model"  >
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                <img src="img/Wshirt3.jpg"  class="model"  >
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
                </div>
            </div>
        </div>
    </container>
</table> -->