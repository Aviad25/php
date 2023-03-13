<?php 
session_start();
if(!isset($_SESSION['cusemail'])){
  require_once 'menu.php';
}else{
  require_once 'menu2.php';
}

include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/womenshirt.css">
        <link rel="stylesheet" href="/css/cart.css">

    <title>Men Jackets</title>
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
                                if($row['prod_gender'] == "men"){
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