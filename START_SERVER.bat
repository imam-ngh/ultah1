@echo off
:: Romantic Birthday App - Start Server (Windows)
:: 
:: Double-click this file to start the development server
::

echo.
echo ================================================
echo     Reny's Birthday Surprise App
echo     Starting Development Server...
echo ================================================
echo.

:: Check if PHP is installed
php -v >nul 2>&1
if errorlevel 1 (
    echo ❌ ERROR: PHP is not installed or not in PATH
    echo.
    echo Please install PHP from: https://windows.php.net/download/
    echo Then add PHP to your system PATH
    echo.
    pause
    exit /b 1
)

:: Check if we're in the right directory
if not exist "index.php" (
    echo ❌ ERROR: index.php not found
    echo Please run this file from the Reny folder
    pause
    exit /b 1
)

:: Start the server
echo ✓ PHP found!
echo.
echo 🚀 Starting server on http://localhost:8000
echo.
echo Opening browser in 3 seconds...
echo.

:: Wait 3 seconds
timeout /t 3 /nobreak

:: Try to open browser
start http://localhost:8000

:: Start PHP server
php -S localhost:8000

pause
