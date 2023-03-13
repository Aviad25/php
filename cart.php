<?php
session_start();
include 'db.php';
                    //***mockdb we will use our original db***
                    //require_once('mockDb.php');
                    //creating instance of mockDb class here:
                    //$database = new CreateDb(dbname:"Productdb", tablename:"producttb" );

if(isset($_POST['add'])){
    // print_r($_POST['prod_id']);
    if(isset($_SESSION['cart'])){
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        
        if(in_array($_POST['prod_id'], $item_array_id)){
            echo "<script>alert('Product is already in cart')</script>";
            echo "<script>window.location = 'cart.php' </script>";
        }
        else{
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['prod_id']
            );

            $_SESSION['cart'][$count] = $item_array;
            
        }
    }
    else{
        $item_array = array(
            'product_id' => $_POST['prod_id']
        );

        $_SESSION['cart'][0]=$item_array;
    }
}



if(isset($_POST['remove'])){
    if($_GET['action'] == 'remove'){
        foreach($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been removed!')</script>";
                echo "<script>window.location=cart.php</script>";
            }
        }
    }
}






?>



 <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/cart.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    </head>
    <body>
   <div class="container-fluid">
        <div class="row px-5">
            <h5>
                <br>
                <a href="home.php" style="color: black;"><i class="fa fa-arrow-circle-left" aria-hidden="true">Back</i></a>
            </h5>
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6> My Cart </h6>
                    <hr>
                    
                    <?php
                        require_once 'addToCart.php';
                        $total = 0;
                        if(isset($_SESSION['cart'])){
                            $product_id = array_column($_SESSION['cart'], 'product_id');
                            
                            $sql = " SELECT * FROM product;";
                            $result = mysqli_query($con, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if($resultCheck > 0)
                            {          
                                while($row = mysqli_fetch_assoc($result)){
                                    foreach($product_id as $id){
                                        if($row['prod_id'] == $id){
                                            cartElement($row['prod_img'], $row['prod_desc'], $row['prod_price'], $row['prod_id']);
                                            $total = $total + (double)$row['prod_price'];
                                        }
                                    }
                                }
                            }
                        }else{
                            echo "<h5>Cart is empty</5>";
                        }
                    ?>

                </div> 
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php 
                                if(isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo "<h6>Price ($count items)</h6>";
                                }else{
                                    echo "<h6>Price (0 items)</h6>";
                                }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>     
                        </div>
                        <div class="col-md-6">
                            <h6>$<?php echo $total;?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>$<?php echo $total;?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    </html>