<?php

require_once __DIR__.'/../vendor/autoload.php';

/*
 * Bootstrap for application
 */

return new class {
    private $bindings = [];
    private $instances = [];
    
    public function __construct()
    {
        // Register some basic services
        $this->registerCoreServices();
    }
    
    private function registerCoreServices()
    {
        // Register view factory
        $this->instances['view'] = new class {
            public function make($view, $data = [])
            {
                $viewPath = __DIR__ . '/../resources/views/' . $view . '.blade.php';
                
                if (!file_exists($viewPath)) {
                    throw new Exception("View not found: $view");
                }
                
                $this->renderView($viewPath, $data);
                exit;
            }
            
            private function renderView($path, $data)
            {
                extract($data);
                include $path;
            }
        };
    }
    
    public function make($abstract)
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }
        
        return null;
    }
    
    public function __set($key, $value)
    {
        $this->instances[$key] = $value;
    }
    
    public function __get($key)
    {
        return $this->instances[$key] ?? null;
    }
};
