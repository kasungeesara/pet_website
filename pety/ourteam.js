let currentSlide = 0;

function showSlide(slideIndex) {
    const slides = document.querySelectorAll('.slide');

    if (slideIndex >= slides.length) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    slides[slideIndex].style.display = 'block';
    currentSlide = slideIndex;
}

function nextSlide() {
    currentSlide++;
    showSlide(currentSlide);
}

// Show the first slide initially
showSlide(currentSlide);
