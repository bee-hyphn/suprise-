-- 1. Create the database
CREATE DATABASE IF NOT EXISTS instagram_clone;
USE instagram_clone;

-- 2. Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

-- 3. Insert a test user
INSERT INTO users (username, password)
VALUES ('testuser', 'testpass');
