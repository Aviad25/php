<?php
include 'db.php';

// trying to create get products from databse using while loop
// 
function prodComponent($prod_id, $prod_desc , $prod_img , $prod_price  ,$prod_gender){
    $element="
        <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
            <form action=\"cart.php\" method=\"post\">
                <div class=\"card shadow\">
                    <div>
                        <img src=\"admin/$prod_img\" class=\"img fluid card-img-top\">
                    </div>
                    <div class=\"card body\">
                        <h5 class=\"card-title\">$prod_desc</h5> 
                        <h6 >
                        
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"far fa-star\"></i>
                    </h6>
                    <p class=\"card-text\">
                    $prod_gender
                    </p>

                    <h5>
                        <span class=\"price\">$prod_price</span>
                    </h5>

                    <button type=\"submit\" name=\"add\" class=\" my-3\">Add to Cart<i class=\"fas fa-shopping-cart\"></i></button>
                    <input type=\"hidden\" name=\"prod_id\" value=\"$prod_id\" >
                </div>
            </div>
        </form>
    </div>
    ";
    echo $element;
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/cart.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>