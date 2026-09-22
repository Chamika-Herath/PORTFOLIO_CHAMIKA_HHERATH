// Initialize GSAP and ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
    // Hero Animations
    const tl = gsap.timeline();
    
    tl.from(".navbar", { y: -50, opacity: 0, duration: 1, ease: "power3.out" })
      .from(".hero-title", { y: 30, opacity: 0, duration: 0.8, ease: "power3.out" }, "-=0.5")
      .from(".hero-subtitle", { y: 20, opacity: 0, duration: 0.8, ease: "power3.out" }, "-=0.6")
      .from(".hero-cta", { y: 20, opacity: 0, duration: 0.8, ease: "power3.out" }, "-=0.6");
      
    // Fetch and render projects
    fetchProjects();
});

async function fetchProjects() {
    const container = document.getElementById("project-container");
    
    try {
        const response = await fetch("api/get_projects.php");
        const json = await response.json();
        
        if (json.status === "success" && json.data.length > 0) {
            container.innerHTML = ""; // Clear loading state
            
            json.data.forEach((project, index) => {
                const imgPath = project.thumbnail_image ? `assets/images/uploads/${project.thumbnail_image}` : 'https://placehold.co/600x400/111/333?text=No+Image';
                
                // Parse technologies safely
                let techList = "";
                if (project.technologies) {
                    const techArr = project.technologies.split(',');
                    techList = techArr.map(t => `<span class="badge">${t.trim()}</span>`).join('');
                }
                
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
                            <div class="tech-badges">${techList}</div>
                            <div class="card-links">${linksHtml}</div>
                        </div>
                    </div>
                `;
                container.innerHTML += cardHTML;
            });
            
            // Re-initialize ScrollTrigger for new elements
            initScrollAnimations();
        } else {
            container.innerHTML = "<p>No projects found. Check back later!</p>";
        }
    } catch (error) {
        console.error("Error fetching projects", error);
        container.innerHTML = "<p>Failed to load projects. Ensure backend is running.</p>";
    }
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
        ease: "power3.out"
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
