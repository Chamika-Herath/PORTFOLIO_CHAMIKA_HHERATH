<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Works | Chamika Herath</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Full-Width Special Navbar -->
    <header class="navbar">
        <div class="container nav-content">
            <nav class="nav-links">
                <a href="index.php#hero">Profile</a>
                <a href="index.php#projects">Works</a>
                <a href="index.php#contact">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Projects Section -->
    <section id="projects" class="projects-section" style="padding-top: 150px; min-height: 100vh;">
        <div class="container">
            <h2 class="section-title">All Works <span class="dot">.</span></h2>
            <div class="project-grid" id="project-container">
                <!-- Projects will be injected here via JS -->
                <div class="loading-state text-center text-muted">Loading projects...</div>
            </div>
            
            <div style="text-align: center; margin-top: 50px;">
                <a href="index.php#projects" class="btn btn-outline" style="padding: 12px 35px; border-radius: 50px;"><i class="fas fa-arrow-left"></i> Back to Home</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="d-flex justify-between align-center">
                <p>&copy; <?php echo date('Y'); ?> Chamika H. Herath. All rights reserved.</p>
                <div class="social-links">
                    <a href="https://github.com/Chamika-Herath" target="_blank"><i class="fab fa-github"></i></a>
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
