# ⚡ Quick Start Guide

## 30 Detik Setup

### Windows - PowerShell

```powershell
cd "c:\DATA IMAM\APLIKASI\Reny"
composer install
php artisan serve
```

### Buka Browser

```
http://localhost:8000
```

---

## Apa yang Akan Anda Lihat?

### 1️⃣ Halaman Landing (Countdown)
- URL: http://localhost:8000/
- Reny's name dengan countdown timer
- Rain animation effect
- Floating hearts

### 2️⃣ Kartu Ucapan
- URL: http://localhost:8000/greeting
- Ucapan romantis yang fade in
- Prayer section
- Tombol ke Album

### 3️⃣ Album Kenangan
- URL: http://localhost:8000/album
- 6 memory cards
- Click untuk lihat detail
- Modal dengan romantic caption

---

## Kustomisasi Cepat

### ✏️ Edit Nama & Tanggal

File: `app/Http/Controllers/LandingController.php`

```php
public function index(): View
{
    $birthdayDate = '2026-04-27'; // ← Ubah tanggal di sini
    $personName = 'Reny Aprillia Safarty'; // ← Ubah nama di sini
    // ...
}
```

### 💌 Edit Ucapan

File: `app/Http/Controllers/LandingController.php`

```php
$greetingText = [
    "Ubah teks pertama di sini...",
    "Teks kedua...",
    // Tambah lebih banyak
];
```

### 📸 Edit Album

File: `app/Http/Controllers/AlbumController.php`

```php
$memories = [
    [
        'id' => 1,
        'image' => '/images/memory-1.jpg',
        'title' => 'Judul Kenangan',
        'caption' => 'Deskripsi...',
        'date' => 'Tanggal...',
    ],
    // Tambah entry baru untuk foto baru
];
```

Simpan foto ke: `public/images/`

---

## Jika Error

### ❌ Port 8000 Sudah Dipakai

```bash
php artisan serve --port=8001
```

Buka: http://localhost:8001

### ❌ Composer Not Found

Download dari: https://getcomposer.org/Composer-Setup.exe

### ❌ PHP Not Found

Update PATH atau gunakan full path:

```bash
"C:\Program Files\PHP\php.exe" artisan serve
```

### ❌ Animations Tidak Jalan

- Pastikan JavaScript enabled di browser
- Cek console (F12 → Console tab)
- Refresh halaman (Ctrl+F5)

---

## Features Checklist

✅ Countdown Timer
✅ Rain Animation
✅ Floating Hearts
✅ Greeting Card dengan Typing Effect
✅ Prayer Section
✅ Album Gallery
✅ Modal Interaktif
✅ Responsive Design
✅ Smooth Animations
✅ Glassmorphism UI

---

## File Penting

| File | Fungsi |
|------|--------|
| `routes/web.php` | Routing semua halaman |
| `app/Http/Controllers/LandingController.php` | Logic landing & greeting |
| `app/Http/Controllers/AlbumController.php` | Logic album |
| `resources/views/landing/index.blade.php` | Countdown page |
| `resources/views/landing/greeting.blade.php` | Greeting card |
| `resources/views/album/index.blade.php` | Album gallery |
| `public/css/custom.css` | Custom styles |
| `public/js/animations.js` | Animation library |
| `.env` | Configuration |

---

## Browser Recommendation

Untuk pengalaman terbaik, gunakan:
- ✅ Google Chrome (latest)
- ✅ Firefox (latest)
- ✅ Microsoft Edge (latest)
- ✅ Safari (latest)

---

## Tips Profesional

1. **Fullscreen**: F11 untuk presentation mode
2. **Developer Tools**: F12 untuk debug
3. **Print**: Ctrl+P untuk print/PDF
4. **Keyboard**: Arrow keys di album untuk navigate

---

## Next Steps

1. ✅ Run aplikasi dengan `php artisan serve`
2. ✅ Explore semua halaman
3. ✅ Customize dengan foto sendiri
4. ✅ Share link dengan orang terkasih

---

**Ready to surprise? Let's go! 🎉**
