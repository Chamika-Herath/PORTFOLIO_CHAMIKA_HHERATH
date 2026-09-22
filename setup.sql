CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    thumbnail_image VARCHAR(255),
    technologies VARCHAR(255),
    live_link VARCHAR(255),
    github_link VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert a default admin user (password: admin_test)
-- Hash generated using password_hash('admin_test', PASSWORD_DEFAULT)
-- Only run this once or handle duplicate username gracefully.
INSERT IGNORE INTO users (username, password_hash) VALUES 
('admin', '$2y$10$wE9v0uP5S4JqI9.e1WqWJu5W6Q2oZ7yL4M8B/8vO/N4/3q6Z8iOlm');

-- Insert Sample Projects
INSERT INTO projects (title, description, thumbnail_image, technologies, live_link, github_link) VALUES 
('DataPro Analytics', 'A comprehensive analytics dashboard for tracking user metrics in real-time. Features dark mode, live charts, and exportable reports.', 'project1_dashboard.png', 'React, Node.js, D3.js, PHP', 'https://example.com/demo1', 'https://github.com/chamika/datapro'),
('Aura Footwear', 'A modern, high-conversion e-commerce storefront with a custom shopping cart and integrated payment gateways.', 'project2_ecommerce.png', 'Next.js, TailwindCSS, Stripe, PHP', 'https://example.com/demo2', 'https://github.com/chamika/aura-ecommerce'),
('Nexus AI Chat', 'A futuristic AI assistant mobile web app with glassmorphic UI elements and instant response streaming.', 'project3_ai.png', 'Vue.js, GSAP, OpenAI API, PHP', 'https://example.com/demo3', 'https://github.com/chamika/nexus-ai');
