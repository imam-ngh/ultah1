<?php
// Vercel handler - Route all requests to main application
// This file acts as an entry point for Vercel's PHP runtime

// Set proper base path
$_SERVER['SCRIPT_NAME'] = '/api/index.php';
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

// Get the requested path
$requestPath = $_SERVER['REQUEST_URI'] ?? '/';

// Remove /api prefix from the path if present
if (strpos($requestPath, '/api') === 0) {
    $requestPath = substr($requestPath, 4);
}

// Clean up query string from path
if (strpos($requestPath, '?') !== false) {
    $requestPath = substr($requestPath, 0, strpos($requestPath, '?'));
}

$_SERVER['REQUEST_URI'] = $requestPath ?: '/';

// Include the main application
require_once __DIR__ . '/../index.php';
