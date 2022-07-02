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

        margin-left: 150px;

        width: 1000px;
    }



    @media (max-width: 730px) {
        .fram {
            position: relative;
            width: 90%;
            margin-left: 5%;
            overflow: hidden;
            height: 80%;
        }
    }

    @media (max-width: 1200px) {
        .fram {
            position: relative;
            width: 90%;
            /* margin-left: 15%; */
            overflow: hidden;
            height: 100%;


            /* 16:9 Aspect Ratio */
        }
    }
</style>
<header id="header-h" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl  d-flex align-items-center">

        <div id="logo" class="me-auto">
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

<!-- Page content-->
<div class="container mx-auto">
    <div class="cont mx-auto">
        <div class="embed-responsive embed-responsive-21by9">
            <img src="<?= base_url() ?>assets/foto/thumbnail/<?= $cont_gallery->image ?>" alt="Hotel 1" class="img-fluid fram">
        </div>
    </div>

    <br>
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="small text-muted"><?= $cont_gallery->date ?></div>
                    <h2 class="card-title"><?= $cont_gallery->title ?></h2>
                    <p class="card-text"><?= $cont_gallery->discourse ?></p>
                    <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <!-- Pagination-->
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Format</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!"><?= $cont_gallery->format ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->

            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Topic</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!"><?= $cont_gallery->topic ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>