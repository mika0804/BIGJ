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
  <div class="row gy-4" data-aos="zoom-out" data-aos-once="true">
    <!-- Address -->
    <div class="col-lg-4 col-md-6 d-flex justify-content-center">
      <a 
        href="https://www.google.com/maps/search/?api=1&query=Dr.+Sixto+Antonio+Ave.+Caniogan,+Pasig+City,+1606+Metro+Manila" 
        target="_blank" 
        class="info-item text-center d-flex flex-column align-items-center"
        style="text-decoration: none; color: inherit; width: 100%;"
      >
        <i class="bi bi-geo-alt" style="font-size: 3rem; margin-bottom: 10px;"></i>
        <h3>Address</h3>
        <p>Dr. Sixto Antonio Ave. Caniogan, Pasig City, 1606 Metro Manila</p>
      </a>
    </div>

    <!-- Call Us -->
    <div class="col-lg-4 col-md-6 d-flex justify-content-center">
      <a 
        href="tel:+639942618400" 
        class="info-item text-center d-flex flex-column align-items-center" 
        style="text-decoration: none; color: inherit; width: 100%;"
      >
        <i class="bi bi-telephone" style="font-size: 3rem; margin-bottom: 10px;"></i>
        <h3>Call Us</h3>
        <p>+639942618400</p>
      </a>
    </div>

    <!-- Email Us -->
    <div class="col-lg-4 col-md-6 d-flex justify-content-center">
      <a 
        href="mailto:bigj@globalsurge.org" 
        class="info-item text-center d-flex flex-column align-items-center" 
        style="text-decoration: none; color: inherit; width: 100%;"
      >
        <i class="bi bi-envelope" style="font-size: 3rem; margin-bottom: 10px;"></i>
        <h3>Email Us</h3>
        <p>bigj@globalsurge.org</p>
      </a>
    </div>
  </div>
</div>

        </div><!-- End Info Item -->

      </div>

      <div class="container">
  <div class="row gy-4 mt-1" data-aos="zoom-out" data-aos-once="true">
    <div class="col-lg-12 d-flex justify-content-center align-items-center">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4028.600461305363!2d121.07583290979743!3d14.565940390727267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c87777938deb%3A0x7f7e5476021cee1c!2sGlobal%20Surge%20Worship%20Center%20Pasig!5e1!3m2!1sen!2sph!4v1726388639816!5m2!1sen!2sph"
        width="100%"
        height="400"
        style="border:0; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
  </div>
</div>
        </div><!-- End Google Maps -->

        <div class="col-lg-12 d-flex justify-content-center align-items-center" data-aos="zoom-out" data-aos-once=“true”>
          <form action="forms/contact.php" method="POST" class="php-email-form" style="margin-top: 30px;">
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
                <div class="error-message">err</div>
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
