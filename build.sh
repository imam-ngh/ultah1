#!/bin/bash
# Render Build Script for PHP

# Install composer dependencies (if composer.json exists)
if [ -f "composer.json" ]; then
    composer install --no-dev
fi

echo "✅ Build complete - ready to serve with PHP"
