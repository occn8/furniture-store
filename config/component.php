<?php

function component($productname, $productprice, $productimg, $productid)
{
    $element = "
    
    <div class=\" py-2\">
                <form action=\"index.php\" method=\"post\">
                <div class=\"item py-2\">
                <div class=\"product \">
                    <a href=\"#\"><img src=\"$productimg\" alt=\"product1\" class=\"img-fluid\"></a>
                    <br>
                    <div class=\"text-center\">
                        <h6>$productname</h6>
                        <div class=\"rating text-warning font-size-12\">
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"far fa-star\"></i></span>
                        </div>
                        <div class=\"price py-2\">
                            <span>
                            UGX <b>$productprice</b> /=</span>
                        </div>
                        <button type=\"submit\" class=\"btn btn-warning \" name=\"add\">View Item<i class=\"fas fa-shopping-cart\"></i></button>
                        <input type='hidden' name='product_id' value='$productid'>
                    </div> 
                </div>
                </div>
                </form>
            </div>
    ";
    echo $element;
}
function component2($productname, $producttype, $productprice, $productimg, $productid)
{
    $element = "
    
    <div class=\" py-2\">
                <form action=\"index.php\" method=\"post\">
                <div class=\"grid-item $producttype\">
                <div class=\"item py-2\" style=\"width: 200px;\">
                <div class=\"product \">
                    <a href=\"#\"><img src=\"$productimg\" alt=\"product1\" class=\"img-fluid\"></a>
                    <div class=\"text-center\">
                        <h6>$productname</h6>
                        <div class=\"rating text-warning font-size-12\">
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"far fa-star\"></i></span>
                        </div>
                        <div class=\"price py-2\">
                            <span>UGX <b>$productprice</b> /=</span>
                        </div>
                        <button type=\"submit\" class=\"btn btn-warning font-size-12\">View Item</button>
                        <input type='hidden' name='product_id' value='$productid'>
                    </div> 
                </div>
                </div>
                </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid)
{
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
