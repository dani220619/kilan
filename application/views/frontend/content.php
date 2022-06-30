<!-- Page header with logo and tagline-->
<style>
    a {
        color: black;
    }

    .fram {
        width: 100%;
        height: 550px;
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

    @media (max-width: 1700px) {
        .fram {
            position: relative;
            width: 80%;
            overflow: hidden;
            margin-left: 70px;

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
            <iframe class="embed-responsive-item fram" src="<?= $content->post_link ?>"></iframe>
        </div>
    </div>


    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="small text-muted"><?= $content->post_date ?></div>
                    <h2 class="card-title"><?= $content->post_title ?></h2>
                    <p class="card-text"><?= $content->post_body ?></p>
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
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!"><?= $categ['name'] ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Format</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!"><?= $content->post_format ?></a></li>
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
                                <li><a href="#!"><?= $content->post_topic ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>