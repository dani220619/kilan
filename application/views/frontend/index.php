<link href="<?= base_url() ?>assets/template/assets/content/content.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url() ?>assets/template/slider/css/owl.carousel.min.css">



<style>
    @media (min-width: 700px) {
        .logo-header {
            height: 700px;
            margin-left: 300px;
        }
    }

    @media (max-width: 700px) {
        #header #logo img {
            max-height: 100px;
            margin-right: 100px;
        }
    }

    @media (min-width: 1200px) {
        #header #logo img {
            max-height: 100px;
            margin-right: 680px;
            margin-left: -30px;
        }
    }

    @media (min-width: 1100px) {
        #header #logo img {
            max-height: 100px;
            margin-right: 500px;
        }
    }

    @media (max-width: 700px) {
        .energy {
            color: white;
            font-size: 90px;
            font-weight: 50px;
            font-size: 50px;
            position: center;
            text-align: left;
            margin-left: 50px;
        }
    }

    @media (max-width: 1200px) {
        .energy {
            color: white;
            font-size: 90px;
            font-weight: 50px;
            font-size: 50px;
            position: center;
            text-align: left;
            margin-left: 50px;
        }
    }

    @media (min-width: 900px) {
        .energy {
            color: white;
            margin-top: 300px;
            margin-left: 300px;
            font-weight: 50px;
            font-size: 70px;
        }
    }

    @media (max-width: 700px) {
        .tit {
            text-align: left;
            color: white;
            font-size: 15px;
            margin-left: 50px;
            text-align: left;
            font-size: 15px;
            margin-left: 50px;
            font-weight: inherit;
        }
    }

    @media (min-width: 900px) {
        .tit {
            color: white;
            margin-left: 300px;
            font-weight: 50px;
            font-size: 70px;
            width: 50%;
        }
    }

    @media (max-width: 700px) {
        .let {
            margin-left: 50px;
        }

    }

    @media (max-width: 1200px) {
        .let {
            margin-left: 50px;
        }

    }

    @media (min-width: 900px) {
        .let {
            margin-left: 300px;
        }

    }

    @media (max-width: 700px) {
        .logo {
            margin-left: 100px;
        }

    }

    @media (min-width: 700px) {
        .logo {
            margin-right: 500px;

        }

    }

    .lo {
        margin-right: 500px;
    }

    .ino {
        color: white;
        margin-left: 220px;
        margin-top: 250px;
    }

    .title {
        font-weight: none;
    }


    @media (max-width: 700px) {
        .open-gallery {
            width: auto;
        }
    }

    @media (max-width: 700px) {
        .open-program {
            width: 100%;
        }
    }

    @media (max-width: 800px) {
        .open-program {
            width: 100%;
        }
    }

    .open-program-gal {
        text-justify: auto;
        text-align: center;
        color: #fff;
        background: #f82249;
        padding: 7px 22px;
        border: 2px solid #f82249;
        transition: all ease-in-out 0.3s;
        font-weight: 600;
        line-height: 1;
        font-size: 13px;
        white-space: nowrap;
    }

    @media (max-width: 650px) {
        .open-program-gal {
            width: 100%;
        }
    }

    @media (min-width: 750px) {
        .open-program-gal {
            width: 100%;
        }
    }

    @media (max-width: 1200px) {
        .open-program-gal {
            width: 100%;
        }
    }

    @media (max-width: 600px) {
        #header {
            left: -20px;
        }
    }

    @media (max-width: 600px) {
        #hotels .hotel {
            padding: 40px;
        }
    }
</style>
<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

        <div id="logo" class="me-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="<?= base_url('') ?>" class="scrollto img"><img src="<?= base_url() ?>assets/template/assets/img/logo-kilan.png" alt="" title=""></a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0 nav">
            <ul>
                <li><a class="nav-link scrollto active" href="<?= base_url('frontend/index') ?>">Program</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('frontend/gallery_list') ?>">Gallery</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('frontend/about_us') ?>">About Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a class="buy-tickets scrollto" href="https://www.youtube.com/channel/UC5vFQKucDKcCyvsPAVD7vUg">Subscribe <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</header><!-- End Header -->

<section id="hero">
    <div class="hero-containe mx-auto ino " data-aos="zoom-in" data-aos-delay="100">
        <h2 class="energy"><b class="">Program</b></h2>
        <!-- <p class="title tit">
            Energy of Innovation adalah tema yang kami perjuangkan
            untuk menceritakan proses inovasi teknologi dari
            perspektif kemanusiaan.</p> -->
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> -->
        <!-- <a href="#about" class="btn btn-danger let" style="width: 150px; border-radius: 50px">Let’s Find Out!</a> -->
    </div>
