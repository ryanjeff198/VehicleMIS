const slides = document.querySelectorAll(".carousel-slide");
const dots = document.querySelectorAll(".dot");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");

let currentIndex = 0;
const totalSlides = slides.length;
let autoPlayInterval;

// Function to update the slide
function updateCarousel(index) {
    const newTransformValue = -index * 100 + "%";
    document.querySelector(".carousel").style.transform = "translateX(" + newTransformValue + ")";

    // Update active dot
    dots.forEach(dot => dot.classList.remove("active"));
    dots[index].classList.add("active");

    currentIndex = index;
}

// Function to go to the next slide
function nextSlide() {
    let newIndex = (currentIndex + 1) % totalSlides;
    updateCarousel(newIndex);
}

// Function to go to the previous slide
function prevSlide() {
    let newIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel(newIndex);
}

// Auto-play function
function startAutoPlay() {
    autoPlayInterval = setInterval(nextSlide, 4000);
}

// Stop auto-play when interacting
function stopAutoPlay() {
    clearInterval(autoPlayInterval);
    startAutoPlay(); // Restart autoplay after user interaction
}

// Event Listeners
nextBtn.addEventListener("click", () => {
    stopAutoPlay();
    nextSlide();
});

prevBtn.addEventListener("click", () => {
    stopAutoPlay();
    prevSlide();
});

// Dot navigation
dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
        stopAutoPlay();
        updateCarousel(index);
    });
});

//NAV BAR FUNCTION
function showSidebar(){
  const sidebar = document.querySelector('.sidebar')
  sidebar.style.display = 'flex'
}
function hideSidebar(){
  const sidebar = document.querySelector('.sidebar')
  sidebar.style.display = 'none'
}

// Start autoplay when the page loads
startAutoPlay();

const swiper = new Swiper('.slider-wrapper', {
    loop: true,
    grabCursor: true,
    spaceBetween: 30,
    // Pagination bullets
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // Responsive breakpoints
    breakpoints: {
      0: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 2
      },
      1024: {
        slidesPerView: 3
      }
    }
  });


  
  function toggleFAQ(button) {
    var answer = button.nextElementSibling;
  
    // Check if the answer is already visible or not
    if (answer.style.height && answer.style.height !== "0px") {
        // If it's visible, hide it
        answer.style.height = "0px";  // Collapse the answer
        answer.classList.remove("show");
    } else {
        // If it's hidden, show it with animation
        answer.style.height = answer.scrollHeight + "px";  // Expand to fit the content
        answer.classList.add("show");
    }
  }