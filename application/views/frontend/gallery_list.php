<style>
    .title {

        text-align: center;
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 23px;
        position: relative;
        top: auto;
        height: 60px;
    }

    .program {
        margin-left: 19px;
        margin-bottom: 30px;
    }

    .prog {
        padding-left: 40px;
        padding-bottom: 50px;
        margin: auto;
        border: 3px;
    }

    h1 {
        margin-top: 30px;
    }

    @media (max-width: 991px) {
        #hero h1 {
            font-size: 34px;
            margin-right: 80%;
            margin-left: -60px;
            margin-top: -190px;
        }
    }
</style>
<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

        <div id="logo" class="me-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="<?= base_url('') ?>" class="scrollto"><img src="<?= base_url() ?>assets/template/assets/img/logo-kilan.png" alt="" title=""></a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Program</a></li>
                <li><a class="nav-link scrollto" href="#about">Network</a></li>
                <li><a class="nav-link scrollto" href="#speakers">Gallery</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('frontend/about_us') ?>">About Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a class="buy-tickets scrollto" href="https://www.youtube.com/channel/UC5vFQKucDKcCyvsPAVD7vUg">Subscribe <i class="fa-solid fa-arrow-right"></i></a>

    </div>
</header><!-- End Header -->


<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <h1 class="mb-4 pb-0">Gallery</h1>
    </div>
</section><!-- End Hero Section -->
<section class="ftco-section">
    <?php if ($G['id'] == 2) { ?>
        <h1 style="text-align: center;">Socialware</h1>
    <?php } elseif ($G['id'] == 1) { ?>
        <h1 style="text-align: center;">Education</h1>
    <?php } elseif ($G['id'] == 3) { ?>
        <h1 style="text-align: center;">Innovation Product</h1>
    <?php } else { ?>
        <h1 style="text-align: center;">Artworks</h1>
    <?php } ?>
    <br><br>
    <div class="container mx-auto" data-aos="fade-up">
        <div class="col-sm-12 col-lg-12 col-md-12 mx-auto" style="width: auto;">
            <div class="row " data-aos="fade-up" data-aos-delay="100">
                <?php
                foreach ($pg as $a) : ?>
                    <div class="card-deck program" style="width: 18rem; ">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= base_url('assets/foto/thumbnail/' . $a->image . '') ?>" class="card-img-top" alt="..." style="height: 300px;">
                            <div class="card-body">
                                <h5 class="title"><?= $a->title ?></h5>
                            </div>
                            <?php if ($a->gallery_id == '3') { ?>
                                <h3 class="open-gallery mx-auto"><a href="<?= base_url('frontend/gallery_two/') ?><?= $a->slug ?>" style="color: white;font-size: 20px;">Open</a></h3>
                            <?php } elseif ($a->gallery_id == '4') {  ?>
                                <h3 class="open-gallery mx-auto"><a href="<?= base_url('frontend/gallery_two/') ?><?= $a->slug ?>" style="color: white;font-size: 20px;">Open</a></h3>
                            <?php } else { ?>
                                <h3 class="open-gallery mx-auto"><a href="<?= base_url('frontend/gallery/') ?><?= $a->slug ?>" style="color: white;font-size: 20px;">Open</a></h3>
                            <?php  } ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>


<script src="<?= base_url() ?>assets/template/slider/js/popper.js"></script>

<script src="<?= base_url() ?>assets/template/slider/js/owl.carousel.min.js"></script>