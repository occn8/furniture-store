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
            <h4 class="text-center"><b>Armchairs</b></h4>
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
            <h4 class="text-center"><b>Chaise longues</b></h4>
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
            <h4 class="text-center"><b>Cushions</b></h4>
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
            <h4 class="text-center"><b>Daybeds</b></h4>
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
            <h4 class="text-center"><b>Easychairs</b></h4>
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
            <h4 class="text-center"><b>Footstools</b></h4>
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
            <h4 class="text-center"><b>Kidssofas</b></h4>
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
            <h4 class="text-center"><b>Poufs</b></h4>
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
            <h4 class="text-center"><b>Small sofas</b></h4>
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
            <h4 class="text-center"><b>Sofa</b></h4>
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