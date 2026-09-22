// Initialize GSAP and ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
    // Hero Animations
    const tl = gsap.timeline();

    tl.from(".navbar", { y: -50, opacity: 0, duration: 0.8, ease: "power3.out" })
        .from(".profile-card", { y: 50, opacity: 0, duration: 1, ease: "power3.out" }, "-=0.4")
        .from(".profile-avatar-wrapper", { scale: 0.8, opacity: 0, duration: 0.8, ease: "back.out(1.5)" }, "-=0.5")
        .from(".profile-name", { x: -20, opacity: 0, duration: 0.6, ease: "power3.out" }, "-=0.4")
        .from(".profile-headline", { x: -20, opacity: 0, duration: 0.6, ease: "power3.out" }, "-=0.4")
        .from(".profile-actions", { y: 20, opacity: 0, duration: 0.6, ease: "power3.out" }, "-=0.4");

    // Fetch and render projects
    fetchProjects();

    // Smart Navbar logic
    let lastScroll = 0;
    const navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll <= 0) {
            navbar.classList.remove("nav-hidden");
            return;
        }

        if (currentScroll > lastScroll && currentScroll > 50) {
            navbar.classList.add("nav-hidden");
        } else if (currentScroll < lastScroll) {
            navbar.classList.remove("nav-hidden");
        }

        lastScroll = currentScroll;
    });

    // Expanded Details Logic
    const viewDetailsBtn = document.getElementById('view-details-btn');
    const expandedDetails = document.getElementById('expanded-details');

    if (viewDetailsBtn && expandedDetails) {
        viewDetailsBtn.addEventListener('click', (e) => {
            e.preventDefault();
            expandedDetails.classList.toggle('show');

            const icon = viewDetailsBtn.querySelector('i');
            if (expandedDetails.classList.contains('show')) {
                icon.classList.remove('fa-angle-down');
                icon.classList.add('fa-angle-up');
                viewDetailsBtn.innerHTML = `<i class="fas fa-angle-up"></i> View Less`;
            } else {
                icon.classList.remove('fa-angle-up');
                icon.classList.add('fa-angle-down');
                viewDetailsBtn.innerHTML = `<i class="fas fa-angle-down"></i> View More Details`;
            }
        });
    }
});

function fetchProjects() {
    const container = document.getElementById("project-container");

    // Static dummy data for frontend-only mode
    const dummyProjects = [
        {
            title: 'DataPro Analytics',
            description: 'A comprehensive analytics dashboard for tracking user metrics in real-time. Features dark mode, live charts, and exportable reports.',
            thumbnail_image: 'project1_dashboard.png',
            technologies: 'React, Node.js, D3.js',
            live_link: '#',
            github_link: '#'
        },
        {
            title: 'Aura Footwear',
            description: 'A modern, high-conversion e-commerce storefront with a custom shopping cart and integrated payment gateways.',
            thumbnail_image: 'project2_ecommerce.png',
            technologies: 'Next.js, TailwindCSS, Stripe',
            live_link: '#',
            github_link: '#'
        },
        {
            title: 'Nexus AI Chat',
            description: 'A futuristic AI assistant mobile web app with glassmorphic UI elements and instant response streaming.',
            thumbnail_image: 'project3_ai.png',
            technologies: 'Vue.js, GSAP, OpenAI API',
            live_link: '#',
            github_link: '#'
        }
    ];

    container.innerHTML = ""; // Clear loading state

    dummyProjects.forEach((project, index) => {
        const imgPath = project.thumbnail_image ? `assets/images/uploads/${project.thumbnail_image}` : 'https://placehold.co/600x400/111/333?text=No+Image';

        let linksHtml = "";
        if (project.live_link) linksHtml += `<a href="${project.live_link}" target="_blank" class="card-link"><i class="fas fa-external-link-alt"></i></a>`;
        if (project.github_link) linksHtml += `<a href="${project.github_link}" target="_blank" class="card-link"><i class="fab fa-github"></i></a>`;

        const cardHTML = `
            <div class="project-card project-anim-item">
                <div class="card-img-wrapper">
                    <img src="${imgPath}" alt="${project.title}">
                </div>
                <div class="card-body">
                    <h3 class="card-title">${project.title}</h3>
                    <p class="card-desc">${project.description.slice(0, 100)}${project.description.length > 100 ? '...' : ''}</p>
                    <div class="card-links">${linksHtml}</div>
                </div>
            </div>
        `;
        container.innerHTML += cardHTML;
    });

    initScrollAnimations();
}

function initScrollAnimations() {
    // Animate project cards stagger
    gsap.from(".project-anim-item", {
        scrollTrigger: {
            trigger: ".projects-section",
            start: "top 80%",
        },
        y: 50,
        opacity: 0,
        duration: 0.8,
        stagger: 0.2,
        ease: "power3.out",
        clearProps: "all"
    });

    // Animate contact section
    gsap.from(".contact-content", {
        scrollTrigger: {
            trigger: ".contact-section",
            start: "top 80%",
        },
        y: 30,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
    });
}
