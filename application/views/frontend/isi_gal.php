<!-- Page header with logo and tagline-->
<style>
    a {
        color: black;
        /* font-size: 30px; */
    }
</style>
<header id="header-h" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl  d-flex align-items-center">

        <div id="logo" class="me-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="<?= base_url('') ?>" class="scrollto"><img src="<?= base_url() ?>assets/template/assets/img/logo.png" alt="" title=""></a>
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
        <div class="col-md-12">
            <h1><?= $cont_gallery->title ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">

            <h4>Introduction Video </h4>
            <a href="#!"><iframe class="card-img-top" src="<?= $cont_gallery->link ?>" width="100" height="300" alt="..."></iframe></a>
            <h4>Coach: <?= $cont_gallery->coach ?></h4>
            <h4><?= rupiah($cont_gallery->harga) ?>/Class</h4>
            <p><?= $cont_gallery->ket ?></p>
            <a href="mailto:<?= $apl['email'] ?>" class="btn btn-success">Q & A</a>
            <a href="https://wa.me/<?= $apl['tlp'] ?>" class="btn btn-danger">Get Started</a>
        </div>


        <div class="col-md-8">
            <div class="row">
                <div class="col-md-9">
                    <p><?= $cont_gallery->discourse ?></p>
                </div>
                <div class="col-md-3">
                    <h4>Category</h4>
                    <p><?= $G->title ?></p>
                    <h4>Format</h4>
                    <p><?= $cont_gallery->format ?></p>
                    <h4>Topic</h4>
                    <p><?= $cont_gallery->topic ?></p>
                </div>
            </div>

        </div>


    </div>
    <br>
</div>
</div>