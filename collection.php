<?php

// session_start();

require_once('config/configurations.php');
require_once('config/component.php');


?>

<?php
$currentpage = 'collection';
include('widgets/header.php');
?>

<main>
    <section id="collection">
        <div class="container ctn">
            <h4 class="text-center py-4 color-primary">Our Furniture Collection</h4>
            <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn color-primary coll-btn is-checked" data-filter="*"><b>All Brand</b></button>
                <button class="btn coll-btn" data-filter=".armchairs">Armchairs</button>
                <button class="btn coll-btn" data-filter=".chaiselongues">Chaiselongues</button>
                <button class="btn coll-btn" data-filter=".cushions">Cushions</button>
                <button class="btn coll-btn" data-filter=".daybeds">Daybeds</button>
                <button class="btn coll-btn" data-filter=".Easychairs">Easychairs</button>
                <button class="btn coll-btn" data-filter=".Footstools">Footstools</button>
                <button class="btn coll-btn" data-filter=".Poufs">Poufs</button>
                <button class="btn coll-btn" data-filter=".Smallsofas">Smallsofas</button>
                <button class="btn coll-btn" data-filter=".Sofa">Sofa</button>
            </div>

            <div class="grid">
                <?php
                $result = $connect->query($querryinventory);
                while ($row = mysqli_fetch_assoc($result)) {
                    component2($row['product_name'], $row['product_brand'], $row['product_price'], $row['product_image'], $row['id']);
                }
                ?>

            </div>
        </div>
    </section>
    <section></section>
    <section></section>
</main>

<?php
include('widgets/footer.php');
?>