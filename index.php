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




    <!-- Full-Width Special Navbar -->
    <header class="navbar">
        <div class="container nav-content">
            <nav class="nav-links">
                <a href="#hero">Profile</a>
                <a href="#projects">Works</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <!-- LinkedIn Style Hero Section -->
    <section id="hero" class="profile-hero">
        <div class="hero-container">
            <div class="profile-card hero-anim-item">
                <!-- Cover Image -->
                <div class="cover-image"></div>
                
                <!-- Profile Image & Info -->
                <div class="profile-content">
                    <div class="profile-header">
                        <div class="profile-avatar-wrapper">
                            <img src="assets/images/uploads/profile.png" alt="Chamika Herath" class="profile-avatar">
                        </div>
                    </div>
                    
                    <div class="profile-details">
                        <h1 class="profile-name">Chamika Herath <i class="fas fa-check-circle verified-badge" title="Verified Professional"></i></h1>
                        <p class="profile-headline">Digital Artist & Software Developer | Crafting Immersive Web Experiences</p>
                        <p class="profile-location"><i class="fas fa-map-marker-alt"></i> Sri Lanka &bull; <a href="#contact" class="contact-link">Contact info</a></p>
                        <div class="profile-actions">
                            <a href="#projects" class="btn btn-primary"><i class="fas fa-briefcase"></i> View Work</a>
                            <button class="btn btn-outline" id="view-details-btn"><i class="fas fa-angle-down"></i> View More Details</button>
                        </div>
                    </div>

                    <div class="expanded-details" id="expanded-details">
                        <div class="cv-section">
                            <h3><i class="fas fa-user-circle"></i> Summary</h3>
                            <p>Results-driven Associate Back-End Developer with a strong foundation in Software Engineering and expertise in PHP, MySQL, and modern JavaScript frameworks like ReactJS and Node.js. Proven track record of engineering scalable backend architectures and building RESTful APIs.</p>
                        </div>
                        <div class="cv-section">
                            <h3><i class="fas fa-briefcase"></i> Professional Experience</h3>
                            <div class="cv-timeline-item">
                                <div class="cv-logo">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="cv-content">
                                    <h4>Associate Back-End Developer <span class="cv-company">- Neo Solution</span></h4>
                                    <span class="cv-date">04/2026 &ndash; 09/2026 | Colombo 04</span>
                                    <p>Contributed to over 15 commercial web-based projects, including ERP modules, custom management systems, and e-commerce platforms. Promoted from Intern to Associate Backend Developer within six months for successfully managing end-to-end server deployments and collaborating directly with clients.</p>
                                </div>
                            </div>
                            <div class="cv-timeline-item">
                                <div class="cv-logo">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="cv-content">
                                    <h4>Intern Back-End Developer <span class="cv-company">- Neo Solution</span></h4>
                                    <span class="cv-date">10/2025 &ndash; 04/2026 | Colombo 04</span>
                                </div>
                            </div>
                        </div>
                        <div class="cv-section">
                            <h3><i class="fas fa-graduation-cap"></i> Education</h3>
                            <div class="cv-timeline-item">
                                <div class="cv-logo">
                                    <i class="fas fa-university"></i>
                                </div>
                                <div class="cv-content">
                                    <h4>KIU UNIVERSITY</h4>
                                    <p>Honours in Software Engineering</p>
                                    <span class="cv-date">10/2022 &ndash; 11/2026</span>
                                </div>
                            </div>
                            <div class="cv-timeline-item">
                                <div class="cv-logo">
                                    <i class="fas fa-school"></i>
                                </div>
                                <div class="cv-content">
                                    <h4>SIR JOHN KOTHALAWALA COLLEGE</h4>
                                    <p>Advanced Level (Maths)</p>
                                    <span class="cv-date">2017 &ndash; 2020 | Kurunegala</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section">
        <div class="container">
            <h2 class="section-title">Selected Works <span class="dot">.</span></h2>
            <div class="project-grid" id="project-container">
                <!-- Projects will be injected here via JS -->
                <div class="loading-state text-center text-muted">Loading projects...</div>
            </div>
            <div style="text-align: center; margin-top: 50px;">
                <a href="https://github.com/Chamika-Herath" target="_blank" class="btn btn-outline" style="padding: 12px 35px; border-radius: 50px;"><i class="fab fa-github"></i> View All Works</a>
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
