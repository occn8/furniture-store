<?php
require_once('config/configurations.php');
require_once('widgets/cartelement.php');
require_once('widgets/checkout_cart.php');

if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['wishlist'] as $key => $value) {
            if ($value["product_id"] == $_GET['id']) {
                unset($_SESSION['wishlist'][$key]);
                echo "<script>window.location = 'wishlist.php'</script>";
            }
        }
    }
}
?>

<?php
$currentpage = 'wishlist';
include('widgets/header.php');
?>

<main>
    <div class="container-fluid">
        <div class="row px-5 py-4">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h4 class="text-center py-3"><b>My Wishlist</b></h4>
                    <?php

                    if (isset($_SESSION['wishlist'])) {
                        $product_id = array_column($_SESSION['wishlist'], 'product_id');

                        $result = $connect->query($querrypdts);
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($product_id as $id) {
                                if ($row['product_id'] == $id) {
                                    cartElement($row['product_image'], $row['product_name'], $row['product_brand'], $row['product_price'], $row['product_id']);
                                }
                            }
                        }
                    } else {
                        echo "<center><h5 class=\"text-warning\">No Items in wishlist</h5></center>";
                    }

                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $connect->query($querrypdts);
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($product_id as $id) {
                                if ($row['product_id'] == $id) {
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    } else {
                    }

                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                <div class="pt-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-black"><strong>Details of Cart</strong></span>
                        <span class="badge badge-pill"><img src="assets/cart.png" alt="">
                            <div class="cart_count ">
                                <?php

                                if (isset($_SESSION['cart'])) {
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" class=\"text-success \">$count</span>";
                                } else {
                                    echo "<span id=\"cart_count\" class=\"text-success\">0</span>";
                                }

                                ?>
                            </div>
                        </span>
                    </h4>
                    <ul class="list-group mb-3">
                        <?php

                        $total = 0;
                        if (isset($_SESSION['cart'])) {
                            $product_id = array_column($_SESSION['cart'], 'product_id');

                            $result = $connect->query($querrypdts);
                            while ($row = mysqli_fetch_assoc($result)) {
                                foreach ($product_id as $id) {
                                    if ($row['product_id'] == $id) {
                                        checkout($row['product_name'], $row['product_brand'], $row['product_price']);
                                        $total = $total + (int)$row['product_price'];
                                    }
                                }
                            }
                        } else {
                            echo "<center><h5>Cart is Empty</h5></center>";
                        }

                        ?>

                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Total (UGX)</strong></span>
                            <strong><?php echo $total; ?>/=</strong>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <section></section>
</main>

<?php
include('widgets/footer.php');
?>