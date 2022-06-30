<style>
    h1 {
        font-size: 400%;
    }

    @media (max-width: 760px) {
        h1 {
            font-size: 200%;

        }
    }

    .title {

        text-align: center;
        font-family: 'Raleway';
        font-style: normal;
        /* font-weight: 100px; */
        font-size: 20px;
        line-height: 23px;
        top: auto;

    }

    .text {
        font-size: 20px;

    }

    h1 {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 30px;
        /* font-size: 67.77px; */
        line-height: 80px;
        color: #000000;

    }

    p {
        font-family: 'Raleway';
        font-style: normal;
        Line-height: 20px;
        color: #000000;

    }

    .ab {
        margin-left: 120%;
        margin-right: 180px;

    }

    @media (max-width: 760px) {
        .ab {
            margin-left: auto;
            margin-right: auto;
        }
    }

    .img-fluid {
        height: 450px;
    }

    @media (max-width: 720px) {
        .img-fluid {
            height: 300px;
            /* margin-left: 25px; */
        }
    }

    .ourser {
        height: 600px;
        width: auto;
    }

    @media (max-width: 720px) {
        .ourser {
            height: 300px;
            width: 330px;
        }
    }

    .part {
        width: 100%;
    }

    @media (min-width: 700px) {
        .logo-header {
            height: 700px;
            margin-left: 300px;
        }
    }

    @media (max-width: 700px) {
        #header #logo img {
            max-height: 100px;
            margin-right: 0px;
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
        .let {
            margin-left: -40px;

            margin-top: -60px;
        }
    }

    @media (min-width: 900px) {
        .let {
            margin-left: 0px;
        }
    }

    @media (max-width: 700px) {
        .image_about {
            margin-left: 50px;

        }
    }

    @media (max-width: 700px) {
        .kilan {
            margin-left: 7px;

        }
    }
</style>
<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

        <div id="logo" class="me-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="<?= base_url('') ?>" class="scrollto"><img src="<?= base_url() ?>assets/template/assets/img/logo-kilan.png" alt="" title=""></a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
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

<section id="about_us">

    <div class="about_us-container" data-aos="zoom-in" data-aos-delay="100">


        <h1 class="ab">
            Innovation<br>
            Technology<br>
            Humanity
        </h1>
        <h1 class="ab">
            <a href="#about" class="btn btn-danger let" style="width: 150px; border-radius: 50px">Let’s Find Out!</a>
        </h1>


    </div>

    <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> -->
    <!-- <a href="#about" class="btn btn-danger" style="width: 150px; border-radius: 50px">Let’s Find Out!</a> -->
    </div>
</section><!-- End Hero Section -->
<section id="hotels">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <h1 class="about mx-auto">
                    <b>About Us</b>
                </h1>
            </div>
            <div class=" mx-auto" style="width: auto;">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12" style="width: auto;">
                <div class=" hotel mx-auto">
                    <img src="<?= base_url() ?>assets/template/assets/img/isiabout.png" alt="" class="img-fluid image_about">
                </div>
            </div>
            <div class="col-md-7 mx-auto text">
                <p><b>Kilan.id</b> adalah perusahaan media digital yang didedikasikan
                    untuk berbagi inspirasi perkembangan inovasi teknologi
                    di Indonesia dengan pendekatan cinematic storytelling.<br><br>

                    Studio kami memproduksi berbagai program tayangan digital, seperti:
                    film pendek fiksi, dokumenter pendek, jurnal video, dan film animasi
                    untuk rilis di platform digital, siaran televisi, dan media sosial.<br><br>

                    Kami percaya bahwa manusia pada dasarnya adalah mahluk teknologi
                    atau penguna alat. Teknologi telah menjadi bagian sentral dari kondisi manusia - baik dan buruk. Itu memengaruhi kita, sama seperti kita memengaruhinya, tidak hanya dalam kehidupan kita sehari-hari,
                    tetapi juga sebagai makhluk moral dan etis.<br><br>

                    Inovasi teknologi merupakan suatu karya yang diciptakan manusia
                    dengan kreativitas yang terukur. Tujuan para inovator adalah menjadikan kehidupan yang lebih baik. Oleh karenanya, kami ada untuk menceritakan kisah mereka yang luar biasa, yang tak terhitung, dan yang terabaikan
                    ketika berjuang dalam menemukan energi inovasi.</p>
            </div>
        </div>
    </div>
</section>
<section id="hotels" class="section-with-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <h1><b>Dream</b></h1>
                <p>Visi kami adalah menghidupkan kembali<br>
                    impian Indonesia dalam bidang inovasi,<br>
                    teknologi dan kemanusiaan.</p>
                <h1><b>Techo Advertising</b></h1>
                <p>Kami menjalankan proses branding merk dan <br>
                    produk teknologi baru dengan teknik design <br>
                    thinking dan ko-kreasi.</p>
                <h1><b>Energy of Innovation</b></h1>
                Kami ingin menjadi studio kultural yang mengurai <br>
                value dan ekspresi kreatif para inovator.
            </div>
            <div class="col-md-5">
                <img src="<?= base_url() ?>assets/template/assets/img/logo-kilan.png" class="img-fluid kilan" alt="TheEvenet">
            </div>
        </div>
    </div>
</section>
<section id="hotels">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-8">
                <h1><b>Partnership & Advertise</b></h1>
                <p class="part">If you are an inventor, innovator or are developing a brand of an innovation product, then we open up opportunities
                    for collaboration to build a digital literacy community together so that the audience can understand
                    that the innovation process is an investment in creating knowledge, piece by piece.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?= base_url() ?>assets/template/assets/img/love.png" alt="" class="img-fluid" style="width: auto;">
            </div>
            <div class="col-md-6">
                <h1><b>Trial</b></h1>
                <p>Free consultation and production one of video
                    content after our creative team conducts
                    sociological analysis ethnographic immersion
                    and brand pedigree analysis.</p>
                <h1><b>Loyal</b></h1>
                <p>Membership partner, target vertical markets
                    with a need for video content.</p>
                <h1><b>Potential</b></h1>
                <p>Crowd funding, sponsor fees, and branded
                    content advertisement.</p>
            </div>
        </div>
    </div>
</section>
<section id="hotels" class="section-with-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <h1><b>Our Services</b></h1>
            <div class="col-md-7">

                <br>
                <h1><b>Design</b></h1>
                <p>We design communication
                    strategies
                    and creative
                    output ideas with various
                    audio visual mediums.</p>
                <h1><b>Production</b></h1>
                <p>We produce a variety of programming, such as:
                    fiction short films, short documentaries, video journals,
                    and animated films to represent energy of innovation.</p>
                <h1><b>Amplification</b></h1>
                <p>Through our cinematic storytelling and using our various
                    digital channels, we help brands and innovators
                    create a market and product education
                    to help build audience trust.</p>
            </div>
            <div class="col-md-5">
                <img src="<?= base_url() ?>assets/template/assets/img/kilat.png" alt="" class="img-fluid ourser">
            </div>
        </div>
    </div>
</section>
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


<script src="<?= base_url() ?>assets/template/slider/js/popper.js"></script>

<script src="<?= base_url() ?>assets/template/slider/js/owl.carousel.min.js"></script>