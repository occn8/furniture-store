<?php
require_once('config/configurations.php');
require_once('widgets/component.php');
?>

<?php
$currentpage = 'brands';
include('widgets/header.php');
?>
<main>
    <section id="collection">
        <div class="container py-5 ctn">
            <h4 class="text-center py-1"><b>Our Furniture Brands</b></h4>
            <div id="filters" class="button-group border-bottom text-right font-baloo font-size-16">
                <button class="btn color-primary coll-btn is-checked" data-filter="*"><b>All Brands</b></button>
                <button class="btn coll-btn" data-filter=".ARFLEX">ARFLEX</button>
                <button class="btn coll-btn" data-filter=".ASTON">ASTON</button>
                <button class="btn coll-btn" data-filter=".JANET">JANET</button>
                <button class="btn coll-btn" data-filter=".LUDWIG">LUDWIG</button>
                <button class="btn coll-btn" data-filter=".PHOENIX">PHOENIX</button>
                <button class="btn coll-btn" data-filter=".FELTRI">FELTRI</button>
                <button class="btn coll-btn" data-filter=".CLIPPER">CLIPPER</button>
                <button class="btn coll-btn" data-filter=".LOFT">LOFT</button>
            </div>

            <div class="grid py-2">
                <?php
                $result = $connect->query($querrypdts);
                while ($row = mysqli_fetch_assoc($result)) {
                    component3($row['product_name'], $row['product_brand'], $row['product_price'], $row['product_image'], $row['id']);
                }
                ?>

            </div>
        </div>
    </section>
</main>

<?php
include('widgets/footer.php');
?>