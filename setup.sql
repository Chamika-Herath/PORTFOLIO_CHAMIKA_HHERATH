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
