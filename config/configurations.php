<?php
session_start();

// $server = "sql113.epizy.com";
// $usrname = "epiz_27536347";
// $passwd = "ovnkMOBKduC";
// $dbname = "epiz_27536347_furstore";
// $connect = mysqli_connect($server, $usrname, $passwd, $dbname);
// $_SESSION['success'] = "";
$username = "";
$email    = "";
$errors = array();

$connect = mysqli_connect('localhost', 'root', '');

$createDB = "CREATE DATABASE IF NOT EXISTS furstore";
mysqli_query($connect, $createDB);

$useDB = "USE furstore";
mysqli_query($connect, $useDB);


$users = "CREATE TABLE IF NOT EXISTS users (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		password VARCHAR(50)
		)";
mysqli_query($connect, $users);

$pdts = "CREATE TABLE IF NOT EXISTS products (
		id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR (25) NOT NULL,
		product_type VARCHAR (25) NOT NULL,
		product_brand VARCHAR (25) NOT NULL,
        product_price FLOAT,
        product_image VARCHAR (100)
		)";
mysqli_query($connect, $pdts);

$products = "INSERT INTO `products` (id, product_name,product_type, product_brand, product_price, product_image)
	VALUES (1,'ARFLEX-Armchair', 'armchairs','ARFLEX',1799000,'/furniture-store/assets/products/armchairs/b_ARFLEX-Armchair-arflex.jpg'),
	(2,'nuvol-reflex','chaiselongues','nuvol',147000,'/furniture-store/assets/products/chaiselongues/2b_nuvol-reflex.jpg'),
	(3,'aqua-ezpeleta','cushions','ezpeleta',759000,'/furniture-store/assets/products/cushions/b_aqua-ezpeleta-division-comercial.jpg'),
	(4,'Maxalto','daybeds','Maxalto',459000,'/furniture-store/assets/products/daybeds/b_1-Maxalto-a-brand-of-B-B-Italia-Spa.jpg'),
	(5,'citizen-lowback','easychairs','citizen',459000,'/furniture-store/assets/products/easychairs/b_citizen-lowback-vitra.jpg'),
	(6,'armchair-calligaris','footstools','calligaris',459000,'/furniture-store/assets/products/footstools/b_armchair-calligaris.jpg'),
	(7,'JUNIOR-LOFT','kidssofas','LOFT',459000,'/furniture-store/assets/products/kidssofas/b_366-JUNIOR-LOFT.jpg'),
	(8,'beat-rs0212-andreu','poufs','andreu',459000,'/furniture-store/assets/products/poufs/b_beat-rs0212-andreu-world.jpg'),
	(9,'CLIPPER-Small-sofa','smallsofas','CLIPPER',459000,'/furniture-store/assets/products/smallsofas/b_CLIPPER-Small-sofa-Marelli.jpg'),
	(10,'beam-cassina','sofa','cassina',278000,'/furniture-store/assets/products/sofa/b_beam-cassina.jpg')";
mysqli_query($connect, $products);


if (isset($_POST['register_user'])) {
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$pass1 = mysqli_real_escape_string($connect, $_POST['password_1']);
	$pass2 = mysqli_real_escape_string($connect, $_POST['password_2']);
	if (empty($username)) {
		array_push($errors, "Username is Required");
	}
	if (empty($email)) {
		array_push($errors, "Email is Required");
	}
	if (empty($pass1)) {
		array_push($errors, "Password is Required");
	}
	if ($pass1 != $pass2) {
		array_push($errors, "Passwords Don't match");
	}
	if (count($errors) == 0) {
		$password = md5($pass1);
		$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
		mysqli_query($connect, $query);
		$_SESSION['username'] = $username;
		// $_SESSION['success'] = "Welcome";
		setcookie('user', $username, time() + (86400 * 2), "/");
		header('location: index.php');
	}
}


if (isset($_POST['signin_user'])) {
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);
	if (empty($email)) {
		array_push($errors, "Email Required");
	}
	if (empty($password)) {
		array_push($errors, "Password Required");
	}
	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($connect, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			setcookie('user', $username, time() + (86400 * 2), "/");
			header('location: ../index.php');
		} else {
			array_push($errors, "Incorrect combination");
		}
	}
}

