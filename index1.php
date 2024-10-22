<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sankhara Digital</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/images/logo/sh-logo.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

<section class="hero">
    <div class="container">
        <div class="video-container" data-src="assets/images/logo/sh-video.mp4">
            <video autoplay muted loop playsinline loading="lazy">
                <source src="assets/images/logo/sh-home.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="logo-section">
            <div class="logo-container">
                <div class="logo">
                    <!-- Replace with your SH logo -->
                    <img src="assets/images/logo/sh-logo.png" alt="SH Logo">
                </div>
            </div>
            <p class="hero-description">We Sankhara Group is a community of innovators committed to delivering exceptional products and services that inspire creativity and drive sustainable growth.</p>
        </div>
    </div>
</section>

<section class="services-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 text-start"> <!-- Left-aligned column -->
                <h2>We Deliver Extraordinary<br>Exceptional Experiences.</h2>
            </div>
            <div class="col-lg-6 text-end"> <!-- Right-aligned column -->
                <p>
                    We specialize in crafting exceptional digital experiences, seamlessly blending innovation 
                    and creativity to deliver unforgettable interactions that captivate and inspire our clients 
                    and their audiences.
                </p>
            </div>
        </div>
        <div class="container mt-5 mb-4">
            <div class="row services-container"> <!-- Added row for service cards -->
                <div class="col-lg-6 mb-4"> <!-- Each card occupies half the width -->
                    <div class="service-card d-flex flex-column p-4 align-items-center justify-content-center"> <!-- Added flex-column for consistent height -->
                        <div class="row align-items-center justify-content-center"> <!-- Align items vertically -->
                            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                                <img src="assets/images/services/1.png" alt="Sankhara Digital Icon" class="img-fluid"> <!-- Responsive image -->
                            </div>
                            <div class="col-lg-8 align-items-center justify-content-center">
                                <h3 class="text-center">Sankhara Digital</h3>
                                <p  class="text-center">
                                    We're a trusted partner in digital innovation, dedicated to helping businesses stay ahead of the curve.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="service-card d-flex flex-column p-4 align-items-center justify-content-center">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                                <img src="assets/images/services/2.png" alt="Sankhara Tech Icon" class="img-fluid">
                            </div>
                            <div class="col-lg-8 align-items-center justify-content-center">
                                <h3 class="text-center">Sankhara Tech</h3>
                                <p class="text-center">
                                    We're at the forefront of cutting-edge technologies, leveraging advancements like AI, machine learning, cloud computing, and big data to deliver tailored solutions that drive your business forward.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="service-card d-flex flex-column p-4 align-items-center justify-content-center">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                                <img src="assets/images/services/3.png" alt="Sankhara Courses Icon" class="img-fluid">
                            </div>
                            <div class="col-lg-8 align-items-center justify-content-center">
                                <h3 class="text-center">Sankhara Courses</h3>
                                <p class="text-center">
                                    We offer a comprehensive range of courses designed to equip you with the skills and knowledge needed to excel in today's digital world.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="service-card d-flex flex-column p-4 align-items-center justify-content-center">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                                <img src="assets/images/services/4.png" alt="Sankhara Support Icon" class="img-fluid">
                            </div>
                            <div class="col-lg-8 align-items-center justify-content-center">
                                <h3 class="text-center">Sankhara Support</h3>
                                <p class="text-center">
                                    Our dedicated support team is here to assist you 24/7, ensuring you have the resources and guidance needed for your digital journey.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="rotate-section">
    <div class="circle-text">
        <span>#</span>
        <span>S</span>
        <span>a</span>
        <span>n</span>
        <span>k</span>
        <span>h</span>
        <span>a</span>
        <span>r</span>
        <span>a</span>
        <span>G</span>
        <span>r</span>
        <span>o</span>
        <span>u</span>
        <span>p</span>
    </div>
    
</section> -->

<!-- Trusted Partners Section -->
<section id="trusted-partners" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Our Trusted Partners</h2>
        
        <div class="owl-carousel owl-carousel-partners owl-theme">
            <div class="item d-flex align-items-center justify-content-center">
                <img src="assets/images/partners/sktechnosys.png" alt="SK Technosys" class="img-fluid" style="max-height: 100px;">
            </div>
            <div class="item d-flex align-items-center justify-content-center">
                <img src="assets/images/partners/tradingview.png" alt="TradingView" class="img-fluid" style="max-height: 100px;">
            </div>
            <div class="item d-flex align-items-center justify-content-center">
                <img src="assets/images/partners/mpl.png" alt="MPL" class="img-fluid" style="max-height: 100px;">
            </div>
            <div class="item d-flex align-items-center justify-content-center">
                <img src="assets/images/partners/Darden.png" alt="Darden" class="img-fluid" style="max-height: 100px;">
            </div>
            <div class="item d-flex align-items-center justify-content-center">
                <img src="assets/images/partners/Khatabook.png" alt="Khatabook" class="img-fluid" style="max-height: 100px;">
            </div>
        </div>
    </div>
</section>

