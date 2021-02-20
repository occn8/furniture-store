<?php
require_once('config/configurations.php');
// require_once('widgets/detail.php');
?>

<?php
$currentpage = 'admin';
include('widgets/header.php');
// require_once('config/user_detail.php');

?>
<main>

    <div class="alert alert-warning alert-dismissible fade show" style="position:fixed;bottom:0px;width:100%;" role="alert">
        <strong>
            <?php
            if (isset($_SESSION['username'])) {
                echo "Hey " . $_SESSION['username'] . "!";
            }
            ?></strong> Welcome To Uganda Airlines Official Website
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class=" py-4">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-1">
                    <h1 class=" col-md-3 col-lg-2 mr-0 px-3 prim">Admin</h1>
                    <ul class="nav flex-column">
                        <div class="border-bottom py-2"></div>

                        <li class="nav-item">
                            <a class="nav-link" href="#tutorials">
                                <span data-feather=""></span> All Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#courses">
                                <span data-feather=""></span> Insert Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#timetable">
                                <span data-feather=""></span> Update Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#timetable">
                                <span data-feather=""></span> Delete Product
                            </a>
                        </li>
                        <div class="border-bottom py-2"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="#tutorials">
                                <span data-feather=""></span> All Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tutorials">
                                <span data-feather=""></span> Add User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tutorials">
                                <span data-feather=""></span> Remove User
                            </a>
                        </li>
                    </ul>



                </div>
            </nav>
            <main class="col-md-9 col-lg-10">
                <div class="container" id="allproducts">
                    <h3><b>All products in store</b></h3>
                    <table id="t98">
                        <tr>
                            <th>
                                <h4>Product_id</h4>
                            </th>
                            <th>
                                <h4>Product Name</h4>
                            </th>
                            <th>
                                <h4>Product Type</h4>
                            </th>
                            <th>
                                <h4>Product Brand</h4>
                            </th>
                            <th>
                                <h4>Product Price</h4>
                            </th>
                            <th>
                                <h4>Modified</h4>
                            </th>
                            <th>
                                <h4>Product Image</h4>
                            </th>
                        </tr>
                        <?php foreach ($result as $pdt) : ?>
                            <tr>
                                <td><?php echo $pdt['product_id']; ?></td>
                                <td><?php echo $pdt['product_name']; ?></td>
                                <td><?php echo $pdt['product_type']; ?></td>
                                <td><?php echo $pdt['product_brand']; ?></td>
                                <td><?php echo $pdt['product_price']; ?></td>
                                <td><?php echo $pdt['modified']; ?></td>
                                <td><?php echo $pdt['product_image']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <br>

                </div>
            </main>
        </div>
    </div>


</main>

<script src="assets/scripts/validate.js"></script>

<?php
include('widgets/footer.php');
?>