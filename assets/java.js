// JavaScript for Tobok Restaurant Website

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {

    // Mobile Menu Toggle
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    if (menuToggle) {
        menuToggle.addEventListener('click', function () {
            navMenu.classList.toggle('active');
            // Change icon based on menu state
            const icon = this.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // Close mobile menu when clicking a link
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            if (navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                // Reset menu icon
                const icon = menuToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    });

    // Hero Slider Functionality
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.slider-btn.prev');
    const nextBtn = document.querySelector('.slider-btn.next');
    let currentSlide = 0;
    let slideInterval;

    // Function to show a specific slide
    function showSlide(n) {
        // Reset all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });

        // Reset all dots
        dots.forEach(dot => {
            dot.classList.remove('active');
        });

        // Update current slide index
        currentSlide = (n + slides.length) % slides.length;

        // Show the current slide and activate its dot
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }

    // Function to go to next slide
    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    // Function to go to previous slide
    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    // Initialize slider if elements exist
    if (slides.length > 0) {
        // Start automatic sliding
        slideInterval = setInterval(nextSlide, 5000);

        // Next button event
        if (nextBtn) {
            nextBtn.addEventListener('click', function () {
                clearInterval(slideInterval); // Reset interval on manual navigation
                nextSlide();
                slideInterval = setInterval(nextSlide, 5000); // Restart interval
            });
        }

        // Previous button event
        if (prevBtn) {
            prevBtn.addEventListener('click', function () {
                clearInterval(slideInterval); // Reset interval on manual navigation
                prevSlide();
                slideInterval = setInterval(nextSlide, 5000); // Restart interval
            });
        }

        // Dot navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function () {
                clearInterval(slideInterval); // Reset interval on manual navigation
                showSlide(index);
                slideInterval = setInterval(nextSlide, 5000); // Restart interval
            });
        });

        // Pause slider on hover
        const sliderContainer = document.querySelector('.slider-container');
        if (sliderContainer) {
            sliderContainer.addEventListener('mouseenter', function () {
                clearInterval(slideInterval);
            });

            sliderContainer.addEventListener('mouseleave', function () {
                slideInterval = setInterval(nextSlide, 5000);
            });
        }
    }

    // Featured Items Infinite Scroll Animation
    const itemsTrack = document.querySelector('.items-track');
    if (itemsTrack) {
        // Clone items for seamless infinite scroll
        const items = document.querySelectorAll('.item');
        const originalItemCount = items.length;

        // We already have duplicate items in HTML for seamless scrolling
        // Just ensure the animation runs smoothly
        itemsTrack.style.width = `calc(250px * ${originalItemCount * 2})`;

        // Pause animation on hover
        itemsTrack.addEventListener('mouseenter', function () {
            this.style.animationPlayState = 'paused';
        });

        itemsTrack.addEventListener('mouseleave', function () {
            this.style.animationPlayState = 'running';
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            // Skip if it's a link to a different page
            if (this.getAttribute('href') === '#') return;

            const targetId = this.getAttribute('href');
            if (targetId.startsWith('#')) {
                e.preventDefault();
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    // Get header height for offset
                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Form Validation for Contact Form (if added later)
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            let isValid = true;
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const messageInput = document.getElementById('message');

            // Reset previous error states
            [nameInput, emailInput, messageInput].forEach(input => {
                input.classList.remove('error');
                const errorElement = input.nextElementSibling;
                if (errorElement && errorElement.classList.contains('error-message')) {
                    errorElement.remove();
                }
            });

            // Validate name
            if (!nameInput.value.trim()) {
                showError(nameInput, 'Please enter your name');
                isValid = false;
            }

            // Validate email
            if (!emailInput.value.trim()) {
                showError(emailInput, 'Please enter your email');
                isValid = false;
            } else if (!isValidEmail(emailInput.value)) {
                showError(emailInput, 'Please enter a valid email address');
                isValid = false;
            }

            // Validate message
            if (!messageInput.value.trim()) {
                showError(messageInput, 'Please enter your message');
                isValid = false;
            }

            if (isValid) {
                // In a real application, you would submit the form data to a server
                alert('Thank you for your message! We will get back to you soon.');
                contactForm.reset();
            }
        });
    }

    // Helper function to show error messages
    function showError(input, message) {
        input.classList.add('error');
        const errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        errorElement.style.color = 'red';
        errorElement.style.fontSize = '0.9rem';
        errorElement.style.marginTop = '5px';
        errorElement.textContent = message;
        input.parentNode.insertBefore(errorElement, input.nextSibling);
    }

    // Helper function to validate email
    function isValidEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    // Add active class to nav links based on scroll position
    function highlightNavOnScroll() {
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        let currentSectionId = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.clientHeight;

            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSectionId = section.id;
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSectionId}`) {
                link.classList.add('active');
            } else if (currentSectionId === '' && link.getAttribute('href') === 'index.php') {
                link.classList.add('active');
            }
        });
    }

    // Call on scroll
    window.addEventListener('scroll', highlightNavOnScroll);

    // Initialize when page loads
    highlightNavOnScroll();
});