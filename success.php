<?php
require_once('config/configurations.php');
require_once('widgets/checkout_cart.php');
?>

<?php
$currentpage = 'success';
include('widgets/header.php');
?>

<main>
    <section>
        <div class="container px-4">
            <div class="py-5 text-center">
                <h2 class="text-success">Your order placed successfully</h2>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
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
                            <span>Total (UGX)</span>
                            <strong><?php echo $total; ?>/=</strong>
                        </li>
                    </ul>

                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3"><strong>Details of Customer</strong></h4>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for=""><strong>First name: </strong></label>
                                <label for="">my names</label>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for=""><strong>Last name: </strong></label>
                                <label for="">my last name</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for=""><strong>Username: </strong></label>
                            <label for="">Username: </label>
                        </div>

                        <div class="mb-3">
                            <label for=""><strong>Email: </strong></label>
                            <label for="">Username@asf.ss </label>
                        </div>

                        <div class="mb-3">
                            <label for=""><strong>Address: </strong></label>
                            <label for="">Address</label>
                        </div>

                        <div class="mb-3">
                            <label for=""><strong>Country: </strong></label>
                            <label for="">Uganda</label>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>District: </strong></label>
                            <label for="">Entebbe</label>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Zip code: </strong></label>
                            <label for="">0000</label>
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3"><strong>Details of Payment</strong></h4>
                        <div class="mb-3">
                            <label for=""><strong>paymentMethod: </strong></label>
                            <label for="">Credit card</label>
                        </div>

                        <div class="mb-3">
                            <label for=""><strong>Name on card: </strong></label>
                            <label for="">hug blaughhs</label>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Credit card number: </strong></label>
                            <label for="">88994399399439</label>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Expiration: </strong></label>
                            <label for="">12/04/12</label>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>CVV: </strong></label>
                            <label for="">777</label>
                        </div>
                        <hr class="mb-4">
                    </form>
                </div>
            </div>
    </section>
</main>

<?php
include('widgets/footer.php');
?>