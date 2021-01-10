<?php

function cartElement($productimg, $productname, $productprice, $productid)
{
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border-top rounded py-2 my-4\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">UGX <b>$productprice</b>/=</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"qty col-md-3 py-5\">
                                <div class=\"btn-bx\">
                                    <button type=\"button\" class=\"qty-down btn bg-light border rounded-circle\" data-id=\"pro1\"><i class=\"bx bx-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"qty_input w-25 d-inline\" data-id=\"pro1\">
                                    <button type=\"button\" class=\"qty-up btn bg-light border rounded-circle\" data-id=\"pro1\"><i class=\"bx bx-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

?>