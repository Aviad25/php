

<html>
    <!--product generator

      READ ME
     

     generator template to paste on html
     and change values to create new products:
     add "?" before php and then copy!!!!!!

     <php 
            component(productname:"Black long sleeve shirt" , productprice:"39.99" , productsale:"14.99" , productimg:"./img/wshirt1.jpg" , prodexample:"Black sleeve shirt for winter" );
            
            
            ?>
     
    




-->
</html>


<?php 
function component($prod_desc , $prod_img , $prod_price  ,$prod_gender){
    $element="
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"cart.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$prod_img\" alt=\"image1\" class=\"img fluid card-img-top\">
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
                        </div>
                    </div>
                </form>
            </div>
       

    
    ";
    echo $element;
  }

?>






<html>

  


<!-- 
    

 component structure before adding " \ " :

     




<div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="cart.php" method="post">
                    <div class="card shadow">
                        <div>
                            <img src="./img/Wshirt1.jpg" alt="image1" class="img fluid card-img-top">
                        </div>
                        <div class="card body">
                            <h5 class="card-title">product1</h5> 
                            <h6 >
                                    ***stars***

                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>

                                *** half star***

                                <i class="far fa-star"></i>


                            </h6>
                            <p class="card-text">
                                some quick example text to build on the card
                            </p>

                            <h5>
                                <small><s class="text-secondary">$649</s></small>
                                <span class="price">$599</span>
                            </h5>

                            <button type="submit" name="add" class=" my-3">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                        
                        </div>
                    </div>
                </form>
            </div>

-->

