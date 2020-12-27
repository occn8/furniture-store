<?php
require_once('../config/configurations.php');

$search = "SELECT * FROM products WHERE product_name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($connect, $search);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "
		          <h1 class=\"text-center\">".$row['product_name']."</h1>
		       ";
	}
}
else{
	echo "<div>0 result's found</div>";
}

?>