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
        threshold: 0.5
    });

    document.querySelectorAll('.fade-in').forEach((element) => {
        observer.observe(element);
    });

    // Main Page Carousel
    const mainCarouselImages = document.querySelectorAll('#homeCarousel .carousel-item');
    let mainCurrentImageIndex = 0;

    function showMainImage(index) {
        mainCarouselImages.forEach((img, i) => {
            img.classList.toggle('active', i === index);
        });
    }

    function nextMainImage() {
        mainCurrentImageIndex = (mainCurrentImageIndex + 1) % mainCarouselImages.length;
        showMainImage(mainCurrentImageIndex);
    }

    function prevMainImage() {
        mainCurrentImageIndex = (mainCurrentImageIndex - 1 + mainCarouselImages.length) % mainCarouselImages.length;
        showMainImage(mainCurrentImageIndex);
    }

    document.querySelector('.carousel-control-prev').addEventListener('click', prevMainImage);
    document.querySelector('.carousel-control-next').addEventListener('click', nextMainImage);

    // Auto-play for Main Page Carousel
    setInterval(nextMainImage, 3000);

    // About Us Carousel
    const teamCarouselImages = document.querySelectorAll('#teamCarousel .carousel-item');
    let teamCurrentImageIndex = 0;

    function showTeamImage(index) {
        teamCarouselImages.forEach((img, i) => {
            img.classList.toggle('active', i === index);
        });
    }

    function nextTeamImage() {
        teamCurrentImageIndex = (teamCurrentImageIndex + 1) % teamCarouselImages.length;
        showTeamImage(teamCurrentImageIndex);
    }

    function prevTeamImage() {
        teamCurrentImageIndex = (teamCurrentImageIndex - 1 + teamCarouselImages.length) % teamCarouselImages.length;
        showTeamImage(teamCurrentImageIndex);
    }

    document.querySelector('#teamCarousel .carousel-control-prev').addEventListener('click', prevTeamImage);
    document.querySelector('#teamCarousel .carousel-control-next').addEventListener('click', nextTeamImage);

    // Auto-play for Team Carousel
    setInterval(nextTeamImage, 3000);

    // Simple Image Lightbox
    document.querySelectorAll('.menu-item img').forEach(image => {
        image.addEventListener('click', () => {
            const lightbox = document.createElement('div');
            lightbox.id = 'lightbox';
            document.body.appendChild(lightbox);
            const img = document.createElement('img');
            img.src = image.src;
            lightbox.appendChild(img);
            lightbox.addEventListener('click', () => {
                lightbox.remove();
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    lightbox.remove();
                }
            });
        });
    });

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
    const homeCarousel = document.getElementById('homeCarousel');
    if (homeCarousel) {
        homeCarousel.setAttribute('role', 'region');
        homeCarousel.setAttribute('aria-label', 'Image Carousel');
    }

    const teamCarousel = document.getElementById('teamCarousel');
    if (teamCarousel) {
        teamCarousel.setAttribute('role', 'region');
        teamCarousel.setAttribute('aria-label', 'Team Image Carousel');
    }

    // Adding keyboard controls
    document.querySelectorAll('.carousel-control-prev, .carousel-control-next').forEach(control => {
        control.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                control.click();
            }
        });
    });
});
