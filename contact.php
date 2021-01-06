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
                        <h6><i class="bx bx-phone"></i> Address</h6>
                        <p>Ntinda valley, 21st st, Kampala, UGANDA</p>
                        <h6><i class="bx bx-phone"></i> Phone</h6>
                        <p>+256 7887 06532</p>
                        <h6><i class="bx bx-email"></i> Support</h6>
                        <p>elitefurniture@furstore.com</p>
                        <h2>SEND MESSAGE</h2>
                        <form action="#" >
                            <input class="form-control col-6 my-2 con" type="text" placeholder="Name">
                            <input class="form-control col-6 my-2 con" type="text" placeholder="Email">
                            <input class="form-control col-6 my-2 con" type="text" placeholder="Website">
                            <textarea class="form-control col-6 my-2 con" placeholder="Message"></textarea>
                            <button type="submit" class="form-control site-btn btn-warning my-2 mr-5">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </section>
    <section></section>
</main>

<?php
include('widgets/footer.php');
?>