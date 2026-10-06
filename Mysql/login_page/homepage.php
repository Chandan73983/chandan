<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name | Portfolio</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Custom CSS (Optional) -->
    <style>
    /* Hero section subtle gradient */
    .hero-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    /* Profile image styling */
    .profile-img {
        width: 280px;
        height: 280px;
        object-fit: cover;
        border: 5px solid #fff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* Smooth scroll for nav links */
    html {
        scroll-behavior: smooth;
    }

    /* Skill icon size */
    .skill-icon {
        font-size: 2.5rem;
    }
    </style>
</head>

<body>

    <!-- ==================== NAVBAR ==================== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#home">
                <i class="bi bi-code-slash me-2"></i>Your Name
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><button type="button"
                                class="btn btn-primary">LogOut</button></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php"><button type="button"
                                class="btn btn-primary">Register</button></a></li>
                </ul>
                <nav class="navbar bg-body-dark">
                    <div class="container-fluid">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </nav>

    <!-- ==================== HERO SECTION ==================== -->
    <section id="home" class="hero-section min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 text-center text-lg-start">
                    <span class="badge bg-primary mb-3">Welcome to my portfolio</span>
                    <h1 class="display-4 fw-bold mb-3">
                        Hi, I'm <span class="text-primary">Your Name</span>
                    </h1>
                    <p class="lead text-muted mb-4">
                        A passionate Frontend Developer specializing in Bootstrap, responsive design, and modern web
                        technologies.
                    </p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start flex-wrap">
                        <a href="#contact" class="btn btn-primary btn-lg px-4">
                            <i class="bi bi-briefcase me-2"></i>Hire Me
                        </a>
                        <a href="#projects" class="btn btn-outline-dark btn-lg px-4">
                            <i class="bi bi-eye me-2"></i>View Work
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb"
                        class="profile-img rounded-circle img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== ABOUT SECTION ==================== -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">About Me</h2>
                <p class="text-muted">Get to know me better</p>
            </div>
            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x400" alt="About" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6">
                    <h3 class="fw-bold mb-3">A Frontend Developer based in India</h3>
                    <p class="text-muted mb-3">
                        I'm a passionate web developer with 2+ years of experience building responsive,
                        user-friendly websites using Bootstrap, HTML, CSS, and JavaScript.
                    </p>
                    <p class="text-muted mb-4">
                        My focus is on clean code, mobile-first design, and delivering pixel-perfect
                        experiences across all devices.
                    </p>
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <p class="mb-1"><strong>Name:</strong> Your Name</p>
                            <p class="mb-1"><strong>Experience:</strong> 2+ Years</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-1"><strong>Location:</strong> India</p>
                            <p class="mb-1"><strong>Freelance:</strong> Available</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">
                        <i class="bi bi-download me-2"></i>Download CV
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== SKILLS SECTION ==================== -->
    <section id="skills" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">My Skills</h2>
                <p class="text-muted">Technologies I work with</p>
            </div>
            <div class="row g-4">

                <!-- Skill 1 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <i class="bi bi-filetype-html text-danger skill-icon mb-3"></i>
                        <h5 class="fw-bold">HTML5</h5>
                        <p class="text-muted small mb-3">Semantic markup</p>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-danger" style="width: 95%"></div>
                        </div>
                        <small class="text-muted mt-2">95%</small>
                    </div>
                </div>

                <!-- Skill 2 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <i class="bi bi-filetype-css text-primary skill-icon mb-3"></i>
                        <h5 class="fw-bold">CSS3</h5>
                        <p class="text-muted small mb-3">Modern styling</p>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-primary" style="width: 90%"></div>
                        </div>
                        <small class="text-muted mt-2">90%</small>
                    </div>
                </div>

                <!-- Skill 3 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <i class="bi bi-bootstrap-fill text-purple skill-icon mb-3" style="color: #7952b3;"></i>
                        <h5 class="fw-bold">Bootstrap</h5>
                        <p class="text-muted small mb-3">Responsive framework</p>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar" style="width: 92%; background-color: #7952b3;"></div>
                        </div>
                        <small class="text-muted mt-2">92%</small>
                    </div>
                </div>

                <!-- Skill 4 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <i class="bi bi-filetype-js text-warning skill-icon mb-3"></i>
                        <h5 class="fw-bold">JavaScript</h5>
                        <p class="text-muted small mb-3">Interactive UI</p>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-warning" style="width: 75%"></div>
                        </div>
                        <small class="text-muted mt-2">75%</small>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== PROJECTS SECTION ==================== -->
    <section id="projects" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">My Projects</h2>
                <p class="text-muted">Some of my recent work</p>
            </div>
            <div class="row g-4">

                <!-- Project 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">E-Commerce Website</h5>
                            <p class="card-text text-muted small">
                                A fully responsive e-commerce homepage built with Bootstrap 5.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-primary">Bootstrap</span>
                                <span class="badge bg-secondary">HTML</span>
                                <span class="badge bg-success">CSS</span>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                View Project <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Admin Dashboard</h5>
                            <p class="card-text text-muted small">
                                Modern admin panel with sidebar, stats cards, and data tables.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-primary">Bootstrap</span>
                                <span class="badge bg-warning text-dark">JS</span>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                View Project <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">School Website</h5>
                            <p class="card-text text-muted small">
                                Complete school website with courses, teachers, and admission form.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-primary">Bootstrap</span>
                                <span class="badge bg-info text-dark">Carousel</span>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                View Project <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Project 4">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Portfolio Website</h5>
                            <p class="card-text text-muted small">
                                Personal portfolio with hero, about, skills, and contact sections.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-primary">Bootstrap</span>
                                <span class="badge bg-secondary">Grid</span>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                View Project <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Project 5">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Blog Platform</h5>
                            <p class="card-text text-muted small">
                                Responsive blog layout with articles, categories, and sidebar.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-primary">Bootstrap</span>
                                <span class="badge bg-success">Flex</span>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                View Project <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Project 6">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Landing Page</h5>
                            <p class="card-text text-muted small">
                                Product landing page with features, pricing, and testimonials.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-primary">Bootstrap</span>
                                <span class="badge bg-danger">Modern</span>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                View Project <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== CONTACT SECTION ==================== -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Contact Me</h2>
                <p class="text-muted">Let's work together</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email" placeholder="john@example.com"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Project inquiry">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5"
                                    placeholder="Tell me about your project..." required></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="bi bi-send me-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FOOTER ==================== -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row align-items-center g-3">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">© 2025 <strong>Your Name</strong>. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white me-3 fs-5" aria-label="GitHub"><i class="bi bi-github"></i></a>
                    <a href="#" class="text-white me-3 fs-5" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-white me-3 fs-5" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white fs-5" aria-label="Email"><i class="bi bi-envelope"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>