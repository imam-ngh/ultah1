<?php
/**
 * Simple Router for Romantic Birthday App
 * Handles routing without full Laravel install
 */

// Set up error handling
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Get the requested URL
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_method = $_SERVER['REQUEST_METHOD'];

// Clean up the path
$base_path = dirname($_SERVER['SCRIPT_NAME']);
if ($base_path !== '/' && strpos($request_uri, $base_path) === 0) {
    $request_uri = substr($request_uri, strlen($base_path));
}

if (empty($request_uri)) {
    $request_uri = '/';
}

// Define global helper functions first
if (!function_exists('view')) {
    function view($view_name, $data = []) {
        $view_path = __DIR__ . '/resources/views/' . str_replace('.', '/', $view_name) . '.blade.php';
        
        if (!file_exists($view_path)) {
            die("View not found: $view_name");
        }
        
        extract($data);
        ob_start();
        include $view_path;
        return ob_get_clean();
    }
}

if (!function_exists('asset')) {
    function asset($path) {
        return '/' . ltrim($path, '/');
    }
}

if (!function_exists('route')) {
    function route($name, $parameters = []) {
        $routes = [
            'landing' => '/',
            'greeting' => '/greeting',
            'album' => '/album',
        ];
        return $routes[$name] ?? '#';
    }
}

// Routes definition
$routes = [
    '/' => ['controller' => 'Landing', 'action' => 'index'],
    '/greeting' => ['controller' => 'Landing', 'action' => 'greeting'],
    '/album' => ['controller' => 'Album', 'action' => 'index'],
];

// Route matching
$matched = false;
foreach ($routes as $path => $route) {
    if ($request_uri === $path) {
        $matched = true;
        
        $controller_class = 'App\\Http\\Controllers\\' . $route['controller'] . 'Controller';
        $action = $route['action'];
        $controller_file = __DIR__ . '/app/Http/Controllers/' . $route['controller'] . 'Controller.php';
        
        if (file_exists($controller_file)) {
            require_once $controller_file;
            
            if (class_exists($controller_class)) {
                $controller = new $controller_class();
                
                if (method_exists($controller, $action)) {
                    $response = $controller->$action();
                    
                    // Output the response (view or string)
                    echo $response;
                } else {
                    http_response_code(500);
                    die("Method not found: $action");
                }
            } else {
                http_response_code(500);
                die("Class not found: $controller_class");
            }
        } else {
            http_response_code(500);
            die("Controller file not found: $controller_file");
        }
        
        break;
    }
}

// 404 handling
if (!$matched) {
    http_response_code(404);
    die("404 - Page not found: $request_uri");
}
