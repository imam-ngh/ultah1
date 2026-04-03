# Romantic Birthday App - Start Server (PowerShell)
#
# Run: .\START_SERVER.ps1
#

Write-Host ""
Write-Host "================================================" -ForegroundColor Cyan
Write-Host "     Reny's Birthday Surprise App" -ForegroundColor Cyan
Write-Host "     Starting Development Server..." -ForegroundColor Cyan
Write-Host "================================================" -ForegroundColor Cyan
Write-Host ""

# Check if PHP is installed
try {
    $phpVersion = php -v 2>$null
    if ($LASTEXITCODE -ne 0) {
        throw "PHP not found"
    }
} catch {
    Write-Host "❌ ERROR: PHP is not installed or not in PATH" -ForegroundColor Red
    Write-Host ""
    Write-Host "Please install PHP from: https://windows.php.net/download/" -ForegroundColor Yellow
    Write-Host "Then add PHP to your system PATH" -ForegroundColor Yellow
    Write-Host ""
    Read-Host "Press Enter to exit"
    exit 1
}

# Check if index.php exists
if (-not (Test-Path "index.php")) {
    Write-Host "❌ ERROR: index.php not found" -ForegroundColor Red
    Write-Host "Please run this file from the Reny folder" -ForegroundColor Red
    Read-Host "Press Enter to exit"
    exit 1
}

Write-Host "✓ PHP found!" -ForegroundColor Green
Write-Host ""
Write-Host "🚀 Starting server on http://localhost:8000" -ForegroundColor Green
Write-Host ""
Write-Host "Opening browser in 3 seconds..." -ForegroundColor Cyan
Write-Host ""

# Wait 3 seconds
Start-Sleep -Seconds 3

# Open browser
Start-Process "http://localhost:8000"

# Start PHP server
Write-Host "Server is running. Press Ctrl+C to stop." -ForegroundColor Yellow
Write-Host ""

php -S localhost:8000

pause
