<?php
define('SITE_NAME', 'Steep Works');
define('SITE_EMAIL', 'projects@steepworks.co.nz');
define('SITE_ADDRESS', 'Christchurch, Canterbury 8022, NZ');
define('SITE_INDUSTRY', 'Civil Engineering');
define('SITE_DESCRIPTION', 'Specialist excavation services using spider digger technology');

// Database configuration (if needed in the future)
define('DB_HOST', 'localhost');
define('DB_NAME', 'steepworks_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set default timezone
date_default_timezone_set('Pacific/Auckland');
?>
