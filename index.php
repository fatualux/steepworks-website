<?php
require_once 'includes/config.php';
$page_title = 'Home - Steep Works Construction';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <!-- Hero Section with Side Images -->
        <section class="hero position-relative">
            <div class="hero-overlay"></div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Content -->
                    <div class="col-12 col-lg-4 text-center text-white d-flex flex-column justify-content-center">
                        <p class="lead mb-4">Specialist Excavation Services</p>
                        <p class="h5 mb-5">Expert spider digger operations for challenging terrain in Christchurch</p>
                        <div class="hero-buttons">
                            <a href="gallery.php" class="btn btn-primary btn-lg me-3">View Our Work</a>
                            <a href="contact.php" class="btn btn-outline-light btn-lg">Get in Touch</a>
                        </div>
                    </div>
                    <!-- Main Image -->
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="hero-main-image">
                            <a href="static/img/homepage_`.jpg" data-lightbox="gallery">
                                <img src="static/img/homepage_`.jpg" alt="Our Work" class="img-fluid w-100 h-auto">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Welcome Section with Image -->
        <section class="welcome-section py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 class="section-title">Welcome to Steep Works</h2>
                        <p class="lead mb-4">Civil Engineering & Specialist Excavation</p>
                        <p>Our business utilizes a specialist excavator, known as a spider digger, to perform various tasks such as drilling, digging, trenching, landscaping, demolition and more. With its unique, multi-legged design and advanced stability controls, the Spider Digger can navigate steep slopes, wetlands, and delicate ecosystems effortlessly while minimizing environmental impact.</p>
                        <div class="row mt-4">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-check-circle fa-2x"></i>
                                    </div>
                                    <div>
                                        <h4 class="h5 mb-1">Expert Team</h4>
                                        <p class="mb-0">Certified professionals with years of experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-check-circle fa-2x"></i>
                                    </div>
                                    <div>
                                        <h4 class="h5 mb-1">Quality Service</h4>
                                        <p class="mb-0">Commitment to excellence in every project</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="static/img/homepage_2.jpg" alt="Spider Digger in Action" class="img-fluid rounded shadow">
                            <div class="experience-badge bg-primary text-white p-4 rounded shadow text-center">
                                <h3 class="mb-0">10+</h3>
                                <p class="mb-0">Years Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section with Image -->
        <section class="services-section py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                        <h2 class="section-title">Our Services</h2>
                        <p class="lead mb-4">Comprehensive construction solutions</p>
                        <p>We offer a wide range of specialized services to meet all your construction and excavation needs. Our team of experts is equipped with the latest technology and equipment to handle projects of any size and complexity.</p>
                        <div class="mt-4">
                            <a href="services.php" class="btn btn-primary">View All Services</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <img src="static/img/homepage_3.jpg" alt="Our Services" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Showcase -->
        <section class="project-showcase py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Featured Projects</h2>
                    <p class="lead">See our work in action</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="project-card">
                            <img src="static/img/homepage_`.jpg" alt="Project 1" class="img-fluid rounded">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h3>Residential Development</h3>
                                    <p>Steep slope excavation for luxury homes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-card">
                            <img src="static/img/461600486_17878955622149660_3469010709121617236_n.jpg" alt="Project 2" class="img-fluid rounded">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h3>Commercial Site Work</h3>
                                    <p>Site preparation for new retail complex</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-card">
                            <img src="static/img/460016881_17877218280149660_7424146838941776323_n.jpg" alt="Project 3" class="img-fluid rounded">
                            <div class="project-overlay">
                                <div class="project-info">
                                    <h3>Landscaping</h3>
                                    <p>Precision grading for outdoor living spaces</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">What Our Clients Say</h2>
                    <p class="lead">Hear from our satisfied customers</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="mb-3 text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fst-italic">"Steep Works transformed our dream home into reality. Their attention to detail and professionalism was outstanding throughout the entire process."</p>
                                <div class="d-flex align-items-center mt-4">
                                    <div class="me-3">
                                        <div class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <span class="h5 mb-0">JD</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">John &amp; Sarah D.</h5>
                                        <p class="text-muted small mb-0">Fendalton, Christchurch</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more testimonial cards as needed -->
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section py-5 bg-primary text-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <h2 class="h1 mb-3">Ready to Start Your Project?</h2>
                        <p class="lead mb-0">Contact us today for a free consultation and quote.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="contact.php" class="btn btn-light btn-lg px-4">Get in Touch</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
