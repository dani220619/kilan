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

<section id="gallery_header">
    <div class="hero-containe mx-auto ino " data-aos="zoom-in" data-aos-delay="100">
        <h2 class="energy"><b class="">Gallery</b></h2>
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
        <h1><b>Socialware</b></h1>
    </div>
    <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">

            <?php foreach ($socialware as $a) { ?>
                <a href="<?= base_url('frontend/gallery/') ?><?= $a->slug ?>" style="color: white;font-size: 20px; width: 400px;">
                    <div class="swiper-slide"><img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->image  ?>" alt="Hotel 1" class="img-fluid" style="height: 200px; width: 300px;">
                </a>
                <div class="row">
                    <h6> <br><?= $a->title ?></h6>
                </div>
        </div>
    <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
    </div>
</section><!-- End Gallery Section -->

<section id="gallery" class="section-with-bg">
    <div class="container" data-aos="fade-up">
        <h1><b>Humanware</b></h1>
    </div>
    <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
            <?php foreach ($education as $a) { ?>
                <a href="<?= base_url('frontend/gallery/') ?><?= $a->slug ?>" style="color: white;font-size: 20px; width: 400px;">
                    <div class="swiper-slide"><img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->image  ?>" alt="Hotel 1" class="img-fluid" style="height: 200px; width: 300px;">
                </a>
                <div class="row section-with-bg">
                    <h6> <br><?= $a->title ?></h6>
                </div>

        </div>
    <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
    </div>
</section><!-- End Gallery Section -->

<section id="gallery">
    <div class="container" data-aos="fade-up">
        <h1><b>Hardware</b></h1>
    </div>
    <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">

            <?php foreach ($inovation as $a) { ?>
                <a href="<?= base_url('frontend/gallery/') ?><?= $a->slug ?>" style="color: white;font-size: 20px; width: 400px;">
                    <div class="swiper-slide"><img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->image  ?>" alt="Hotel 1" class="img-fluid" style="height: 200px; width: 300px;">
                </a>
                <div class="row">
                    <h6> <br><?= $a->title ?></h6>
                </div>
        </div>
    <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
    </div>
</section><!-- End Gallery Section -->


<section id="gallery" class="section-with-bg">
    <div class="container" data-aos="fade-up">
        <h1><b>Software</b></h1>
    </div>
    <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
            <?php foreach ($artwork as $a) { ?>
                <a href="<?= base_url('frontend/gallery/') ?><?= $a->slug ?>" style="color: white;font-size: 20px; width: 400px;">
                    <div class="swiper-slide"><img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->image  ?>" alt="Hotel 1" class="img-fluid" style="height: 200px; width: 300px;">
                </a>
                <div class="row section-with-bg">
                    <h6> <br><?= $a->title ?></h6>
                </div>
        </div>
    <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
    </div>
</section><!-- End Gallery Section -->


<section id="hotels">
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