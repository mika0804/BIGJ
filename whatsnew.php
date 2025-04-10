<!doctype html>
<html>

<?php include 'main/head.php'; ?>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

<body>
  <!-- Navbar -->
  <?php include 'main/nav.php'; ?>  
  <!-- End of Navbar -->

  <!-- Main -->
  <!-- Section Title -->
  <section id="newsLetter">
    <div class="container section-title" data-aos="zoom-out" data-aos-once="true">
      <h2 style="padding-top: 60px;">What's new</h2>
      <p>Be updated with us!</p>
    </div><!-- End Section Title -->

    <div class="newsContainer" id="newsContainer">
      <!-- News cards will be dynamically inserted here -->
    </div>

    <!-- Modal Structure -->
    <div id="newsModal" class="newsModal">
      <div class="newsModalCarousel">
        <a href="" data-fancybox="gallery" id="fancyboxLink">
          <img class="carouselImage" id="carouselImage" src="" alt="News Image">
        </a>
        <span class="close">&times;</span>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
        <div class="newsModalPagination" id="newsModalPagination"></div> 
      </div>
    </div>

    <script>
      const NewsData = [
        {
          "title": "BIG J DANCE COMMUNITY HIGHLIGHTS 2024",
          "img1": "assets/img/News/Newsletter2024P1.jpg",
          "img2": "assets/img/News/Newsletter2024P2.jpg",
          "img3": "",
          "img4": "",
          "img5": "",
        },
        {
          "title": "TRANSFORMING LIVES THROUGH DANCE AND FAITH",
          "img1": "assets/img/News/Q1Camp.jpg",
          "img2": "assets/img/News/Q1COVER.jpg",
          "img3": "assets/img/News/Q1EvangelisticEvents.jpg",
          "img4": "assets/img/News/Q1Revamp&Workshop.jpg",
          "img5": "",
        },
      ];

      let currentSlideIndex = 0;
      let currentImages = [];
      let startX = 0;
      let endX = 0;

      function changeSlide(n) {
        currentSlideIndex = (currentSlideIndex + n + currentImages.length) % currentImages.length;
        const currentImageSrc = currentImages[currentSlideIndex];
        document.getElementById('carouselImage').src = currentImageSrc;
        document.getElementById('fancyboxLink').href = currentImageSrc; // Update Fancybox link
        updatePaginationDots(); // Update dots on slide change
      }

      function updatePaginationDots() {
        const newsModalPagination = document.getElementById('newsModalPagination');
        newsModalPagination.innerHTML = ''; // Clear existing dots
        currentImages.forEach((_, index) => {
          const dot = document.createElement('span');
          dot.classList.add('dot');
          if (index === currentSlideIndex) {
            dot.classList.add('active');
          }
          dot.addEventListener('click', () => {
            currentSlideIndex = index;
            document.getElementById('carouselImage').src = currentImages[currentSlideIndex];
            document.getElementById('fancyboxLink').href = currentImages[currentSlideIndex]; // Update Fancybox link
            updatePaginationDots();
          });
          newsModalPagination.appendChild(dot);
        });
      }

      document.addEventListener('DOMContentLoaded', () => {
        const newsContainer = document.getElementById('newsContainer');
        const newsModal = document.getElementById('newsModal');
        const carouselImage = document.getElementById('carouselImage');
        const closeModal = document.querySelector('.close');
        const navbar = document.getElementById("navbar");

        newsContainer.innerHTML = ''; // Clear existing content

        NewsData.forEach((news, index) => {
          const newsCard = document.createElement('div');
          newsCard.classList.add('newsCard');

          const newsCircle1 = document.createElement('div');
          newsCircle1.classList.add('newsCircle');

          const newsCircle2 = document.createElement('div');
          newsCircle2.classList.add('newsCircle');

          const newsCardInner = document.createElement('div');
          newsCardInner.classList.add('newsCard-inner');

          const logoImage = document.createElement('img');
          logoImage.src = "assets/img/Logos/RedLogoTransparent.png";
          logoImage.alt = "Logo";
          logoImage.classList.add('newsLogo');

          const newsTitle = document.createElement('h3');
          newsTitle.classList.add('newsTitle');
          newsTitle.textContent = news.title;

          const clickMeText = document.createElement('div');
          clickMeText.classList.add('clickMeText');
          clickMeText.textContent = "(click me)";

          newsCardInner.appendChild(logoImage);
          newsCardInner.appendChild(newsTitle);
          newsCard.appendChild(newsCircle1);
          newsCard.appendChild(newsCircle2);
          newsCard.appendChild(newsCardInner);
          newsCard.appendChild(clickMeText);
          newsContainer.appendChild(newsCard);

          newsCard.addEventListener('click', () => {
            currentImages = [news.img1, news.img2, news.img3, news.img4, news.img5].filter(img => img !== "");
            currentSlideIndex = 0;
            const currentImageSrc = currentImages[currentSlideIndex];
            carouselImage.src = currentImageSrc;
            document.getElementById('fancyboxLink').href = currentImageSrc; // Set initial Fancybox link
            newsModal.style.display = "block";
            navbar.style.display = 'none';
            updatePaginationDots(); // Update dots when modal is opened
          });
        });

        closeModal.addEventListener('click', () => {
          newsModal.style.display = "none";
          navbar.style.display = 'block';
        });

        window.onclick = function(event) {
          if (event.target == newsModal) {
            newsModal.style.display = "none";
            navbar.style.display = 'block';
          }
        }

    newsModal.addEventListener('touchstart', (e) => {
      startX = e.touches[0].clientX;
    });

    newsModal.addEventListener('touchend', (e) => {
      endX = e.changedTouches[0].clientX;
      handleSwipe();
    });

    function handleSwipe() {
      const swipeDistance = endX - startX;
      if (swipeDistance > 50) {
        changeSlide(-1); // Swipe right
      } else if (swipeDistance < -50) {
        changeSlide(1); // Swipe left
      }
    }
      });
    </script>
  </section>
  <!-- End of Main -->
  <hr class="hrstyle">

  <!-- Footer -->
  <?php include 'main/footer.php'; ?>
  <!-- End of Footer-->

  <script>
    $(document).ready(function() {
      $('[data-fancybox="gallery"]').fancybox({
        // Optional: Add any Fancybox options here
      });
    });
  </script>
</body>

</html>
