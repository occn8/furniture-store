<?php
function checkout($productname, $productbrand, $productprice)
{
    $element = "
    
    <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
        <div>
            <h6 class=\"my-0\"><strong>$productname</strong></h6>
            <small class=\"text-muted\">sold by: $productbrand</small>
        </div>
        <span class=\"text-muted\">UGX <b>$productprice</b>/=</span>
    </li>
    ";
    echo $element;
}
