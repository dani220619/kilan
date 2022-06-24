<link href="<?= base_url() ?>assets/template/assets/content/content.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url() ?>assets/template/slider/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/template/slider/css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/template/slider/css/style.css">
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

    @media (max-width: 900px) {
        #header #logo img {
            max-height: 100px;
            margin-right: 100px;
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
            width: 100%;
        }
    }
</style>
<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

        <div id="logo" class="logo mx-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="<?= base_url('') ?>" class="scrollto"><img src="<?= base_url() ?>assets/template/assets/img/logo-kilan.png" alt="" title="" class="logo-header"></a>
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hotels">Program</a></li>
                <li><a class="nav-link scrollto" href="#supporters">Network</a></li>
                <li><a class="nav-link scrollto" href="#speakers">Gallery</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('frontend/about_us') ?>">About Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a class="buy-tickets scrollto" href="https://www.youtube.com/channel/UC5vFQKucDKcCyvsPAVD7vUg">Subscribe <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</header><!-- End Header -->
<section id="hero">
    <div class="hero-containe mx-auto ino " data-aos="zoom-in" data-aos-delay="100">
        <h2 class="energy"><b class="">Energy of Innovation</b></h2>
        <p class="title tit">
            Energy of Innovation adalah tema yang kami perjuangkan
            untuk menceritakan proses inovasi teknologi dari
            perspektif kemanusiaan.</p>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> -->
        <a href="#about" class="btn btn-danger let" style="width: 150px; border-radius: 50px">Let’s Find Out!</a>
    </div>
</section><!-- End Hero Section -->
<section id="hotels">
    <div class="container mx-auto" data-aos="fade-up">
        <div class="section-header">
            <h2>Program</h2>
        </div>

        <div class="col-md-10 mx-auto">
            <div class="featured-carousel owl-carousel">
                <?php foreach ($category as $a) { ?>
                    <div class="item">
                        <div class="blog-entry">
                            <div class="col-sm-12 col-lg-12 col-md-12 mx-auto">
                                <div class="hotel mx-auto">
                                    <div class="hotel-img">
                                        <img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->image ?>" alt="Hotel 1" class="img-fluid" style="height: 300px">
                                    </div>
                                    <h3 class="open-program mx-auto"><a href="<?= base_url('frontend/list/') ?><?= $a->id ?>"><?= $a->name ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="">
        <center>
            <p class="mx-auto">Kilan.id memproduksi program tayangan digital, seperti: film pendek fiksi, dokumenter pendek, jurnal video, dan film animasi untuk merepresentasikan energy of innovation. </p>
        </center>
    </div>


</section><!-- End Hotels Section -->


<!-- ======= Speakers Section ======= -->
<section id="supporters" class="section-with-bg">

    <div class="container aos-init" data-aos="fade-up">
        <div class="section-header">
            <h2>Network</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix aos-init" data-aos="zoom-in" data-aos-delay="100" style="margin-left: 40px;
margin-right: 40px;">
            <?php foreach ($network as $a) { ?>
                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto">
                    <div class="supporter-logo">
                        <a href="<?= base_url('frontend/isi_net/') ?><?= $a->id ?>">
                            <img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->image ?>" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section><!-- End Sponsors Section -->

<section id="gallery">

    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Gallery</h2>
        </div>
    </div>
    <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
            <?php foreach ($gallery as $a) { ?>
                <div class="swiper-slide"><img src="<?= base_url() ?>assets/foto/thumbnail/<?= $a->image ?>" alt="Hotel 1" class="img-fluid" style="height: 250px;">
                    <h3 class="open-gallery mx-auto"><a href="<?= base_url('frontend/list_gallery/') ?><?= $a->id ?>" style="color: white;font-size: 20px;"><?= $a->title ?></a></h3>
                </div>

            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>

</section><!-- End Gallery Section -->
<section id="hotels" class="section-with-bg">
    <div class="mx-auto">
        <div class="row find" data-aos="fade-up" data-aos-delay="100" style="margin-left: 40px;">
            <h1>
                Find your energy of innovation!
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