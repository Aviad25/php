<?php
include 'db.php';

function cartElement($prod_img, $prod_desc, $prod_price, $prod_id){


    $element2="
    
    <form action=\"cart.php?action=remove&id=$prod_id\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$prod_img alt=\"image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$prod_desc</h5>
                                <small class=\"text-secondary\">Seller: Potato</small>
                                <h5 class=\"pt-2\">$prod_price</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <button type=\"button\" name=\"decqty\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                <input type=\"text\" value=\"1\" name=\"qty\" class=\"form-control w-25 d-inline\">
                                <button type=\"button\" name=\"incqty\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                            </div>
                        </div>
                    </div>
                </form>

    ";
    echo $element2;
}

?>