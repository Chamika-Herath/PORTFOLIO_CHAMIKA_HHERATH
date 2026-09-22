<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamika H. Herath | Portfolio</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Header / Nav -->
    <header class="navbar">
        <div class="container nav-content">
            <a href="#" class="logo">CH.</a>
            <nav class="nav-links">
                <a href="#about">About</a>
                <a href="#projects">Work</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="container hero-content">
            <h1 class="hero-title">Custom Web Experiences<br><span class="highlight">Built With Precision.</span></h1>
            <p class="hero-subtitle">I'm Chamika Herath, a Software Developer delivering high-end backend architecture and modern, clean frontend designs.</p>
            <div class="hero-cta">
                <a href="#projects" class="btn btn-primary">View My Work</a>
                <a href="#contact" class="btn btn-outline">Get In Touch</a>
            </div>
        </div>
        <!-- Decorative elements for GSAP -->
        <div class="bg-shape shape-1"></div>
        <div class="bg-shape shape-2"></div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section">
        <div class="container">
            <h2 class="section-title">Selected Works <span class="dot">.</span></h2>
            <div class="project-grid" id="project-container">
                <!-- Projects will be injected here via JS -->
                <div class="loading-state text-center text-muted">Loading projects...</div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container contact-content">
            <h2 class="section-title">Let's create something better.</h2>
            <p>Looking for a developer to elevate your digital presence? Send me a message.</p>
            <a href="mailto:your-email@example.com" class="btn btn-primary mt-4">Start a Conversation</a>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="d-flex justify-between align-center">
                <p>&copy; <?php echo date('Y'); ?> Chamika H. Herath. All rights reserved.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- GSAP & JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
