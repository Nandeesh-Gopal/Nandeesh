// Responsive Navigation
function toggleMenu() {
    const navLinks = document.getElementById('navLinks');
    navLinks.classList.toggle('show');
}

// Testimonial Slider Auto Scroll
let index = 0;
function slideTestimonials() {
    const testimonials = document.getElementById('testimonialSlider');
    index = (index + 1) %    testimonials.children.length;
    testimonials.style.transform = `translateX(${-index * 100}%)`;
}

setInterval(slideTestimonials, 3000);

