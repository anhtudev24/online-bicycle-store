/*== Banner==*/
let currentSlide = 0;
const bannerImages = document.querySelector('.banner-images');
const slides = document.querySelectorAll('.banner-images img');
const totalSlides = slides.length;

function updateSlidePosition() {
  const slideWidth = slides[0].clientWidth;
  bannerImages.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
}

function changeSlide(step) {
  currentSlide += step;
  if (currentSlide < 0) currentSlide = totalSlides - 1;
  if (currentSlide >= totalSlides) currentSlide = 0;
  updateSlidePosition();
}

let commentSlide = 0;
const slidesContainer = document.querySelector('.comment-images');
const commentTotal = slidesContainer.children.length;

function changeCommentSlide(direction) {
  commentSlide = (commentSlide + direction + commentTotal) % commentTotal;
  slidesContainer.style.transform = `translateX(-${commentSlide * 100}%)`;
}

// Tự động chuyển slide mỗi 4 giây
setInterval(() => {
  changeCommentSlide(1);
}, 4000);


