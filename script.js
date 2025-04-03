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