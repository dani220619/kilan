<!-- Page header with logo and tagline-->
<style>
    a {
        color: black;
        font-size: 25px;
    }

    h1 {
        color: black;
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
</style>
<header id="header-h" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl  d-flex align-items-center">

        <div id="logo" class="logo mx-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="<?= base_url('') ?>" class="scrollto"><img src="<?= base_url() ?>assets/template/assets/img/logo-kilan.png" alt="" title=""></a>
        </div>

        <nav id="navbar-h" class="navbar-h order-last order-lg-0">
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

<!-- Page network-->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h1><b>Logo</b></h1>

            <img src="<?= base_url() ?>assets/foto/thumbnail/<?= $network->image ?>" alt="Hotel 1" class="img-fluid" style="height: 150px; width: 180px;">

        </div>
        <div class="col-md-8">

            <div class="card-body">
                <h1><b>About Us</b></h1>
                <div class="small text-muted"><?= $network->founded ?></div>
                <h2 class="card-title"><?= $network->title ?></h2>
                <p class=""><?= $network->about ?></p>
                <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-12">
            <!-- Featured blog post-->

            <div class="row">
                <div class="col-md-7">
                    <h1><b>Sector</b></h1>
                    <p><?= $network->sector ?></p>
                    <h1><b>Founded</b></h1>
                    <p><?= $network->founded ?></p>
                    <h1><b>Location</b></h1>
                    <p><?= $network->location ?></p>
                </div>
                <div class="col-md-5">
                    <h1><b>Web Office</b></h1>
                    <a href="<?= $network->web ?>"><?= $network->web ?></a>
                    <h1><b>Contact</b></h1>
                    <a href="mailto:<?= $network->email ?>"><i class="fa fa-envelope" aria-hidden="true" style="font-size: 40px;"></i>
                        <a href="<?= $network->ig ?>"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 40px;"></i>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>