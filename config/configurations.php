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
		-- created datetime NOT NULL,
 		modified datetime NOT NULL,	
        product_image VARCHAR (100)
		)";
mysqli_query($connect, $pdts);

$products = "INSERT INTO `products` (id, product_name,product_type, product_brand, product_price, modified, product_image)
	VALUES (1,'repa-Armchair', 'armchairs','ARFLEX',1799000,NOW(),'/furniture-store/assets/products/armchairs/1.jpg'),
	(2,'arlexa-Armchair', 'armchairs','ASTON',1799000,NOW(),'/furniture-store/assets/products/armchairs/2.jpg'),
	(3,'cavana-Armchair', 'armchairs','ARFLEX',1799000,NOW(),'/furniture-store/assets/products/armchairs/3.jpg'),
	(4,'palsa-Armchair', 'armchairs','FELTRI',1799000,NOW(),'/furniture-store/assets/products/armchairs/4.jpg'),
	(5,'silica-Armchair', 'armchairs','JANET',1799000,NOW(),'/furniture-store/assets/products/armchairs/5.jpg'),
	(6,'scooper-Armchair', 'armchairs','LUDWIG',1799000,NOW(),'/furniture-store/assets/products/armchairs/6.jpg'),
	(7,'relay-Armchair', 'armchairs','PHOENIX',1799000,NOW(),'/furniture-store/assets/products/armchairs/7.jpg'),
	(8,'agua-Armchair', 'armchairs','ARFLEX',1799000,NOW(),'/furniture-store/assets/products/armchairs/8.jpg'),
	(9,'haria-Armchair', 'armchairs','FELTRI',1799000,NOW(),'/furniture-store/assets/products/armchairs/9.jpg'),
	(10,'nadly-Armchair', 'armchairs','LOFT',1799000,NOW(),'/furniture-store/assets/products/armchairs/10.jpg'),
	(11,'euro-Armchair', 'armchairs','PHOENIX',1799000,NOW(),'/furniture-store/assets/products/armchairs/11.jpg'),
	(12,'nuvol-reflex','chaiselongues','ASTON',147000,NOW(),'/furniture-store/assets/products/chaiselongues/1.jpg'),
	(13,'loie-reflex','chaiselongues','LOFT',147000,NOW(),'/furniture-store/assets/products/chaiselongues/2.jpg'),
	(14,'jeit-reflex','chaiselongues','ARFLEX',147000,NOW(),'/furniture-store/assets/products/chaiselongues/3.jpg'),
	(15,'posto-reflex','chaiselongues','LOFT',147000,NOW(),'/furniture-store/assets/products/chaiselongues/4.jpg'),
	(16,'guna-reflex','chaiselongues','ASTON',147000,NOW(),'/furniture-store/assets/products/chaiselongues/5.jpg'),
	(17,'nuvol-mee','chaiselongues','ASTON',147000,NOW(),'/furniture-store/assets/products/chaiselongues/6.jpg'),
	(18,'yret-reflex','chaiselongues','FELTRI',147000,NOW(),'/furniture-store/assets/products/chaiselongues/7.jpg'),
	(19,'placc-reflex','chaiselongues','JANET',147000,NOW(),'/furniture-store/assets/products/chaiselongues/8.jpg'),
	(20,'nuvol-reflex','chaiselongues','FELTRI',147000,NOW(),'/furniture-store/assets/products/chaiselongues/9.jpg'),
	(21,'gila-reflex','chaiselongues','PHOENIX',147000,NOW(),'/furniture-store/assets/products/chaiselongues/10.jpg'),
	(22,'handre-reflex','chaiselongues','CLIPPER',147000,NOW(),'/furniture-store/assets/products/chaiselongues/11.jpg'),
	(23,'muk-reflex','chaiselongues','LUDWIG',147000,NOW(),'/furniture-store/assets/products/chaiselongues/12.jpg'),
	(24,'shaty-reflex','chaiselongues','PHOENIX',147000,NOW(),'/furniture-store/assets/products/chaiselongues/13.jpg'),
	(25,'yunng-ezta','cushions','LOFT',759000,NOW(),'/furniture-store/assets/products/cushions/1.jpg'),
	(26,'zenca-eeta','cushions','LUDWIG',759000,NOW(),'/furniture-store/assets/products/cushions/2.jpg'),
	(27,'aqua-ezta','cushions','FELTRI',759000,NOW(),'/furniture-store/assets/products/cushions/3.jpg'),
	(28,'huncho-ezta','cushions','ARFLEX',759000,NOW(),'/furniture-store/assets/products/cushions/4.jpg'),
	(29,'muchi-ezta','cushions','ASTON',759000,NOW(),'/furniture-store/assets/products/cushions/5.jpg'),
	(30,'cani-ezta','cushions','FELTRI',759000,NOW(),'/furniture-store/assets/products/cushions/6.jpg'),
	(31,'pust-ezta','cushions','LOFT',759000,NOW(),'/furniture-store/assets/products/cushions/7.jpg'),
	(32,'vanau-ezta','cushions','ASTON',759000,NOW(),'/furniture-store/assets/products/cushions/8.jpg'),
	(33,'triue-ezta','cushions','FELTRI',759000,NOW(),'/furniture-store/assets/products/cushions/9.jpg'),
	(34,'glue-ezta','cushions','JANET',759000,NOW(),'/furniture-store/assets/products/cushions/10.jpg'),
	(35,'regea-ezta','cushions','ASTON',759000,NOW(),'/furniture-store/assets/products/cushions/11.jpg'),
	(36,'Maxalto','daybeds','ARFLEX',459000,NOW(),'/furniture-store/assets/products/daybeds/1.jpg'),
	(37,'alto','daybeds','LOFT',459000,NOW(),'/furniture-store/assets/products/daybeds/2.jpg'),
	(38,'pronto','daybeds','ASTON',459000,NOW(),'/furniture-store/assets/products/daybeds/3.jpg'),
	(39,'chinao','daybeds','LUDWIG',459000,NOW(),'/furniture-store/assets/products/daybeds/4.jpg'),
	(40,'indiana','daybeds','ASTON',459000,NOW(),'/furniture-store/assets/products/daybeds/5.jpg'),
	(41,'seema','daybeds','CLIPPER',459000,NOW(),'/furniture-store/assets/products/daybeds/6.jpg'),
	(42,'planta','daybeds','FELTRI',459000,NOW(),'/furniture-store/assets/products/daybeds/7.jpg'),
	(43,'Maxalto','daybeds','PHOENIX',459000,NOW(),'/furniture-store/assets/products/daybeds/8.jpg'),
	(44,'senteni','daybeds','LOFT',459000,NOW(),'/furniture-store/assets/products/daybeds/9.jpg'),
	(45,'gathea','daybeds','JANET',459000,NOW(),'/furniture-store/assets/products/daybeds/10.jpg'),
	(46,'millian','daybeds','PHOENIX',459000,NOW(),'/furniture-store/assets/products/daybeds/11.jpg'),
	(47,'citizen-lowback','easychairs','LUDWIG',459000,NOW(),'/furniture-store/assets/products/easychairs/1.jpg'),
	(48,'zen-back','easychairs','PHOENIX',459000,NOW(),'/furniture-store/assets/products/easychairs/2.jpg'),
	(49,'hugu-low','easychairs','LUDWIG',459000,NOW(),'/furniture-store/assets/products/easychairs/3.jpg'),
	(50,'juino-low','easychairs','FELTRI',459000,NOW(),'/furniture-store/assets/products/easychairs/4.jpg'),
	(51,'runtown-low','easychairs','CLIPPER',459000,NOW(),'/furniture-store/assets/products/easychairs/5.jpg'),
	(52,'plut-low','easychairs','LOFT',459000,NOW(),'/furniture-store/assets/products/easychairs/6.jpg'),
	(53,'citizen-low','easychairs','ASTON',459000,NOW(),'/furniture-store/assets/products/easychairs/7.jpg'),
	(54,'yeast-yut','easychairs','ASTON',459000,NOW(),'/furniture-store/assets/products/easychairs/8.jpg'),
	(55,'gyna','easychairs','JANET',459000,NOW(),'/furniture-store/assets/products/easychairs/9.jpg'),
	(56,'mewew','easychairs','FELTRI',459000,NOW(),'/furniture-store/assets/products/easychairs/10.jpg'),
	(57,'rito','easychairs','JANET',459000,NOW(),'/furniture-store/assets/products/easychairs/11.jpg'),
	(58,'armchair-calligaris','footstools','PHOENIX',459000,NOW(),'/furniture-store/assets/products/footstools/1.jpg'),
	(59,'calligaris','footstools','PHOENIX',459000,NOW(),'/furniture-store/assets/products/footstools/2.jpg'),
	(60,'ligaris','footstools','FELTRI',459000,NOW(),'/furniture-store/assets/products/footstools/3.jpg'),
	(61,'armchair-v','footstools','LOFT',459000,NOW(),'/furniture-store/assets/products/footstools/4.jpg'),
	(62,'ahulla','footstools','LOFT',459000,NOW(),'/furniture-store/assets/products/footstools/5.jpg'),
	(63,'garifa','footstools','ASTON',459000,NOW(),'/furniture-store/assets/products/footstools/6.jpg'),
	(64,'sinor','footstools','ASTON',459000,NOW(),'/furniture-store/assets/products/footstools/7.jpg'),
	(65,'calligaris','footstools','CLIPPER',459000,NOW(),'/furniture-store/assets/products/footstools/8.jpg'),
	(66,'pluton','footstools','ASTON',459000,NOW(),'/furniture-store/assets/products/footstools/9.jpg'),
	(67,'calligaris','footstools','LUDWIG',459000,NOW(),'/furniture-store/assets/products/footstools/10.jpg'),
	(68,'gitti','footstools','JANET',459000,NOW(),'/furniture-store/assets/products/footstools/11.jpg'),
	(69,'caigaris','footstools','JANET',459000,NOW(),'/furniture-store/assets/products/footstools/12.jpg'),
	(70,'ruit','footstools','LUDWIG',459000,NOW(),'/furniture-store/assets/products/footstools/13.jpg'),
	(71,'junior','kidssofas','ARFLEX',459000,NOW(),'/furniture-store/assets/products/kidssofas/1.jpg'),
	(72,'hague','kidssofas','JANET',459000,NOW(),'/furniture-store/assets/products/kidssofas/2.jpg'),
	(73,'menus','kidssofas','LOFT',459000,NOW(),'/furniture-store/assets/products/kidssofas/3.jpg'),
	(74,'gloriues','kidssofas','FELTRI',459000,NOW(),'/furniture-store/assets/products/kidssofas/4.jpg'),
	(75,'haddle','kidssofas','ASTON',459000,NOW(),'/furniture-store/assets/products/kidssofas/5.jpg'),
	(76,'mickto','kidssofas','PHOENIX',459000,NOW(),'/furniture-store/assets/products/kidssofas/6.jpg'),
	(77,'hague','kidssofas','PHOENIX',459000,NOW(),'/furniture-store/assets/products/kidssofas/7.jpg'),
	(78,'striil','kidssofas','LUDWIG',459000,NOW(),'/furniture-store/assets/products/kidssofas/8.jpg'),
	(79,'launger','kidssofas','ASTON',459000,NOW(),'/furniture-store/assets/products/kidssofas/9.jpg'),
	(80,'tudewo','kidssofas','LOFT',459000,NOW(),'/furniture-store/assets/products/kidssofas/10.jpg'),
	(81,'kingo','kidssofas','ASTON',459000,NOW(),'/furniture-store/assets/products/kidssofas/11.jpg'),
	(82,'yesyo','kidssofas','LUDWIG',459000,NOW(),'/furniture-store/assets/products/kidssofas/12.jpg'),
	(83,'beat-andreu','poufs','ARFLEX',459000,NOW(),'/furniture-store/assets/products/poufs/1.jpg'),
	(84,'andreu','poufs','JANET',459000,NOW(),'/furniture-store/assets/products/poufs/2.jpg'),
	(85,'hureu','poufs','LUDWIG',459000,NOW(),'/furniture-store/assets/products/poufs/3.jpg'),
	(86,'beat-meme','poufs','CLIPPER',459000,NOW(),'/furniture-store/assets/products/poufs/4.jpg'),
	(87,'beest','poufs','ASTON',459000,NOW(),'/furniture-store/assets/products/poufs/5.jpg'),
	(88,'juana','poufs','FELTRI',459000,NOW(),'/furniture-store/assets/products/poufs/6.jpg'),
	(89,'beat-andreu','poufs','PHOENIX',459000,NOW(),'/furniture-store/assets/products/poufs/7.jpg'),
	(90,'canana','poufs','FELTRI',459000,NOW(),'/furniture-store/assets/products/poufs/8.jpg'),
	(91,'afro-sty','poufs','PHOENIX',459000,NOW(),'/furniture-store/assets/products/poufs/9.jpg'),
	(92,'pampam','poufs','PHOENIX',459000,NOW(),'/furniture-store/assets/products/poufs/10.jpg'),
	(93,'gabama','poufs','ARFLEX',459000,NOW(),'/furniture-store/assets/products/poufs/11.jpg'),
	(94,'sileio','smallsofas','JANET',459000,NOW(),'/furniture-store/assets/products/smallsofas/1.jpg'),
	(95,'humba','smallsofas','LUDWIG',459000,NOW(),'/furniture-store/assets/products/smallsofas/2.jpg'),
	(96,'CLIPPER','smallsofas','PHOENIX',459000,NOW(),'/furniture-store/assets/products/smallsofas/3.jpg'),
	(97,'styola','smallsofas','ASTON',459000,NOW(),'/furniture-store/assets/products/smallsofas/4.jpg'),
	(98,'mandem-seh','smallsofas','ASTON',459000,NOW(),'/furniture-store/assets/products/smallsofas/5.jpg'),
	(99,'glopers','smallsofas','CLIPPER',459000,NOW(),'/furniture-store/assets/products/smallsofas/6.jpg'),
	(100,'nano-gu','smallsofas','FELTRI',459000,NOW(),'/furniture-store/assets/products/smallsofas/7.jpg'),
	(101,'gnomwe','smallsofas','CLIPPER',459000,NOW(),'/furniture-store/assets/products/smallsofas/8.jpg'),
	(102,'naomi','smallsofas','ARFLEX',459000,NOW(),'/furniture-store/assets/products/smallsofas/9.jpg'),
	(103,'cliapa','smallsofas','ARFLEX',459000,NOW(),'/furniture-store/assets/products/smallsofas/10.jpg'),
	(104,'stealo','smallsofas','CLIPPER',459000,NOW(),'/furniture-store/assets/products/smallsofas/11.jpg'),
	(105,'beam-cassina','sofa','JANET',278000,NOW(),'/furniture-store/assets/products/sofa/1.jpg'),
	(106,'cassina','sofa','PHOENIX',278000,NOW(),'/furniture-store/assets/products/sofa/2.jpg'),
	(107,'boom-cassina','sofa','LUDWIG',278000,NOW(),'/furniture-store/assets/products/sofa/3.jpg'),
	(108,'ssina','sofa','JANET',278000,NOW(),'/furniture-store/assets/products/sofa/4.jpg'),
	(109,'beam-cassina','sofa','ASTON',278000,NOW(),'/furniture-store/assets/products/sofa/5.jpg'),
	(110,'beam-cassina','sofa','FELTRI',278000,NOW(),'/furniture-store/assets/products/sofa/6.jpg'),
	(111,'palas','sofa','LOFT',278000,NOW(),'/furniture-store/assets/products/sofa/7.jpg'),
	(112,'beam-cassina','sofa','JANET',278000,NOW(),'/furniture-store/assets/products/sofa/8.jpg'),
	(113,'hui-ina','sofa','PHOENIX',278000,NOW(),'/furniture-store/assets/products/sofa/9.jpg'),
	(114,'tanna','sofa','PHOENIX',278000,NOW(),'/furniture-store/assets/products/sofa/10.jpg'),
	(115,'culliot','sofa','CLIPPER',278000,NOW(),'/furniture-store/assets/products/sofa/11.jpg'),
	(116,'be-maa','sofa','ARFLEX',278000,NOW(),'/furniture-store/assets/products/sofa/12.jpg'),
	(117,'bestos','sofa','CLIPPER',278000,NOW(),'/furniture-store/assets/products/sofa/13.jpg'),
	(118,'rallyo','sofa','ARFLEX',278000,NOW(),'/furniture-store/assets/products/sofa/14.jpg')";
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
	//  print_r($_POST['product_id']);
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
			header('location: cart.php');
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

$querrypdts = "SELECT * FROM products";
$querryarmchairs = "SELECT * FROM products WHERE product_type='armchairs'";
$querrychaiselongues = "SELECT * FROM products WHERE product_type='chaiselongues'";
$querrycushions = "SELECT * FROM products WHERE product_type='cushions'";
$querrydaybeds = "SELECT * FROM products WHERE product_type='daybeds'";
$querryEasychairs = "SELECT * FROM products WHERE product_type='Easychairs'";
$querryFootstools = "SELECT * FROM products WHERE product_type='Footstools'";
$querryKidssofas = "SELECT * FROM products WHERE product_type='kidssofas'";
$querryPoufs = "SELECT * FROM products WHERE product_type='Poufs'";
$querrySmallsofas = "SELECT * FROM products WHERE product_type='Smallsofas'";
$querrySofa = "SELECT * FROM products WHERE product_type='Sofa'";


$result = $connect->query($querrypdts);
if ($result->num_rows > 0) {
} else {
}


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
