document.addEventListener('DOMContentLoaded', function() {
    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Responsive Navbar Toggle
    const navbarToggle = document.getElementById('navbar-toggle');
    const navbarMenu = document.getElementById('navbar-menu');

    if (navbarToggle && navbarMenu) {
        navbarToggle.addEventListener('click', () => {
            navbarMenu.classList.toggle('active');
        });
    }

    // Animate Elements on Scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, {
        threshold: 0.5 // Adjust the threshold value based on when you want the animation to trigger
    });

    document.querySelectorAll('.fade-in').forEach((element) => {
        observer.observe(element);
    });

    // Main Page Carousel
    const carouselImages = document.querySelectorAll('#carousel img');
    let currentImageIndex = 0;

    function showImage(index) {
        carouselImages.forEach((img, i) => {
            img.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % carouselImages.length;
        showImage(currentImageIndex);
    }

    function prevImage() {
        currentImageIndex = (currentImageIndex - 1 + carouselImages.length) % carouselImages.length;
        showImage(currentImageIndex);
    }

    document.querySelector('.carousel-control-prev').addEventListener('click', prevImage);
    document.querySelector('.carousel-control-next').addEventListener('click', nextImage);

    // Auto-play
    setInterval(nextImage, 3000); // Change image every 3 seconds

    // About Us Carousel
    const teamImages = document.querySelectorAll('.team-container img');
    let currentTeamImageIndex = 0;

    function showTeamImage(index) {
        teamImages.forEach((img, i) => {
            img.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextTeamImage() {
        currentTeamImageIndex = (currentTeamImageIndex + 1) % teamImages.length;
        showTeamImage(currentTeamImageIndex);
    }

    function prevTeamImage() {
        currentTeamImageIndex = (currentTeamImageIndex - 1 + teamImages.length) % teamImages.length;
        showTeamImage(currentTeamImageIndex);
    }

    document.querySelector('.team-control-prev').addEventListener('click', prevTeamImage);
    document.querySelector('.team-control-next').addEventListener('click', nextTeamImage);

    // Auto-play
    setInterval(nextTeamImage, 3000); // Change image every 3 seconds
});

// Simple Image Lightbox
document.querySelectorAll('.menu-item img').forEach(image => {
    image.addEventListener('click', () => {
        const lightbox = document.createElement('div');
        lightbox.id = 'lightbox';
        document.body.appendChild(lightbox);
        const img = document.createElement('img');
        img.src = image.src;
        while (lightbox.firstChild) {
            lightbox.removeChild(lightbox.firstChild);
        }
        lightbox.appendChild(img);
        lightbox.addEventListener('click', () => {
            lightbox.remove();
        });
    });
});

// Contact Form Validation
const contactForm = document.getElementById('contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        let errorMessage = '';

        if (!name) errorMessage = 'Name is required.';
        else if (!email) errorMessage = 'Email is required.';
        else if (!message) errorMessage = 'Message is required.';

        if (errorMessage) {
            const errorDiv = document.getElementById('error-message');
            errorDiv.textContent = errorMessage;
            errorDiv.style.display = 'block';
        } else {
            contactForm.submit();
        }
    });
}

// Sticky Navbar
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > navbar.offsetHeight + 150) {
        navbar.classList.add('nav-active');
    } else {
        navbar.classList.remove('nav-active');
    }
});

// Adding ARIA roles
const carousel = document.getElementById('homeCarousel');
carousel.setAttribute('role', 'region');
carousel.setAttribute('aria-label', 'Image Carousel');

// Adding keyboard controls
document.querySelector('.carousel-control-prev').addEventListener('keydown', (e) => {
    if (e.key === 'Enter' || e.key === ' ') {
        prevImage();
    }
});

document.querySelector('.carousel-control-next').addEventListener('keydown', (e) => {
    if (e.key === 'Enter' || e.key === ' ') {
        nextImage();
    }
});

document.querySelectorAll('.menu-item img').forEach(image => {
    image.addEventListener('click', () => {
        const lightbox = document.createElement('div');
        lightbox.id = 'lightbox';
        document.body.appendChild(lightbox);
        const img = document.createElement('img');
        img.src = image.src;
        lightbox.appendChild(img);

        // Close lightbox on click
        lightbox.addEventListener('click', () => {
            lightbox.remove();
        });

        // Close lightbox on 'Esc' key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                lightbox.remove();
            }
        });
    });
});

