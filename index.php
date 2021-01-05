<?php
require_once('config/configurations.php');
require_once('widgets/component.php');
?>

<?php
$currentpage = 'index';
include('widgets/header.php');
?>

<main>


    <section id="custom-sale">
        <div class="container py-5">
            <h4 class="text-center"><b>Top Sales</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryarmchairs);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
                ?>
            </div>
        </div>
    </section>

    <section id="custom-sale">
        <div class="container py-5">
            <h4 class="text-center"><b>Best Deals</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryarmchairs);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
                ?>
            </div>
        </div>
    </section>
    
</main>

<?php
include('widgets/footer.php');
?>