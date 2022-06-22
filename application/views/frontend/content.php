<!-- Page header with logo and tagline-->
<style>
    a {
        color: black;
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

<!-- Page content-->
<div class="container">
    <div class="row">
        <div class="col-md-9 mx-auto">
            <a href="#!"><iframe class="card-img-top" src="<?= $content->post_link ?>" width="400" height="550" alt="..."></iframe></a>
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