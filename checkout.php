<?php
require_once('config/configurations.php');
require_once('widgets/checkout_cart.php');
?>

<?php
$currentpage = 'checkout';
include('widgets/header.php');
require_once('config/user_detail.php');

?>
<main>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Checkout</h2>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-black">Your cart</span>
                    <span class="badge  badge-pill"><img src="assets/cart.png" alt="">
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

                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>84889593</small>
                        </div>
                        <span class="text-success">-UGX 500/=</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (UGX)</span>
                        <strong><?php echo $total; ?>/=</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-warning">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3"><strong>Billing address</strong></h4>
                <form class="needs-validation" method="post" action="checkout.php" novalidate>
                    <?php include('config/errors.php'); ?>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $firstname; ?>" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo $lastname; ?>" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="username" value="<?php echo $username; ?>" placeholder="Username" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" value="<?php echo $address; ?>" placeholder="luwum Main St" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                                <option>Kenya</option>
                                <option>Rwanda</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">District</label>
                            <select class="custom-select d-block w-100" id="state" required>
                                <option value="<?php echo $district; ?>"><?php echo $district; ?></option>
                                <option>Entebbe</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid district.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder="" value="<?php echo $zip; ?>" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox py-2">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                    </div>
                    <hr class="mb-4">

                    <h4 class="mb-3"><strong>Payment</strong></h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" value="Credit" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" value="Debit" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="master" name="paymentMethod" value="Master" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="master">Master card</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" name="cname" placeholder="" required>
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" name="num" placeholder="" required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" name="exp" placeholder="" required>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" name="cvv" placeholder="" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-warning rounded-pill btn-block font-size-20" type="submit" name="checkout"><b> Continue with checkout</b></button>
                </form>
            </div>
        </div>
</main>
<script src="assets/scripts/validate.js"></script>
<?php
include('widgets/footer.php');
?>