if (isset($_POST['add'])) {
	/// print_r($_POST['product_id']);
	if (isset($_SESSION['cart'])) {

		$item_array_id = array_column($_SESSION['cart'], "product_id");

		if (in_array($_POST['product_id'], $item_array_id)) {
			echo "<script>alert('Product is already added in the cart..!')</script>";
			echo "<script>window.location = 'index.php'</script>";
		} else {

			$count = count($_SESSION['cart']);
			$item_array = array(
				'product_id' => $_POST['product_id']
			);

			$_SESSION['cart'][$count] = $item_array;
		}
	} else {

		$item_array = array(
			'product_id' => $_POST['product_id']
		);

		// Create new session variable
		$_SESSION['cart'][0] = $item_array;
		print_r($_SESSION['cart']);
	}
}

if (isset($_POST['add_product'])) {
	$pdtname = mysqli_real_escape_string($connect, $_POST['pdtname']);
	$pdtdescription = mysqli_real_escape_string($connect, $_POST['pdtdescription']);
	$batchNo = mysqli_real_escape_string($connect, $_POST['batchNo']);
	$store = mysqli_real_escape_string($connect, $_POST['store']);
	if (empty($pdtname)) {
		array_push($errors, "Name required");
	}
	if (empty($pdtdescription)) {
		array_push($errors, "Description Required");
	}
	if (empty($store)) {
		array_push($errors, "Store Required");
	}
	if (count($errors) == 0) {
		$query = "INSERT INTO products (pdtname, pdtdescription, batchNo, store, insertdate ) 
					  VALUES('$pdtname','$pdtdescription', '$batchNo', '$store', NOW())";
		mysqli_query($connect, $query);
		header('location: ../index.php');
	}
}

$querryinventory = "SELECT * FROM products";
$querryarmchairs = "SELECT * FROM products WHERE product_type='armchairs'";
$querrychaiselongues = "SELECT * FROM products WHERE product_type='chaiselongues'";
$querrycushions = "SELECT * FROM products WHERE product_type='cushions'";
$querrydaybeds = "SELECT * FROM products WHERE product_type='daybeds'";
$querryEasychairs = "SELECT * FROM products WHERE product_type='Easychairs'";
$querryFootstools = "SELECT * FROM products WHERE product_type='Footstools'";
$querryPoufs = "SELECT * FROM products WHERE product_type='Poufs'";
$querrySmallsofas = "SELECT * FROM products WHERE product_type='Smallsofas'";
$querrySofa = "SELECT * FROM products WHERE product_type='Sofa'";


// $result = $connect->query($querryinventory);
// if ($result->num_rows > 0) {
// } else {
// }


if (isset($_POST['update_product'])) {
	$oldstore = mysqli_real_escape_string($connect, $_POST['currentstore']);
	$newstore = mysqli_real_escape_string($connect, $_POST['newstore']);
	$id = mysqli_real_escape_string($connect, $_POST['id']);
	if (empty($id)) {
		array_push($errors, "ID required");
	}
	if (empty($oldstore)) {
		array_push($errors, "Current store Required!");
	}
	if (empty($newstore)) {
		array_push($errors, "New store Required!");
	}
	if (count($errors) == 0) {
		$query = "UPDATE products SET store='$newstore' WHERE id='$id'";
		mysqli_query($connect, $query);
		header('location: ../index.php');
	}
}

if (isset($_POST['delete_product'])) {
	$id = mysqli_real_escape_string($connect, $_POST['id']);
	if (empty($id)) {
		array_push($errors, "Product ID required");
	}
	if (count($errors) == 0) {
		$query = "DELETE FROM products WHERE id='$id'";
		mysqli_query($connect, $query);
		header('location: ../index.php');
	}
}

// $searchq = "SELECT * FROM products WHERE product_name LIKE '%" . $_POST['name'] . "%'";
// $searchq = "SELECT * FROM users WHERE name LIKE '{$_POST['query']}%' LIMIT 100";