<!-- Press Release Section -->
<section id="press-release" class="py-5 bg-light">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Press Release</h2>
            <a href="path/to/your/press/releases" class="btn">See All <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="owl-carousel owl-carousel-press owl-theme">
            <div class="item">
                <div class="card h-100 shadow-sm">
                    <img src="assets/images/press/1.png" alt="Building a Website for SK Technosys" class="card-img-top" style="height: 150px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title">Building a Website and Digital Experience for SK Technosys</h6>
                        <p class="card-text">Integrating a new design system on existing screens and making them more responsive. E-Commerce App Development Services.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card h-100 shadow-sm">
                    <img src="assets/images/press/2.png" alt="Hassle-free App Features" class="card-img-top" style="height: 150px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title">Creating Hassle-free App Features for Medically Complex Children and Their Parents</h6>
                        <p class="card-text">Integrating a new design system on existing screens and making them more responsive. E-Commerce App Development Services.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card h-100 shadow-sm">
                    <img src="assets/images/press/3.png" alt="Design System for Pepperfry" class="card-img-top" style="height: 150px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title">Building a Design System for Pepperfry</h6>
                        <p class="card-text">Integrating a new design system on existing screens and making them more responsive. E-Commerce App Development Services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog mt-5 mb-3">
    <div class="container">
        <div class="blog-section-title">
            <h4 class="bg-light p-1">Blogs that make unleashing Impact.</h4>
        </div>
        <div class="owl-carousel owl-carousel-blog owl-theme">
            <div class="item blog-card p-1 bg-light d-flex flex-column align-items-center justify-content-center">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <img src="assets/images/blog/1.png" alt="Sankhara Support Icon" class="img-fluid p-2">
                    </div>
                    <div class="col-lg-6 align-items-center justify-content-center">
                        <h3 class="p-4">Tech news delivering insights, trends, and breakthroughs to keep you informed and inspired.</h3>
                    </div>
                </div>
            </div>
            
            <!-- Repeat similar blocks for additional blog entries -->
        </div>
    </div>
</section>
<section class="contact mt-5 mb-3">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-container">
                    <!-- Step Indicator -->
                    <span class="step-indicator" id="stepIndicator">STEP 1 OF 3</span>

                    <!-- Form Header -->
                    <h2 class="form-header pb-3">
                        Start your <b><span class="highlight-text">journey</span></b> with us today with applications
                    </h2>

                    <!-- Multi-step Form -->
                    <form id="multiStepForm" method="POST" action="subscribe.php">
                        <!-- Step 1: Name -->
                        <div class="step" id="step-1">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                            </div>
                            <button type="button" class="btn btn-primary" id="next-1">Next</button>
                        </div>

                        <!-- Step 2: Phone Number -->
                        <div class="step hidden" id="step-2">
                            <div class="mb-3">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
                            </div>
                            <button type="button" class="btn btn-secondary" id="prev-2">Previous</button>
                            <button type="button" class="btn btn-primary" id="next-2">Next</button>
                        </div>

                        <!-- Step 3: Email -->
                        <div class="step hidden" id="step-3">
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                            </div>
                            <button type="button" class="btn btn-secondary" id="prev-3">Previous</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>






<?php include 'footer.php' ?>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const steps = Array.from(document.querySelectorAll('.step'));
        let currentStep = 0;

        const updateStepIndicator = () => {
            document.getElementById('stepIndicator').innerText = `STEP ${currentStep + 1} OF 3`;
        };

        const showStep = (stepIndex) => {
            steps.forEach((step, index) => {
                step.classList.toggle('hidden', index !== stepIndex);
            });
            updateStepIndicator();
        };

        document.getElementById('next-1').addEventListener('click', function () {
            if (document.getElementById('name').value.trim()) {
                currentStep = 1;
                showStep(currentStep);
            } else {
                alert('Please enter your name.');
            }
        });

        document.getElementById('next-2').addEventListener('click', function () {
            if (document.getElementById('phone').value.trim()) {
                currentStep = 2;
                showStep(currentStep);
            } else {
                alert('Please enter your phone number.');
            }
        });

        document.getElementById('prev-2').addEventListener('click', function () {
            currentStep = 0;
            showStep(currentStep);
        });

        document.getElementById('prev-3').addEventListener('click', function () {
            currentStep = 1;
            showStep(currentStep);
        });

        // Handle form submission via AJAX
        document.getElementById('multiStepForm').addEventListener('submit', function (event) {
            event.preventDefault();
            
            const formData = new FormData(this);

            fetch(this.action, {
                method: this.method,
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    window.location.href = './';  // Redirect to index page
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error submitting the form. Please try again.');
            });
        });

        showStep(currentStep);
    });
</script>
<!-- Owl Carousel Initialization Script -->
<script>
    $(document).ready(function(){
        // Initialize Trusted Partners Carousel
        $('.owl-carousel-partners').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5 // Display 5 items on larger screens
                }
            }
        });

        // Initialize Press Release Carousel
        $('.owl-carousel-press').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2 // Display 2 items on small screens
                },
                1000: {
                    items: 4 // Display 3 items on larger screens
                }
            }
        });

        // Initialize Blog Carousel
        $('.owl-carousel-blog').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1 // 1 item for small screens
                },
                600: {
                    items: 2 // 2 items for medium screens
                },
                1000: {
                    items: 1 // 3 items for large screens
                }
            }
        });
    });
</script>


</body>
</html>
