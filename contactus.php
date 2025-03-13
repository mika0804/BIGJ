<!doctype html>

<html>

<?php include 'main/head.php'; ?>

<body>
  <!-- Navbar -->
  <?php include 'main/nav.php'; ?>
  <!-- End of Navbar -->

  <!-- Main -->
  <!-- Content-->
  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="zoom-out" data-aos-once=“true”>
      <h2>Contact</h2>
      <p>You can be a part of the community by reaching out to us:</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4" data-aos="zoom-out" data-aos-once=“true”>
        <div class="col-lg-6" data-aos="zoom-out" data-aos-once=“true”>
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <p>Dr. Sixto Antonio Ave. Caniogan, Pasig City, 1606 Metro Manila</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-once=“true”>
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p>+639942618400</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-once=“true”>
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>bigj@globalsurge.org</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="row gy-4 mt-1" data-aos="zoom-out" data-aos-once=“true”>
        <div class="col-lg-6">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4028.600461305363!2d121.07583290979743!3d14.565940390727267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c87777938deb%3A0x7f7e5476021cee1c!2sGlobal%20Surge%20Worship%20Center%20Pasig!5e1!3m2!1sen!2sph!4v1726388639816!5m2!1sen!2sph"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="col-lg-6" data-aos="zoom-out" data-aos-once=“true”>
          <form action="forms/contact.php" method="POST" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit" name="submitContact">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->
  <!-- End of Content-->
   
  <!-- Footer -->
  <?php include 'main/footer.php'; ?>
  <!-- End of Footer-->

</body>

</html>