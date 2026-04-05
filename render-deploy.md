# Render.com Deployment Guide (Laravel)

## Prerequisites
1. Sign up at https://render.com with GitHub/GitLab account (free tier available).
2. Connect your repo: Push this project to GitHub, then New > Web Service > Connect GitHub repo.

## Auto-Deploy Config (render.yaml created)
- Uses PHP runtime.
- Build: composer prod + artisan caches.
- Start: heroku-php-apache2 (standard for Laravel on Render).

## Manual Steps on Render Dashboard
1. Create Web Service → Select repo.
2. Settings → Build Command: Already in render.yaml.
3. Environment Vars (add these):
   - `APP_KEY`: Copy from local `.env` (base64:xxx).
   - `APP_ENV`: production
   - `APP_DEBUG`: false
4. Deploy → View live URL (https://reny-birthday-xxx.onrender.com).

## Local Prep (done)
- `composer install --no-dev` completed.
- Caches ready (run locally: php artisan serve to test).

Push to GitHub & deploy on Render - live in minutes! Free static sites, scales up.
