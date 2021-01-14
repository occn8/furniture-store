<?php
include('configurations.php');

$s1=$_REQUEST["n"];
$select_query="select * from products where product_name like '%".$s1."%'";

$result = $connect->query($select_query);
$s="";
while ($row = mysqli_fetch_assoc($result))
{
	$s=$s."
	<a class='link-p-colr' href='details.php?product_id=".$row['product_id']."'>
		<div class='live-outer'>
            <div class='live-im px-2'>
            	<img src='".$row['product_image']."' height='50px'/>
            </div>
            <div class='live-product-det'>
            	<div class='live-product-name'>
                	<p><strong>".$row['product_name']."</strong></p>
                </div>
                <div class='live-product-price'>
					<div class='live-product-price-text'><p>by: ".$row['product_brand']."</p></div>
                </div>
            </div>
        </div>
	</a>
	"	;
}
echo $s;
