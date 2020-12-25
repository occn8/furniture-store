<?php

// session_start();

require_once('config/configurations.php');
require_once('config/component.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/boxicons/css/boxicons.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/boxicons.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="icon" href="../assets/favicon.ico">
    <title>Fur-Store Home</title>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-md navbar-light bg-light main-menu" style="box-shadow:none">
            <div class="container px-2">

                <button type="button" id="sidebarCollapse" class="btn btn-link d-block d-md-none">
                    <i class="bx bx-menu icon-single color-primary"></i>
                </button>

                <a class="navbar-brand" href="#">
                    <h4 class="font-weight-bold">Fur-Store</h4>
                </a>

                <ul class="navbar-nav ml-auto d-block d-md-none">
                    <li class="nav-item">
                        <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
                                    <div class="cart_count "><span>3</span></div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text"><a href="#">Cart</a></div>
                                    <div class="cart_price">$185</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="collapse navbar-collapse">
                    <form class="form-inline my-2 my-lg-0 mx-auto">
                        <input class="form-control" type="search" placeholder="Search for furniture..." aria-label="Search">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="bx bx-search"></i></button>
                    </form>

                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
                                        <div class="cart_count "><span>3</span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="#">Cart</a></div>
                                        <div class="cart_price">$185</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item ml-md-3">
                            <a class="btn btn-primary login-up" href="#"><i class="bx bxs-user-circle mr-1 bx-sm"></i> Log In /
                                Register</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <nav class="navbar navbar-expand-md navbar-light bg-light sub-menu">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="site/collection.php">Collection</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="site/latest.php">New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Catalogue</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="site/about.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Delivery Information</a>
                                <a class="dropdown-item" href="#">Privacy Policy</a>
                                <a class="dropdown-item" href="#">Terms & Conditions</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="site/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="search-bar d-block d-md-none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form class="form-inline mb-3 mx-auto">
                            <input class="form-control" type="search" placeholder="Search for furniture..." aria-label="Search">
                            <button class="btn btn-primary" type="submit"><i class="bx bx-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-10 pl-0">
                            <a class="btn btn-primary" href="#"><i class="bx bxs-user-circle mr-1"></i> Log In</a>
                        </div>

                        <div class="col-2 text-left">
                            <button type="button" id="sidebarCollapseX" class="btn btn-link">
                                <i class="bx bx-x icon-single"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="list-unstyled components links">
                <li class="active">
                    <a href="#"><i class="bx bx-home mr-3"></i> Home</a>
                </li>
                <li>
                    <a href="site/collection.php"><i class="bx bx-carousel mr-3"></i> Collection</a>
                </li>
                <li>
                    <a href="site/latest.php"><i class="bx bx-book-open mr-3"></i> New Arrivals</a>
                </li>
                <li>
                    <a href="#"><i class="bx bx-crown mr-3"></i> Catalogue</a>
                </li>
                <li>
                    <a href="site/about.php"><i class="bx bx-phone mr-3"></i> About Us</a>
                </li>
                <li>
                    <a href="site/contact.php"><i class="bx bx-phone mr-3"></i> Contact Us</a>
                </li>
            </ul>

            <h6 class="text-uppercase mb-1">Categories</h6>
            <ul class="list-unstyled components mb-3">
                <li>
                    <a href="#">Armchairs</a>
                </li>
                <li>
                    <a href="#">Chaise longues</a>
                </li>
                <li>
                    <a href="#">Cushions</a>
                </li>
                <li>
                    <a href="#">Daybeds</a>
                </li>
                <li>
                    <a href="#">Easychairs</a>
                </li>
                <li>
                    <a href="#">Footstools</a>
                </li>
                <li>
                    <a href="#">Poufs</a>
                </li>
                <li>
                    <a href="#">Smallsofas</a>
                </li>
                <li>
                    <a href="#">Sofa</a>
                </li>
            </ul>

            <ul class="social-icons">
                <li><a href="#" target="_blank" title=""><i class="bx bxl-github"></i></a></li>
                <li><a href="#" target="_blank" title=""><i class="bx bxl-twitter"></i></a></li>
                <li><a href="#" target="_blank" title=""><i class="bx bxl-facebook"></i></a></li>
                <li><a href="#" target="_blank" title=""><i class="bx bxl-instagram"></i></a></li>
            </ul>

        </nav>
    </header>

    <main>


        <section id="top-sale">
            <div class="container py-5">
                <h4 class="text-center color-primary ">Top Sales</h4>
                <div class="owl-carousel owl-theme">
                    <?php
                    $result = $connect->query($querryinventory);
                    while ($row = mysqli_fetch_assoc($result)) {
                        component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                    }
                    ?>
                </div>
            </div>
        </section>

        <section id="top-sale">
            <div class="container py-5">
                <h4 class="text-center color-primary ">Best Deals</h4>
                <div class="owl-carousel owl-theme">
                    <?php
                    $result = $connect->query($querryinventory);
                    while ($row = mysqli_fetch_assoc($result)) {
                        component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                    }
                    ?>
                </div>
            </div>
        </section>

        <section></section>
        <section></section>
        <section></section>
        <section class="btt"></section>
    </main>

    <footer class="pt-4 text-center my-md-5 pt-md-5">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4">
                    <h5>QUICK LINKS</h5>
                    <ul class="list-unstyled text-small">

                        <li><a class="text-muted" href="#">Sell online</a></li>
                        <li><a class="text-muted" href="#">Features</a></li>
                        <li><a class="text-muted" href="#">Shopping cart</a></li>
                        <li><a class="text-muted" href="#">Mobile commerce</a></li>
                        <li><a class="text-muted" href="#">Dropshipping</a></li>
                        <li><a class="text-muted" href="#">Development</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4">
                    <h5>CONTACT INFO</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Ntinda valley, 21st st, Kampala, UGANDA</a></li>
                        <li><a class="text-muted" href="#">+256 7887 06532</a></li>
                        <li><a class="text-muted" href="#">elitefurniture@furstore.com</a></li>
                        <li><a class="text-muted" href="#">SUBSCRIBE</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Team</a></li>
                        <li><a class="text-muted" href="#">Locations</a></li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>


            <p class="text-center">
                Copyright ©<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | <a href="#" target="_app">Fur-Store</a>
            </p>

        </div>
    </footer>

    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/scripts/popper.min.js"></script>
    <script src="assets/scripts/sidebar.js"></script>
    <script src="assets/scripts/owl.carousel.min.js"></script>
    <script src="assets/scripts/isotope.pkgd.min.js"></script>
    <script src="assets/scripts/index.js"></script>

</body>

</html>