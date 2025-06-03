// (Optional) If you want to add controls for the slider
const slides = document.querySelectorAll(".slides img");
let index = 0;

function showSlide() {
    slides.forEach((img, i) => {
        img.classList.remove("active");
        if (i === index) img.classList.add("active");
    });
    index = (index + 1) % slides.length; // Loop back to first slide
}

setInterval(showSlide, 5000); // Change every 3 seconds
showSlide(); // Show first slide on load


document.addEventListener("DOMContentLoaded", function() {
    const scrollBtn = document.querySelector(".scroll-up-btn");

    scrollBtn.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});

window.addEventListener("scroll", function() {
    const scrollBtn = document.querySelector(".scroll-up-btn");
    if (window.scrollY > 300) {
        scrollBtn.style.display = "block";
    } else {
        scrollBtn.style.display = "none";
    }
});

let currentSlide = 0;

function moveCarousel() {
    const carousel = document.querySelector('.carousel');
    const members = document.querySelectorAll('.team-member');

    currentSlide = (currentSlide + 1) % members.length;
    carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
}

// Move slides every 5 seconds instead of 3
setInterval(moveCarousel, 4000);