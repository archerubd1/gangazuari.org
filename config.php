<?php

// Detect environment
$is_localhost = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;

// Detect localhost
$is_localhost = in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']);

// Define paths and DB settings
if ($is_localhost) {
    $base_url  = 'http://localhost/gangazuari.org';       // For href/src
    $base_path = $_SERVER['DOCUMENT_ROOT'] . '/gangazuari.org'; // For include()
    
    $db_host = 'localhost';
    $db_name = 'gangazuari';
    $db_user = 'root';
    $db_pass = 'root';
} else {
    $base_url  = 'https://gangazuari.org'; // For href/src
    $base_path = $_SERVER['DOCUMENT_ROOT'];           // For include()

    $db_host = 'localhost';
    $db_name = 'gangazuari';
    $db_user = 'gzaAdmin';
    $db_pass = 'gza@123Admin';
}


// Auto-generate canonical URL if not explicitly set
if (!isset($canonical_url)) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host     = $_SERVER['HTTP_HOST'];
    $uri      = $_SERVER['REQUEST_URI'];

    $canonical_url = $protocol . $host . strtok($uri, '?'); // remove query params
}

// Detect localhost
$is_localhost = in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']);

// Set base URL
$base_url = $is_localhost
    ? 'http://localhost/gangazuari.org'
    : 'https://www.gangazuari.org';
	
$db_driver = 'mysql';

// Connect to MySQL
$coni = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$coni) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Set timezone
date_default_timezone_set("Asia/Kolkata");

?>
