# 🎂 Complete Setup Guide - Reny's Birthday Surprise

Welcome! This is your complete guide to set up and run the romantic birthday web app.

---

## ⚡ Quick Start (60 seconds)

### For Windows Users

**Option 1: Double-click to Run**
1. Open folder: `c:\DATA IMAM\APLIKASI\Reny\`
2. Double-click: `START_SERVER.bat`
3. Browser akan otomatis membuka http://localhost:8000

**Option 2: PowerShell**
```powershell
cd "c:\DATA IMAM\APLIKASI\Reny"
.\START_SERVER.ps1
```

**Option 3: Command Line**
```bash
cd c:\DATA IMAM\APLIKASI\Reny
php -S localhost:8000
```

---

## 📋 Detailed Setup Steps

### 1. Check Prerequisites

Pastikan Anda memiliki:
- ✅ PHP 7.4+
- ✅ Browser modern (Chrome, Firefox, Edge, Safari)

### 2. Navigate to Project

```bash
cd "c:\DATA IMAM\APLIKASI\Reny"
```

### 3. Verify Files

Cek apakah file-file ini ada:
- ✅ `index.php` (di root)
- ✅ `app/Http/Controllers/LandingController.php`
- ✅ `app/Http/Controllers/AlbumController.php`
- ✅ `resources/views/landing/index.blade.php`
- ✅ `resources/views/landing/greeting.blade.php`
- ✅ `resources/views/album/index.blade.php`
- ✅ `public/css/custom.css`
- ✅ `public/js/animations.js`

### 4. Start Server

```bash
php -S localhost:8000
```

Anda akan melihat output:
```
Development Server started at http://localhost:8000
Press Ctrl+C to quit.
```

### 5. Open Browser

Kunjungi: **http://localhost:8000**

---

## 🎯 Testing Halaman-Halaman

Setelah server berjalan, test setiap halaman:

| Halaman | URL | Fitur |
|---------|-----|-------|
| Landing | http://localhost:8000/ | Countdown timer, rain animation |
| Greeting | http://localhost:8000/greeting | Ucapan & doa dengan typing effect |
| Album | http://localhost:8000/album | Memory gallery |

---

## 🛠️ Troubleshooting

### ❌ "PHP not found"

**Solusi:**
1. Download PHP dari https://windows.php.net/download/
2. Pilih "VC15 x64 Zip" untuk Windows 64-bit
3. Extract ke folder (contoh: `C:\php`)
4. Tambah ke PATH:
   - Right-click "This PC" → Properties
   - Advanced system settings → Environment Variables
   - New → Variable name: `PHP_PATH`, Value: `C:\php`
   - Edit PATH → Add `C:\php`
5. Restart Command Prompt

### ❌ "Port 8000 already in use"

**Solusi 1: Use different port**
```bash
php -S localhost:8001
```
Buka: http://localhost:8001

**Solusi 2: Kill process on port 8000**
```bash
netstat -ano | findstr :8000
taskkill /PID <PID> /F
```

### ❌ Halaman blank atau error

**Cek:**
1. Refresh browser (Ctrl+F5)
2. Buka DevTools (F12 → Console)
3. Cari error messages
4. Pastikan semua views file ada

### ❌ Animasi tidak jalan

**Cek:**
1. JavaScript enabled (hapus adblocker jika ada)
2. GSAP library loaded (F12 → Network tab)
3. Console tidak ada error
4. Coba browser lain

---

## 🎨 Kustomisasi

### Mengubah Tanggal Ulang Tahun

Edit `app/Http/Controllers/LandingController.php`:

```php
public function index()
{
    $birthdayDate = '2026-04-27'; // ← Ubah ke tanggal Anda
    $personName = 'Reny Aprillia Safarty';
    // ...
}
```

### Mengubah Ucapan

Buka file yang sama, cari array `$greetingText` dan edit teks.

### Menambah Foto

1. Simpan foto ke: `public/images/memory-X.jpg`
2. Edit `app/Http/Controllers/AlbumController.php`
3. Tambah entry ke array `$memories`

Detail lengkap: Buka `GUIDE_ADDING_PHOTOS.md`

---

## 📁 Project Structure

```
Reny/
├── app/Http/Controllers/          # Backend logic
│   ├── LandingController.php
│   └── AlbumController.php
├── resources/views/               # Frontend templates
│   ├── layouts/app.blade.php
│   ├── landing/
│   │   ├── index.blade.php
│   │   └── greeting.blade.php
│   └── album/index.blade.php
├── public/
│   ├── css/custom.css            # Styles
│   ├── js/animations.js          # Animations
│   └── images/                    # Photos folder
├── config/                         # Configuration
├── index.php                       # Entry point
├── .env                           # Environment config
└── README.md                      # Documentation
```

---

## 🚀 Advanced Usage

### Using Different Port

```bash
php -S 0.0.0.0:3000
```

Akses dari device lain: `http://<computer-ip>:3000`

### Run Multiple Instances

Buka terminal baru dan jalankan di port berbeda:

```bash
php -S localhost:8001
php -S localhost:8002
```

---

## 📝 File Configuration

### .env file

```env
APP_NAME="Reny's Birthday Surprise"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000
```

Jangan share file ini (sudah di .gitignore).

---

## 🔗 URLs Overview

- **Main App**: http://localhost:8000
- **Landing**: http://localhost:8000/
- **Greeting**: http://localhost:8000/greeting
- **Album**: http://localhost:8000/album

---

## 💾 Backing Up

Backup folder untuk keamanan:

```bash
copy "c:\DATA IMAM\APLIKASI\Reny" "c:\DATA IMAM\APLIKASI\Reny_Backup"
```

---

## 🎯 Next Steps

1. ✅ Run server dengan `php -S localhost:8000`
2. ✅ Buka http://localhost:8000 di browser
3. ✅ Explore semua halaman
4. ✅ Customize dengan data dan foto Anda
5. ✅ Share link dengan orang terkasih 💕

---

## 🤝 Need Help?

Jika ada masalah:

1. Check error di DevTools (F12)
2. Look for console error messages
3. Verify all files exist in correct locations
4. Try clearing browser cache (Ctrl+Shift+Delete)
5. Restart server (Ctrl+C then run again)

---

## 🌟 Features Di Aplikasi

✅ **Countdown Timer** - Hitung mundur ke hari istimewa
✅ **Rain Animation** - Efek hujan romantis
✅ **Floating Hearts** - Hati yang terbang indah
✅ **Typing Effect** - Teks yang muncul character-by-character
✅ **Glassmorphism UI** - Design modern dan premium
✅ **Responsive Design** - Works on mobile, tablet, desktop
✅ **Smooth Animations** - GSAP powered animations
✅ **Interactive Album** - Clickable memory cards
✅ **Modal Gallery** - Beautiful memory details
✅ **Keyboard Navigation** - Arrow keys di album

---

## 📞 Support

Untuk bantuan lebih lanjut, cek file-file berikut:
- `QUICK_START.md` - Quick reference
- `GUIDE_ADDING_PHOTOS.md` - How to add photos
- `README.md` - Full documentation

---

**Ready to celebrate? Let's go! 🎉**

Created with ❤️ for an unforgettable experience.
