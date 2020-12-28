<?php
include('configurations.php');

$s1=$_REQUEST["n"];
$select_query="select * from products where product_name like '%".$s1."%'";

$result = $connect->query($select_query);
$s="";
while ($row = mysqli_fetch_assoc($result))
{
	$s=$s."
	<a class='link-p-colr' href='details.php?product=".$row['id']."'>
		<div class='live-outer'>
            	<div class='live-im'>
                	<img src='".$row['product_image']."' height='50px'/>
                </div>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	<p>".$row['product_name']."</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>weeee</p></div>
                    </div>
                </div>
            </div>
	</a>
	"	;
}
echo $s;
