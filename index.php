<?php

// session_start();

require_once('config/configurations.php');
require_once('config/component.php');

?>

<?php
include('template/header.php');
?>

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

<?php
include('template/footer.php');
?>