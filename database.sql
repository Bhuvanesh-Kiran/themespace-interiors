-- Database setup for Themespace Interiors
-- Run this SQL script to create the database and tables

-- Table for quote requests
CREATE TABLE IF NOT EXISTS quotes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    package VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'contacted', 'completed') DEFAULT 'pending',
    INDEX idx_created_at (created_at),
    INDEX idx_status (status)
);

-- Table for contact form submissions
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('new', 'read', 'responded') DEFAULT 'new',
    INDEX idx_created_at (created_at),
    INDEX idx_status (status)
);

-- Table for newsletter subscriptions (optional)
CREATE TABLE IF NOT EXISTS newsletter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('active', 'unsubscribed') DEFAULT 'active',
    INDEX idx_email (email)
);

-- Insert sample data (optional - for testing)
-- INSERT INTO quotes (name, email, phone, package) VALUES 
-- ('John Doe', 'john@example.com', '9876543210', '2BHK'),
-- ('Jane Smith', 'jane@example.com', '9876543211', '3BHK');
