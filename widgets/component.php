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
                        <button type=\"submit\" class=\"btn btn-warning\" name=\"detail-link\"><a href=\"details.php?product_id=$productid\" class=\"color-black\">View Item</a></button>
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
                        <button type=\"submit\" class=\"btn btn-warning\" name=\"detail-link\"><a href=\"details.php\" class=\"color-black\">View Item</a></button>
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

function component3($productname, $productbrand, $productprice, $productimg, $productid)
{
    $element = "
    
    <div class=\" py-2\">
                <form action=\"index.php\" method=\"post\">
                <div class=\"grid-item $productbrand\">
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
                        <button type=\"submit\" class=\"btn btn-warning\" name=\"detail-link\"><a href=\"details.php\" class=\"color-black\">View Item</a></button>
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
                            <div class=\"col-md-3 py-5\">
                                <div class=\"btn-bx\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"bx bx-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"bx bx-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

function detail($product_name, $product_brand, $product_price, $product_image, $product_id)
{
    $element = "
    
    <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <img src=\" $product_image\" alt=\"product\" class=\"img-fluid\">
                            <div class=\"form-row pt-4 font-size-16 font-baloo\">
                                <div class=\"col\">
                                    <button type=\"submit\" class=\"btn btn-danger form-control\">Proceed to Buy</button>
                                </div>
                                <div class=\"col\">
                                    <form action=\"details.php\" method=\"post\">
                                        <button type=\"submit\" name=\"add\" class=\"btn btn-warning font-size-16 form-control\">Add to Cart</button>
                                        <input type='hidden' name='product_id' value='$product_id'>
                                         
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 py-5\">
                            <h5 class=\"font-baloo font-size-20\"><?php echo $product_name ?? \"Unknown\"; ?></h5>
                            <small>by <?php echo $product_brand ?? \"Brand\"; ?></small>
                            <div class=\"d-flex\">
                                <div class=\"rating text-warning font-size-12\">
                                    <span><i class=\"bx bx-star\"></i></span>
                                    <span><i class=\"bx bx-star\"></i></span>
                                    <span><i class=\"bx bx-star\"></i></span>
                                    <span><i class=\"bx bx-star\"></i></span>
                                    <span><i class=\"bx bx-star\"></i></span>
                                </div>
                                <a href=\"#\" class=\"px-2 font-rale font-size-14\">20,534 ratings | Rate</a>
                            </div>
                            <hr class=\"m-0\">

                            <!---    product price       -->
                            <table class=\"my-3\">
                                <tr class=\"font-rale font-size-14\">
                                    <td>M.R.P:</td>
                                    <td><strike>UGX 162000/=</strike></td>
                                </tr>
                                <tr class=\"font-rale font-size-14\">
                                    <td>Deal Price:</td>
                                    <td class=\"font-size-20 text-danger\">UGX <span><?php echo $product_price ?? 0; ?></span>/=<small class=\"text-dark font-size-12\">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                                </tr>
                                <tr class=\"font-rale font-size-14\">
                                    <td>You Save:</td>
                                    <td><span class=\"font-size-14 text-danger\">UGX 152000/=</span></td>
                                </tr>
                            </table>

                            <div id=\"policy\">
                                <div class=\"d-flex\">
                                    <div class=\"return text-center mr-5\">
                                        <div class=\" my-2 color-second\">
                                            <span class=\"bx bx-repost border p-3 rounded-pill\"></span>
                                        </div>
                                        <a href=\"#\" class=\"\">10 Days <br> Replacement</a>
                                    </div>
                                    <div class=\"return text-center mr-5\">
                                        <div class=\"font-size-20 my-2 color-second\">
                                            <span class=\"bx bxs-truck  border p-3 rounded-pill\"></span>
                                        </div>
                                        <a href=\"#\" class=\"\">Daily Tuition <br>Delivered</a>
                                    </div>
                                    <div class=\"return text-center mr-5\">
                                        <div class=\"font-size-20 my-2 color-second\">
                                            <span class=\"bx bx-check-double border p-3 rounded-pill\"></span>
                                        </div>
                                        <a href=\"#\" class=\"\">1 Year <br>Warranty</a>
                                    </div>
                                </div>
                            </div>
                            <!--    !policy -->
                            <hr>

                            <!-- order-details -->
                            <div id=\"order-details\" class=\"font-rale d-flex flex-column text-dark\">
                                <small>Delivery by : Mar 29 - Apr 1</small>
                                <small>Sold by <a href=\"#\">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                                <small><i class=\"fas fa-map-marker-alt color-primary\"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                            </div>
                            <!-- !order-details -->

                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <!-- color -->
                                    <div class=\"color my-3\">
                                        <div class=\"d-flex justify-content-between\">
                                            <h6 class=\"font-baloo\">Color:</h6>
                                            <div class=\"p-2 rounded-circle\" style=\"background-color:#ffd985;\"><button class=\"btn font-size-14\"></button></div>
                                            <div class=\"p-2 rounded-circle\" style=\"background-color:#00315a;\"><button class=\"btn font-size-14\"></button></div>
                                            <div class=\"p-2 rounded-circle\" style=\"background-color:#00a6c6;\"><button class=\"btn font-size-14\"></button></div>
                                        </div>
                                    </div>
                                    <!-- !color -->
                                </div>
                                <div class=\"col-6\">
                                    <!-- product qty section -->
                                    <div class=\"qty d-flex\">
                                        <h6 class=\"font-baloo\">Qty</h6>
                                        <div class=\"px-4 d-flex font-rale\">
                                            <button class=\"qty-up border bg-light\" data-id=\"pro1\"><i class=\"bx bxs-chevron-up\"></i></button>
                                            <input type=\"text\" data-id=\"pro1\" class=\"qty_input border px-2 w-50 bg-light\" disabled value=\"1\" placeholder=\"1\">
                                            <button data-id=\"pro1\" class=\"qty-down border bg-light\"><i class=\"bx bxs-chevron-down\"></i></button>
                                        </div>
                                    </div>
                                    <!-- !product qty section -->
                                </div>
                            </div>

                            <!-- size -->
                            <div class=\"size my-3\">
                                <h6 class=\"font-baloo\">Size :</h6>
                                <div class=\"d-flex justify-content-between w-75\">
                                    <div class=\"font-rubik border p-2\">
                                        <button class=\"btn p-0 font-size-14\">4GB RAM</button>
                                    </div>
                                    <div class=\"font-rubik border p-2\">
                                        <button class=\"btn p-0 font-size-14\">6GB RAM</button>
                                    </div>
                                    <div class=\"font-rubik border p-2\">
                                        <button class=\"btn p-0 font-size-14\">8GB RAM</button>
                                    </div>
                                </div>
                            </div>
                            <!-- !size -->


                        </div>

                        <div class=\"col-12\">
                            <h6 class=\"font-rubik\">Product Description</h6>
                            <hr>
                            <p class=\"font-rale font-size-14\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                            <p class=\"font-rale font-size-14\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                        </div>
                    </div>
                </div>
    ";
    echo $element;
}