<?php
require_once('config/configurations.php');
require_once('widgets/component.php');

if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["product_id"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                // echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}
?>

<?php
$currentpage = 'cart';
include('widgets/header.php');
?>

<main>
    <div class="container-fluid">
        <div class="row px-5 py-4">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h4 class="text-center py-3"><b>My Shopping Cart</b></h4>

                    <?php

                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $connect->query($querryinventory);
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($product_id as $id) {
                                if ($row['id'] == $id) {
                                    cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    } else {
                        echo "<h5>Cart is Empty</h5>";
                    }

                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            } else {
                                echo "<h6>Price (0 items)</h6>";
                            }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>UGX <b><?php echo $total; ?></b>/=</h6>
                            <h6 class="text-success"><i class="bx bx-check-double"></i> FREE</h6>
                            <hr>
                            <h6>UGX <b><?php echo $total; ?></b>/=</h6>
                        </div>
                        <div class="col-md-12 text-center py-2">
                            <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                        </div>
                        <br>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section></section>
</main>

<?php
include('widgets/footer.php');
?>