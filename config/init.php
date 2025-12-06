<?php
// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
session_start();

// Config
define('BASE_URL', '/feature-blog/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'blog_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// Database connection
try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}

// Load classes
require_once __DIR__ . '/../models/PostModel.php';
require_once __DIR__ . '/../controllers/PostController.php';

// Auth system (if you have one)
require_once __DIR__ . '/../lib/Auth.php';
$auth = new Auth($db);

// Helper
function redirect($url) {
    header("Location: " . BASE_URL . $url);
    exit;
}
