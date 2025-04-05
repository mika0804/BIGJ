<!doctype html>

<html>

<?php include 'main/head.php'; ?>

<body>
  <!-- Navbar -->
  <?php include 'main/nav.php'; ?>
  <!-- End of Navbar -->

  <!-- Main -->
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <!-- Calendar Section -->
  <section id="calendar">
  <div class="container" style="margin: 20px auto; text-align: center; max-width: 1200px;">
    <div class="container section-title" data-aos="zoom-out" data-aos-once=“true”>
        <h2 >Calendar</h2>
    </div>
    <div style="border: 2px solid rgb(158, 37, 37); border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <iframe 
            src="https://outlook.office365.com/owa/calendar/9a127b550d57423c82ebcdd2903528bd@globalsurge.org/dc93431b4d3e41cca3958b83a454d56410072994079746236359/calendar.html" 
            scrolling="yes" 
            width="100%" 
            height="800" 
            frameborder="0" 
            style="border: none;">
        </iframe>
    </div>
  </div>
</section>

  <hr class="hrstyle">

  <section id="involvement-forms" data-aos="zoom-out" data-aos-once=“true”>>
  <div class="container section-title" data-aos="zoom-out" data-aos-once=“true”>
      <h2 >Involvement Forms</h2>
  </div>
  <div id="formContainer" ></div>

  <script>
  const formsData = [
      {
          "title": "Dance Crew Registration",
          "officeLink": "https://forms.office.com/r/pcedSfGbfK",
          "officeQR": "assets/img/crew.jpg",
          "googleLink": "https://forms.gle/rzvNGMqGWKZxqr549",
          "googleQR": "assets/img/Forms/DanceCrewRegGQR.jpg"
      },
      {
          "title": "Dance Workshop Registration",
          "officeLink": "https://forms.office.com/r/rjTzhDRTy9",
          "officeQR": "assets/img/crews.jpg",
          "googleLink": "https://forms.gle/5hTqrmZdtLC8VcZW6",
          "googleQR": "assets/img/Forms/DanceWorkshopGQR.jpg"
      },
      {
          "title": "Camp Volunteer Registration",
          "officeLink": "https://forms.office.com/r/iBgeRWDVFS",
          "officeQR": "assets/img/dancers.jpg",
          "googleLink": "https://forms.gle/HA4aPG1BdsQV2Pz56",
          "googleQR": "assets/img/Forms/CampVolunteerGQR.jpg"
      },
      {
          "title": "Events' Registration",
          "officeLink": "https://forms.office.com/r/dTeVZifBVL",
          "officeQR": "assets/img/events.jpg",
          "googleLink": "https://forms.gle/FMZqmMSG3TUPC34EA",
          "googleQR": "assets/img/Forms/EventRegGQR.jpg"
      }
  ];

  const formContainer = document.getElementById("formContainer");

  formsData.forEach(form => {
      const formCard = document.createElement("div");
      formCard.className = "formCard";

      formCard.innerHTML = `
          <div class="formBg">
              <div class="formContent">
                  <h2>${form.title}</h2>
                  <div class="formLinks">
                      <div class="pGroup">
                          <p> MS Office Form</p>
                          <p>Google Form</p>
                      </div>
                      <div class="qrGroup">
                          <img src="${form.officeQR}" alt="Office QR Code">
                          <img src="${form.googleQR}" alt="Google QR Code">
                      </div>
                      <div class="linkGroup">
                          <a href="${form.officeLink}" target="_blank">Register via MS Office Form</a>
                          <a href="${form.googleLink}" target="_blank">Register via Google Form</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="formBlob"></div>
      `;

      formContainer.appendChild(formCard);
  });
  </script>
</section>

  <!-- End of Main -->
  <hr class="hrstyle">

  <!-- Footer -->
  <?php include 'main/footer.php'; ?>
  <!-- End of Footer-->

  <!-- Loading Overlay -->
  <div class="loading-overlay">
    <div class="spinner"></div>
  </div>
</body>
</html>
