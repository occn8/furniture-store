<?php
require_once('config/configurations.php');
require_once('widgets/component.php');
?>

<?php
$currentpage = 'index';
include('widgets/header.php');
?>

<main>
<div class="py-2"></div>

    <section id="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Armchairs</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryarmchairs);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>

    <section id="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Chaise longues</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrychaiselongues);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Cushions</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrycushions);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Daybeds</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrydaybeds);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Easy chairs</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryEasychairs);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Footstools</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryFootstools);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Kidssofas</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryKidssofas);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Poufs</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryPoufs);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Small sofas</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrySmallsofas);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Sofa</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrySofa);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>

</main>

<?php
include('widgets/footer.php');
?>