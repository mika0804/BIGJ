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
  <title>Registration Links</title>
  <style>
    /* General Body Styling */
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 20px;
    }

    /* Container Styling */
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background: white;
      border-radius: 8px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Section Styling */
    .link-section {
      margin: 20px 0;
      text-align: center;
    }
    .link-section h1 {
      font-size: 24px;
      margin-bottom: 10px;
      color: #333;
    }
    .link-section a {
      display: inline-block;
      text-decoration: none;
      background-color: #ff4d4d;
      color: white;
      padding: 15px 30px;
      border-radius: 5px;
      font-size: 16px;
      font-weight: bold;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s, transform 0.3s;
    }
    .link-section a:hover {
      background-color: rgb(156, 97, 97);
      transform: scale(1.05);
    }

    /* Loading Overlay */
    .loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.8);
      display: flex;
      justify-content: center;
      align-items: center;
      visibility: hidden;
      z-index: 999;
    }
    .loading-overlay.active {
      visibility: visible;
    }
    .spinner {
      border: 4px solid #f3f3f3;
      border-top: 4px solid red;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      animation: spin 1s linear infinite;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    hr {
      border: none;
      height: 1px;
      background-color: #ddd;
      margin: 20px 0;
    }
  </style>
  <script>
    function showLoading(event) {
      event.preventDefault();
      const loadingOverlay = document.querySelector('.loading-overlay');
      loadingOverlay.classList.add('active');
      setTimeout(() => {
        window.location.href = event.target.href;
      }, 1000);
    }
  </script>
</head>
<body>
  <!-- Calendar Section -->
  <div class="container" style="margin: 20px auto; text-align: center; max-width: 1200px;">
    <h2 style="margin-bottom: 20px;">Event Calendar</h2>
    <div style="border: 2px solidrgb(158, 37, 37); border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
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

  </div>

  <hr>

  <!-- Office Form Links -->
  <div class="container">
    <h1 style="text-align: center;">Registration Links (Office Form)</h1>
    <div class="link-section" style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px; gap: 20px;">
        <div style="text-align: center; flex: 1;">
            <h2>Dance Crew Registration</h2>
            <a href="https://forms.office.com/r/pcedSfGbfK" target="_blank">Register Here</a>
        </div>
        <div style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <img src="assets/img/crew.jpg" alt="Dance Crew QR Code" style="width: 150px; height: 150px;">
        </div>
    </div>
    <div class="link-section" style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px; gap: 20px;">
        <div style="text-align: center; flex: 1;">
            <h2>Dance Workshop Registration</h2>
            <a href="https://forms.office.com/r/iBgeRWDVFS" target="_blank">Register Here</a>
        </div>
        <div style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <img src="assets/img/dancers.jpg" alt="Dance Workshop QR Code" style="width: 150px; height: 150px;">
        </div>
    </div>
    <div class="link-section" style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px; gap: 20px;">
        <div style="text-align: center; flex: 1;">
            <h2>Camp Volunteer Registration</h2>
            <a href="https://forms.office.com/r/rjTzhDRTy9" target="_blank">Register Here</a>
        </div>
        <div style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <img src="assets/img/crews.jpg" alt="Camp Volunteer QR Code" style="width: 150px; height: 150px;">
        </div>
    </div>
    <div class="link-section" style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px; gap: 20px;">
        <div style="text-align: center; flex: 1;">
            <h2>Events' Registration</h2>
            <a href="https://forms.office.com/r/dTeVZifBVL" target="_blank">Register Here</a>
        </div>
        <div style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <img src="assets/img/events.jpg" alt="Events QR Code" style="width: 150px; height: 150px;">
        </div>
    </div>
</div>

</div>

  </div>

  <hr>

  <!-- Google Form Links -->
  <div class="container">
    <h1 style="text-align: center;">Registration Links (Google Form)</h1>
    <div class="link-section" style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px; gap: 20px;">
        <div style="text-align: center; flex: 1;">
            <h2>Dance Crew Registration</h2>
            <a href="https://forms.gle/8kqAsHFXDAF2EhRU8" target="_blank">Register Here</a>
        </div>
        <div style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <img src="assets/img/form1.jpg" alt="Dance Crew QR Code" style="width: 150px; height: 150px;">
        </div>
    </div>
    <div class="link-section" style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px; gap: 20px;">
        <div style="text-align: center; flex: 1;">
            <h2>Dance Workshop Registration</h2>
            <a href="https://forms.gle/vCb8eeteKF8EwieH7" target="_blank">Register Here</a>
        </div>
        <div style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <img src="assets/img/form2.jpg" alt="Dance Workshop QR Code" style="width: 150px; height: 150px;">
        </div>
    </div>
    <div class="link-section" style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px; gap: 20px;">
        <div style="text-align: center; flex: 1;">
            <h2>Camp Volunteer Registration</h2>
            <a href="https://forms.gle/aTaxLFwSFPCv4Da2A" target="_blank">Register Here</a>
        </div>
        <div style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <img src="assets/img/form3.jpg" alt="Camp Volunteer QR Code" style="width: 150px; height: 150px;">
        </div>
    </div>
    <div class="link-section" style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px; gap: 20px;">
        <div style="text-align: center; flex: 1;">
            <h2>Events' Registration</h2>
            <a href="https://forms.gle/VHW2oGeH39oGE1578L" target="_blank">Register Here</a>
        </div>
        <div style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <img src="assets/img/form4.jpg" alt="Events QR Code" style="width: 150px; height: 150px;">
        </div>
    </div>
</div>

  </div>

  <!-- Loading Overlay -->
  <div class="loading-overlay">
    <div class="spinner"></div>
  </div>
</body>
</html>


</body>
</html>

  
  <!-- End of Main -->
  <hr class="hrstyle">

  <!-- Footer -->
  <?php include 'main/footer.php'; ?>
  <!-- End of Footer-->

</body>

</html>