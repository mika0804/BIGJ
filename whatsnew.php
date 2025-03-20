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
  <div class="container section-title" data-aos="zoom-out" data-aos-once=“true”>
      <h2 style="padding-top: 60px;">What's new</h2>
      <p>Be updated with us!</p>
    </div><!-- End Section Title -->

  <div class="news-carousel" data-aos="zoom-out" data-aos-once=“true”></div>
  <script>
    'use strict';

  document.addEventListener('DOMContentLoaded', function () {
  const modal = document.getElementById('imageModal');
  const closeModalButton = document.querySelector('.close-modal');

  // Close modal when clicking on the close button
  closeModalButton.addEventListener('click', function () {
    modal.style.display = 'none';
    newsCarouselInstance.startAutoPlay();
  });

  // Close modal when clicking outside of the modal content
  window.addEventListener('click', function (event) {
    const modalContent = document.querySelector('.modal-content');
    
    // If the click is outside the modal content, close the modal
    if (event.target === modal) {
      modal.style.display = 'none';
      newsCarouselInstance.startAutoPlay();
    }
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const modalImg = document.getElementById('modalImage');
  const modalContainer = document.querySelector('.modal-left'); // The container that holds the image
  let zoomLevel = 1;
  let isDragging = false;
  let startX, startY, translateX = 0, translateY = 0;

  function handleZoomIn() {
    if (zoomLevel < 2) {
      zoomLevel += 0.2;
      updateTransform();
    }
  }

  function handleZoomOut() {
    if (zoomLevel > 1) {
      zoomLevel -= 0.2;
      resetPosition();
      updateTransform();
    }
  }

  function resetPosition() {
    translateX = 0;
    translateY = 0;
  }

  function updateTransform() {
    modalImg.style.transform = `scale(${zoomLevel}) translate(${translateX}px, ${translateY}px)`;
  }

  // Mouse events for dragging the image
  modalImg.addEventListener('mousedown', (e) => {
    if (zoomLevel > 1) {
      isDragging = true;
      startX = e.clientX - translateX;
      startY = e.clientY - translateY;
      modalImg.style.cursor = "grabbing";
    }
  });

  window.addEventListener('mousemove', (e) => {
    if (isDragging) {
      let newTranslateX = e.clientX - startX;
      let newTranslateY = e.clientY - startY;

      // Calculate boundaries
      const imgWidth = modalImg.offsetWidth * zoomLevel;
      const imgHeight = modalImg.offsetHeight * zoomLevel;
      const containerWidth = modalContainer.offsetWidth;
      const containerHeight = modalContainer.offsetHeight;

      const maxTranslateX = (imgWidth - containerWidth) / 2;
      const maxTranslateY = (imgHeight - containerHeight) / 2;

      // Restrict movement within boundaries
      translateX = Math.max(-maxTranslateX, Math.min(newTranslateX, maxTranslateX));
      translateY = Math.max(-maxTranslateY, Math.min(newTranslateY, maxTranslateY));

      updateTransform();
    }
  });

  window.addEventListener('mouseup', () => {
    isDragging = false;
    modalImg.style.cursor = zoomLevel > 1 ? "grab" : "default";
  });

  // Prevent text selection while dragging
  modalImg.addEventListener('dragstart', (e) => e.preventDefault());

  // Attach event listeners to zoom buttons
  document.querySelector('.zoom-in').addEventListener('click', handleZoomIn);
  document.querySelector('.zoom-out').addEventListener('click', handleZoomOut);
});

class NewsCarousel {
  constructor(el) {
    this.el = el;
    this.carouselData = [
      { 'id': '1', 'src': './assets/img/News/Q1Revamp&Workshop.jpg', 'src1': './assets/img/News/Q1Revamp&Workshop.jpg', 'title': 'Big J Dance Community 2024-Q1', 'shortDesc': 'Short Description for image 1', 'longDesc': 'This is a Long Description for image 1' },
      { 'id': '2', 'src': './assets/img/News/Q1COVER.jpg','src1': './assets/img/News/Q1COVER.jpg', 'title': 'Big J Partnership 2024-Q1', 'shortDesc': 'Short Description for image 2', 'longDesc': 'This is a Long Description for image 2' },
      { 'id': '3', 'src': './assets/img/News/Q1Camp.jpg','src1': './assets/img/News/Q1Camp.jpg', 'title': 'Big J Divergent Youth Camp 2024-Q1', 'shortDesc': 'Short Description for image 3', 'longDesc': 'This is a Long Description for image 3' },
      { 'id': '4', 'src': './assets/img/News/Q1EvangelisticEvents.jpg','src1': './assets/img/News/Q1EvangelisticEvents.jpg', 'title': 'Big J Dance Camp 2024-Q1', 'shortDesc': 'Short Description for image 4', 'longDesc': 'This is a Long Description for image 4' },
      { 'id': '5', 'src': './assets/img/News/Newsletter2024P1.jpg','src1': './assets/img/News/Newsletter2024P1.jpg', 'title': 'Big J Dance Community 2024-P1', 'shortDesc': 'Short Description for image 5', 'longDesc': 'This is a Long Description for image 5' },
      { 'id': '6', 'src': './assets/img/News/Newsletter2024P2.jpg','src1': './assets/img/News/Newsletter2024P2.jpg', 'title': 'Big J Stories to tell', 'shortDesc': 'Short Description for image 6', 'longDesc': 'This is a Long Description for image 6' },
    ];
    this.carouselInView = [1, 2, 3, 4, 5, 6];
    this.carouselContainer;
    this.autoPlayInterval;
  }

  mounted() {
    this.setupCarousel();
    this.startAutoPlay();
  }

  setupCarousel() {
    // Create the main carousel container
    const container = document.createElement('div');
    container.className = 'news-carousel-container';
    this.el.append(container);

    // Title and short description containers
    this.titleContainer = document.createElement('div');
    this.titleContainer.className = 'news-carousel-title';
    this.el.append(this.titleContainer);

    this.shortDescriptionContainer = document.createElement('div');
    this.shortDescriptionContainer.className = 'news-carousel-description';
    this.el.append(this.shortDescriptionContainer);

    this.carouselData.forEach((item, index) => {
      const carouselItem = document.createElement('img');
      container.append(carouselItem);
      carouselItem.className = `news-carousel-item news-carousel-item-${index + 1}`;
      carouselItem.src = item.src;
      carouselItem.setAttribute('loading', 'lazy');
      carouselItem.setAttribute('data-index', `${index + 1}`);
      carouselItem.setAttribute('data-title', item.title);
      carouselItem.setAttribute('data-shortDesc', item.shortDesc);
      carouselItem.setAttribute('data-longDesc', item.longDesc);
      carouselItem.setAttribute('data-src1', item.src1)
    });

    this.carouselContainer = container;

    // Add event listener for clicking left/right
    this.carouselContainer.addEventListener('click', (event) => this.handleClick(event));

    // Update title and description for the center image initially
    this.updateTitleAndDescription(3);
  }

  // Autoplay function that shifts to the next image
  startAutoPlay() {
    this.autoPlayInterval = setInterval(() => {
      this.next(); 
    }, 5000); 
  }

  stopAutoPlay() {
    clearInterval(this.autoPlayInterval); 
  }

  previous() {
    this.carouselData.unshift(this.carouselData.pop());
    this.carouselInView.push(this.carouselInView.shift());
    this.updateCarousel();
  }

  next() {
    this.carouselData.push(this.carouselData.shift());
    this.carouselInView.unshift(this.carouselInView.pop());
    this.updateCarousel();
  }

  updateTitleAndDescription(centerIndex) {
    const centerItem = this.carouselContainer.querySelector(`.news-carousel-item-${centerIndex}`);
    if (centerItem) {
      // const title = centerItem.getAttribute('data-title');
      // const shortDescription = centerItem.getAttribute('data-shortDesc');  

      // Update title and short description text
      this.titleContainer.textContent = title;
      this.shortDescriptionContainer.textContent = shortDescription;

      // Show the title and description
      this.titleContainer.classList.remove('hidden');
      this.shortDescriptionContainer.classList.remove('hidden');
    }
  }

  updateCarousel() {
    this.carouselInView.forEach((item, index) => {
      this.carouselContainer.children[index].className = `news-carousel-item news-carousel-item-${item}`;
    });

    // Update the title and description for the center item (position 3)
    this.updateTitleAndDescription(3);
  }

  // Detect Left/Right Click
  handleClick(event) {
    const clickX = event.clientX;
    const screenWidth = window.innerWidth;

    // Get the center image element (position 3)
    const centerItem = this.carouselContainer.querySelector('.news-carousel-item-3');

    // If center item is clicked, open modal
    if (event.target === centerItem) {
      this.openModal(centerItem.src);
      return; // Stop further execution if modal is opened
    }

    // Left/right navigation
    if (clickX < screenWidth / 2) {
      this.previous();
    } else {
      this.next();
    }
  }

  // Function to open modal and display image
  openModal(imageSrc) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalLongDesc = document.getElementById('modalLongDesc');
    
    this.resetPosition();
    modal.style.display = 'flex';

    const imageElement = [...this.carouselContainer.children].find(
      (img) => img.src.includes(imageSrc.split('/').pop())
    );

    if (imageElement) {
      modalImg.src = imageElement.getAttribute('data-src1')
      modalTitle.textContent = imageElement.getAttribute('data-title');
      modalLongDesc.textContent = imageElement.getAttribute('data-longDesc');
    }

    this.stopAutoPlay();

  }

    resetPosition() {
        const modalImg = document.getElementById('modalImage');
        if (modalImg) {
          modalImg.style.transform = 'scale(1) translate(0px, 0px)';
        }
      }
}

const el = document.querySelector('.news-carousel');
const newsCarouselInstance = new NewsCarousel(el);
newsCarouselInstance.mounted();

  </script>

  <!-- Modal Structure -->
  <div id="imageModal" class="modal">
    <div class="modal-content">
      <span class="close-modal">&times;</span>
      <div class="modal-container">
        <div class="modal-left">
          <img id="modalImage" src="" alt="Modal Image" >
          <button class="news-zoom-icon zoom-out" onClick={handleZoomOut}><i class="bi bi-zoom-out"></i></button>
          <button class="news-zoom-icon zoom-in" onClick={handleZoomIn}><i class="bi bi-zoom-in"></i></button>
        </div>
        <div class="modal-right">
          <h2 id="modalTitle">Title</h2>
          <hr class="modal-hr">
          <p id="modalLongDesc">Description</p>
        </div>
      </div>
    </div>
  </div>

  <!-- End of Main -->
  <hr class="hrstyle">

  <!-- Footer -->
  <?php include 'main/footer.php'; ?>
  <!-- End of Footer-->

</body>

</html>
