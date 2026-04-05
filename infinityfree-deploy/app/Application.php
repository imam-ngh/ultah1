namespace App;

class Application
{
    protected $basePath;

    public function __construct($basePath = null)
    {
        if ($basePath) {
            $this['path.base'] = $basePath;
        }
    }

    public function basePath($path = '')
    {
        return $this['path.base'] . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    public function __set($key, $value)
    {
        // Quick binding
    }

    public function __get($key)
    {
        // Quick retrieval
    }
}
