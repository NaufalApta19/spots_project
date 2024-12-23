const sliderContainer = document.querySelector('.slider-container');
const slides = document.querySelectorAll('.slide');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');

let currentSlideIndex = 0;

function showSlide(index) {
    const totalSlides = slides.length;
    const offset = index * 100;
    sliderContainer.style.transform = `translateX(-${offset}%)`;
}


leftArrow.addEventListener('click', () => {
    currentSlideIndex = (currentSlideIndex === 0) ? slides.length - 1 : currentSlideIndex - 1;
    showSlide(currentSlideIndex);
});


rightArrow.addEventListener('click', () => {
    currentSlideIndex = (currentSlideIndex + 1) % slides.length;
    showSlide(currentSlideIndex);
});


showSlide(currentSlideIndex);
