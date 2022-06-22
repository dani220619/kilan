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
        margin-left: 15px;
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

    @media (max-width: 700px) {
        #hero .hero-container {
            position: absolute;
            bottom: 110px;
            left: 10px;
            text-align: left;
            display: flex;
            justify-content: center;
            align-items: left;
            flex-direction: column;
            padding: 0 15px;
        }
    }
</style>
<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

        <div id="logo" class="me-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="<?= base_url('') ?>" class="scrollto"><img src="<?= base_url() ?>assets/template/assets/img/logo.png" alt="" title=""></a>
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
    <?php if ($category['id'] == 1) { ?>
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">LINE UP</h1>
            <p class="mb-4 pb-0">
                Serial dokumenter pendek tentang perkembangan model<br>
                bisnis dan peluang lahirnya industri baru di Indonesia.

            </p>
        </div>

    <?php } elseif ($category['id'] == 2) { ?>

        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">LIFE LIGHT</h1>
            <p class="mb-4 pb-0">
                Serial film pendek yang terinspirasi dari cara hidup para
                inovator.

            </p>
        </div>
    <?php } elseif ($category['id'] == 6709) { ?>
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">AIRDROPS</h1>
            <p class="mb-4 pb-0">
                Video podcast yang membahas tentang bagaimana<br>
                proses inovasi bekerja dan berperan di masyarakat.

            </p>
        </div>

    <?php } elseif ($category['id'] == 6940) { ?>
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">THE EXPERT</h1>
            <p class="mb-4 pb-0">
                Video jurnal yang mempresentasikan penemuan atau<br>
                pengalaman para pakar dari berbagai profesi.
            </p>
        </div>
    <?php } else { ?>
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">BEYOND TECH</h1>
            <p class="mb-4 pb-0">
                Video kreatif dan film animasi dengan konsep techno
                advertising.
            </p>
        </div>
    <?php }  ?>



</section><!-- End Hero Section -->
<section class="ftco-section">
    <?php if ($category['id'] == 1) { ?>
        <h1 style="text-align: center;">LINE UP</h1>
    <?php } elseif ($category['id'] == 2) { ?>
        <h1 style="text-align: center;">LIFE LIGHT</h1>
    <?php } elseif ($category['id'] == 6709) { ?>
        <h1 style="text-align: center;">AIRDROPS</h1>
    <?php } elseif ($category['id'] == 6940) { ?>
        <h1 style="text-align: center;">THE EXPERT</h1>
    <?php } else { ?>
        <h1 style="text-align: center;">BEYOND TECH</h1>
    <?php }  ?>
    <br><br>
    <div class="container mx-auto" data-aos="fade-up">
        <div class="col-sm-12 col-lg-12 col-md-12 mx-auto" style="width: auto;">
            <div class="row " data-aos="fade-up" data-aos-delay="100">
                <?php
                foreach ($post as $a) : ?>
                    <div class="card-deck program" style="width: 18rem; ">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= base_url('assets/foto/thumbnail/' . $a->post_thumbnail . '') ?>" class="card-img-top" alt="..." style="height: 300px;">
                            <div class="card-body">
                                <h5 class="title"><?= $a->post_title ?></h5>
                            </div>
                            <a href="<?= base_url('frontend/content/' . $a->post_slug . '') ?>" class="open">OPEN</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>


<script src="<?= base_url() ?>assets/template/slider/js/popper.js"></script>

<script src="<?= base_url() ?>assets/template/slider/js/owl.carousel.min.js"></script>