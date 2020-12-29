<?php
require_once('config/configurations.php');
require_once('widgets/component.php');

if (isset($_POST['add'])) {
    /// print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        } else {

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }
    } else {

        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
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
                $result = $connect->query($querryinventory);
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
                $result = $connect->query($querryinventory);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
                ?>
            </div>
        </div>
    </section>

    <section></section>
</main>

<?php
include('widgets/footer.php');
?>