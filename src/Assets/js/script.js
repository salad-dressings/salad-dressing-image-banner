const images = document.getElementById('carouselImages');
  const indicators = document.getElementById('carouselIndicators').children;
  let currentIndex = 0;
  const totalSlides = images.children.length;

  function updateCarousel() {
    const slideWidth = document.querySelector('.carousel-slide').offsetWidth; // Get the width of one slide
    images.style.transform = `translateX(-${currentIndex * slideWidth}px)`; // Move the carousel
    Array.from(indicators).forEach((indicator, index) => {
      indicator.classList.toggle('active-indicator', index === currentIndex);
    });
  }

  document.getElementById('prevBtn').addEventListener('click', () => {
    currentIndex = (currentIndex === 0) ? totalSlides - 1 : currentIndex - 1;
    updateCarousel();
  });

  document.getElementById('nextBtn').addEventListener('click', () => {
    currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
    updateCarousel();
  });

  Array.from(indicators).forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
      currentIndex = index;
      updateCarousel();
    });
  });

  window.addEventListener('resize', updateCarousel); // Ensure it resizes correctly
  updateCarousel(); // Initial call to set up the carousel