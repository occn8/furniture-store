<?php
require_once('config/configurations.php');
?>

<?php
$currentpage = 'about';
include('widgets/header.php');
?>

<main>
    <section id="info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container py-5">
                        <h2><i class='bx bx-history color-primary'></i> Our Story</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex numquam quas non dolor perspiciatis, vitae quam commodi quos officia sapiente iure similique minus cum molestiae odio earum atque corrupti cupiditate.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex numquam quas non dolor perspiciatis, vitae quam commodi quos officia sapiente iure similique minus cum molestiae odio earum atque corrupti cupiditate.</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/products/poufs/8.jpg" height="300px" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="container py-5">
                        <h2><i class='bx bx-library color-primary'></i> Our Services</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae necessitatibus commodi natus fugit. Nisi neque voluptatum aut vero sed, labore impedit repellat consequuntur qui, quibusdam perspiciatis error ipsa nobis!</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/products/poufs/8.jpg" height="300px" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="container py-5">
                        <h2><i class='bx bxs-bullseye color-primary'></i> Our Mission</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae necessitatibus commodi natus fugit. Nisi neque voluptatum aut vero sed, labore impedit repellat consequuntur qui, quibusdam perspiciatis error ipsa nobis!</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/products/poufs/8.jpg" height="300px" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container py-5">
            <h2><i class='bx bxs-group color-primary'></i> The Team</h2>

            <div class="row">
                <div class="col-md-3 py-2"><img src="assets/images/ochen.jpg" width="95%" alt="team-img">
                    <div class="col-md-12 text-center py-2">
                        <p>Ochen Hillary</p>
                    </div>
                </div>
                <div class="col-md-3"><img src="assets/images/klive.jpg" width="95%" alt="team-img">
                    <div class="col-md-12 text-center py-2">
                        <p>Klive Karuhunga</p>
                    </div>
                </div>
                <div class="col-md-3"><img src="assets/images/tisha.jpg" width="95%" alt="team-img">
                    <div class="col-md-12 text-center py-2">
                        <p>Kirabo Tisha</p>
                    </div>
                </div>
                <div class="col-md-3"><img src="assets/images/precious.jpg" width="95%" alt="team-img">
                    <div class="col-md-12 text-center py-2">
                        <p>Ayebare Precious</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="features">
        <div class="container py-5">
            <h2><i class='bx bxs-setting color-primary'></i> Features & Services</h2>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section> -->

</main>

<?php
include('widgets/footer.php');
?>