</section><!-- End Hero Section -->


<section id="gallery">
    <div class="container" data-aos="fade-up">
        <h1><b>LINE UP</b></h1>
        <p>Serial dokumenter pendek tentang perkembangan model
            bisnis dan peluang lahirnya industri baru di Indonesia.
        </p>
    </div>
    <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">

            <?php foreach ($line_up as $a) { ?>
                <a href="<?= base_url('frontend/content/') ?><?= $a->post_slug ?>" style="color: white;font-size: 20px; width: 400px;">
                    <div class="swiper-slide"><img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->post_thumbnail  ?>" alt="Hotel 1" class="img-fluid" style="height: 200px; width: 300px;">
                </a>
        </div>
    <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
    </div>
</section><!-- End Gallery Section -->

<section id="gallery" class="section-with-bg">
    <div class="container" data-aos="fade-up">
        <h1><b>LIFE LIGHT</b></h1>
        <p>Serial film pendek yang terinspirasi dari cara hidup para
            inovator.
        </p>
    </div>
    <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
            <?php foreach ($life_light as $a) { ?>
                <a href="<?= base_url('frontend/content/') ?><?= $a->post_slug ?>" style="color: white;font-size: 20px; width: 400px;">
                    <div class="swiper-slide"><img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->post_thumbnail  ?>" alt="Hotel 1" class="img-fluid" style="height: 200px; width: 300px;">
                </a>
        </div>
    <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
    </div>
</section><!-- End Gallery Section -->

<section id="gallery">
    <div class="container" data-aos="fade-up">
        <h1><b>AIRDROPS</b></h1>
        <p>Video podcast yang membahas tentang bagaimana
            proses inovasi bekerja dan berperan di masyarakat.
        </p>
    </div>
    <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
            <?php foreach ($airdrops as $a) { ?>
                <a href="<?= base_url('frontend/content/') ?><?= $a->post_slug ?>" style="color: white;font-size: 20px; width: 400px;">
                    <div class="swiper-slide"><img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->post_thumbnail  ?>" alt="Hotel 1" class="img-fluid" style="height: 200px; width: 300px;">
                </a>
        </div>
    <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
    </div>
</section><!-- End Gallery Section -->

<section id="gallery" class="section-with-bg">
    <div class="container" data-aos="fade-up">
        <h1><b>THE EXPERT</b></h1>
        <p>Video jurnal yang mempresentasikan penemuan atau
            pengalaman para pakar dari berbagai profesi. </p>
    </div>
    <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
            <?php foreach ($the_expert as $a) { ?>
                <a href="<?= base_url('frontend/content/') ?><?= $a->post_slug ?>" style="color: white;font-size: 20px; width: 400px;">
                    <div class="swiper-slide"><img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->post_thumbnail  ?>" alt="Hotel 1" class="img-fluid" style="height: 200px; width: 300px;">
                </a>
        </div>
    <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
    </div>
</section><!-- End Gallery Section -->

<section id="gallery">
    <div class="container" data-aos="fade-up">
        <h1><b>BEYOND TECH</b></h1>
        <p>Video kreatif dan film animasi dengan konsep techno
            advertising. </p>
    </div>
    <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">

            <?php foreach ($beyond_tech as $a) { ?>
                <a href="<?= base_url('frontend/content/') ?><?= $a->post_slug ?>" style="color: white;font-size: 20px; width: 400px;">
                    <div class="swiper-slide"><img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->post_thumbnail  ?>" alt="Hotel 1" class="img-fluid" style="height: 200px; width: 300px;">
                </a>
        </div>
    <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
    </div>
</section><!-- End Gallery Section -->

<section id="hotels" class="section-with-bg">
    <div class="mx-auto">
        <div class="row find" data-aos="fade-up" data-aos-delay="100" style="margin-left: 40px;">
            <h1><b>
                    Find your energy of innovation!</b>
            </h1>
            <a href="https://wa.me/<?= $apl['tlp'] ?>" type="button" class="startup">Startup</a>
        </div>
    </div>
</section><!-- End Hotels Section -->
<script src="<?= base_url() ?>assets/template/slider/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/template/slider/js/popper.js"></script>
<script src="<?= base_url() ?>assets/template/slider/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/template/slider/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/template/slider/js/main.js"></script>