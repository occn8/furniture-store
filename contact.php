<?php
require_once('config/configurations.php');
?>

<?php
$currentpage = 'contact';
include('widgets/header.php');
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="container py-5">
                        <h2>CONTACT INFO</h2>
                        <h6><i class="bx bx-current-location"></i> Address</h6>
                        <p>Ntinda valley, 21st st, Kampala, UGANDA</p>
                        <h6><i class="bx bx-phone"></i> Phone</h6>
                        <p>+256 7887 06532 <b>|</b> +256 7887 00002</p>
                        <h6><i class="bx bx-help-circle"></i> Support</h6>
                        <p>elitefurniture@furstore.com</p>
                    </div>
                </div>
                <div class="col-6 text-center">
                    <img src="assets/products/poufs/8.jpg" height="400px" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    <img src="assets/products/poufs/8.jpg" height="400px" alt="">
                </div>
                <div class="col-6">
                    <div class="container py-5">
                        <h2>GET IN TOUCH</h2>
                        <form action="#">
                            <input class="form-control col-12 my-2" type="text" placeholder="Name">
                            <input class="form-control col-12 my-2" type="text" placeholder="Email">
                            <input class="form-control col-12 my-2" type="text" placeholder="Website">
                            <textarea class="form-control col-12 my-2 py-5" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-warning rounded-pill my-2">Send Message</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section></section>
</main>

<?php
include('widgets/footer.php');
?>