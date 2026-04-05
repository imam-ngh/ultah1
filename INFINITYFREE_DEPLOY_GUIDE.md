# 🎉 INFINITYFREE DEPLOYMENT GUIDE

## STEP 1: SIGNUP & CREATE WEBSITE

1. Go to: https://www.infinityfree.net/
2. Click "SIGN UP FREE"
3. Fill form (Email, Password, Username)
4. Click "Create Account"
5. Verify email

## STEP 2: CREATE WEBSITE

1. Login to InfinityFree Dashboard
2. Click "Create Website"
3. Setup:
   - Domain: `reny-birthday.infinityfreeapp.com` (atau custom)
   - Click "Create"
4. Wait 2-3 minutes for domain to activate

## STEP 3: GET FTP LOGIN

1. Go to Websites → pilih website kamu
2. Click "Settings"
3. Copy these credentials:
   - FTP Hostname: `ftpNN.infinityfree.com` (replace NN)
   - FTP Username: `epXXXXXXX`
   - FTP Password: copy dari sini
   - FTP Port: 21

## STEP 4: UPLOAD FILES

### Option A: Using FileZilla (Recommended)

1. Download FileZilla: https://filezilla-project.org/download.php
2. Install & Open FileZilla
3. Menu: **File → Site Manager**
4. Click **"New Site"**
5. Fill:
   - Protocol: `FTP`
   - Host: `ftpNN.infinityfree.com`
   - User: `epXXXXXXX`
   - Password: paste password
   - Port: 21
6. Double-click site to connect
7. Left = Local (Computer), Right = Remote (Server)
8. Navigate left to: `C:\DATA IMAM\APLIKASI\Reny\reny-birthday.zip`
9. Extract ZIP locally first (right-click → Extract)
10. Upload all files from `infinityfree-deploy` folder to Server **`public_html`** folder
11. Make sure `index.php` is in `public_html` root

### Option B: Using Dashboard Upload

1. In InfinityFree Website Settings
2. Click **"File Manager"**
3. Navigate to **`public_html`** folder
4. Click **"Upload"** button
5. Upload `reny-birthday.zip`
6. Right-click → **"Extract"**
7. Move all files to `public_html` root

## STEP 5: TEST

1. Go to: `https://reny-birthday.infinityfreeapp.com`
2. Should see: Countdown page ✅
3. Test links:
   - `/greeting` → greeting card page
   - `/album` → photo album

## 🎯 IMPORTANT

- **index.php must be in `public_html` root** (not in subfolder)
- Files structure:
  ```
  public_html/
  ├── index.php
  ├── app/
  ├── resources/
  ├── public/
  ├── .htaccess
  └── etc...
  ```
- .htaccess handles routing automatically
- PHP already pre-installed on InfinityFree

## ❓ TROUBLESHOOTING

**404 Error:**
- Check if `index.php` is in `public_html` root
- Check if `.htaccess` is uploaded

**Blank Page:**
- Check error logs in File Manager
- Make sure `public/` folder has all assets (css, js, images)

**Connection refused:**
- Check FTP credentials
- Make sure port is 21 (not 22)
- Wait a few minutes after website creation

---

**NEED HELP?** 
- InfinityFree Support: https://www.infinityfree.net/support/
- Ask me if stuck!
