  </main><!-- End #main -->
  <footer id="footer">
      <div class="footer-top">
          <div class="container">
              <div class="row foot">

                  <div class="col-lg-3 col-md-6 footer-info">
                      <a href="<?= base_url() ?>">
                          <img src="<?= base_url() ?>assets/template/assets/img/logo-kilan.png" alt="TheEvenet" style="height: 140px;">
                      </a>
                      <p>©2022 Kilan.id | All right reserved</p>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-contact">
                      <h4>Business</h4>
                      <p style="color: white;">Kilan.id is a digital media company that produces cinematic storytelling content to find the energy of innovation.</p>
                      <div class="social-links">
                          <a href="mailto:<?= $apl['email'] ?>" class="email"><i class="bi bi-envelope"></i></a>
                          <a href="https://wa.me/<?= $apl['tlp'] ?>" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                      </div>


                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Social</h4>
                      <div class="social-links">
                          <a href="<?= $apl['yt'] ?>" class="youtube"><i class="bi bi-youtube"></i></a>
                          <a href="<?= $apl['ig'] ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                          <a href="<?= $apl['tiktok'] ?>" class="google-plus"><i class="bi bi-tiktok"></i></a>
                          <a href="<?= $apl['linked'] ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-contact">
                      <h4>Pages</h4>
                      <ul>
                          <p><a href="#hotels" style="color: white;">Program</a><br>
                          <p><a href="#supporters" style="color: white;">Network</a><br>
                          <p><a href="#speakers" style="color: white;">Gallery</a><br>
                          <p><a href="<?= base_url('frontend/about_us') ?>" style="color: white;"> About Us</a><br>


                          </p>

                      </ul>

                  </div>

              </div>
          </div>
      </div>


  </footer><!-- End  Footer -->
  <style>
      @media (max-width: 700px) {
          .foot {
              margin-left: 10px;
          }
      }

      @media (max-width: 1200px) {
          .foot {
              margin-left: 10px;
          }
      }
  </style>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/template/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/template/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/template/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/template/assets/js/main.js"></script>

  </body>

  </html>