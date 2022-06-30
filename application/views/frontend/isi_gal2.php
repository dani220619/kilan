<!-- Page header with logo and tagline-->
<style>
    a {
        color: black;
        /* font-size: 30px; */
    }

    @media (min-width: 700px) {
        .logo-header-h {
            height: 700px;
            margin-left: 300px;
        }
    }

    @media (max-width: 700px) {
        #header-h #logo img {
            max-height: 100px;
            margin-right: 100px;
        }
    }

    @media (min-width: 1200px) {
        #header-h #logo img {
            max-height: 100px;
            margin-right: 680px;
            margin-left: -30px;
        }
    }

    @media (max-width: 900px) {
        #header-h #logo img {
            max-height: 100px;
            margin-right: 100px;
        }
    }

    .fram {
        width: 50%;
        height: 200px;
    }

    @media (max-width: 1700px) {
        .fram {
            position: relative;
            width: 80%;
            overflow: hidden;
            padding: -10px;

            /* 16:9 Aspect Ratio */
        }

    }

    @media (max-width: 730px) {
        .fram {
            position: relative;
            width: 100%;
            overflow: hidden;
            margin-left: 27px;
            height: 50%;
            /* 16:9 Aspect Ratio */
        }

    }

    @media (max-width: 600px) {
        .fram {
            width: 88%;
            height: 200px;
            margin-left: 20px;
        }

    }
</style>
<header id="header-h" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl  d-flex align-items-center">

        <div id="logo" class="mx-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="<?= base_url('') ?>" class="scrollto"><img src="<?= base_url() ?>assets/template/assets/img/logo-kilan.png" alt="" title=""></a>
        </div>

        <nav id="navbar-h" class="navbar-h order-last order-lg-0">
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

<!-- Page network-->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h4>Video Product </h4>
            <a href="#!"><iframe class="embed-responsive-item fram" src="<?= $cont_gallery->link ?>" width="100" height="300" alt="..."></iframe></a>
            <h4>Foto Product</h4>
            <img src="<?= base_url() ?>assets/foto/thumbnail/<?= $cont_gallery->image ?>" alt="Hotel 1" class="img-fluid fram" style="height: 300px">


        </div>

        <div class="col-md-8">
            <br>
            <h1><?= $cont_gallery->title ?></h1>
            <h4>Creator: <?= $cont_gallery->coach ?></h4>
            <p><?= $cont_gallery->discourse ?></p>
            <a href="mailto:<?= $apl['email'] ?>" class="btn btn-success" style="margin: 30px;">Q & A</a>
            <a href="https://wa.me/<?= $apl['tlp'] ?>" class="btn btn-danger">Get Started</a>
        </div>
    </div>
    <br>
</div>
</div>