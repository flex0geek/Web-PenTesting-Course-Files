-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 12:40 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

CREATE USER 'ctfuser'@'localhost' IDENTIFIED BY 'P@sswp@@1';
CREATE DATABASE labs_db;
GRANT ALL PRIVILEGES ON labs_db.* TO 'ctfuser'@'localhost';
USE labs_db;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labs_db`
--

-- --------------------------------------------------------


-- Create the comments table and insert dummy values
CREATE TABLE comments (
    uname VARCHAR(50),
    comment TEXT,
    link VARCHAR(255)
);

INSERT INTO comments (uname, comment, link) VALUES
('user1', 'This is a comment', 'http://example.com'),
('user2', 'Another comment', 'http://example.org');

-- Create the books table and insert dummy values
CREATE TABLE books (
    name VARCHAR(100),
    author VARCHAR(100),
    story TEXT
);

INSERT INTO books (name, author, story) VALUES
('Book One', 'Author One', 'Story of book one'),
('Book Two', 'Author Two', 'Story of book two');

-- Create the contact table
CREATE TABLE contact (
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    user_agent VARCHAR(255)
);

-- Create the users table and insert a dummy user
CREATE TABLE users (
    username VARCHAR(50),
    pass VARCHAR(50)
);

INSERT INTO users (username, pass) VALUES
('guest', 'guest');
INSERT INTO users (username, pass) VALUES
('admin', 'Passw0rd');
INSERT INTO users (username, pass) VALUES
('noBody', 'yesNoOne');

-- Create the users_csrf table and insert a dummy user
CREATE TABLE users_csrf (
    username VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(50)
);

INSERT INTO users_csrf (username, email, password) VALUES
('guest', 'guest@example.com', 'guest');
('admin', 'admin@example.com', 'PasswordAdmin');
('nobody', 'nobody@example.com', 'yesWeHack');
