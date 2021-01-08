<?php
require_once('config/configurations.php');
require_once('widgets/component.php');
?>

<?php
$currentpage = 'details';
include('widgets/header.php');
?>
<main>
    <?php
    $item_id = $_GET['product_id'] ?? 1;
    foreach ($result as $item) :
        if ($item['id'] == $item_id) :
    ?>
            <section id="product" class="py-3">
                <?php
                detail($item['product_name'], $item['product_brand'], $item['product_price'], $item['product_image'], $item['id']);
                ?>
            </section>
    <?php
        endif;
    endforeach;
    ?>
</main>

<?php
include('widgets/footer.php');
?>