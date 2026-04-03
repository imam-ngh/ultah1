# 🎂 Romantic Birthday Digital Experience - Reny

Sebuah web app premium yang dirancang khusus untuk merayakan ulang tahun istimewa **Reny Aprillia Safarty** dengan pengalaman visual yang romantis, emosional, dan interaktif.

---

## ✨ Fitur Utama

### 1. **Landing Page dengan Countdown Timer**
- Theme "Glassy Love" dengan glassmorphism design
- Countdown timer menghitung mundur hingga 27 April 2026
- Animasi hujan romantis (rain particle effect)
- Background gradient yang smooth dan aesthetic
- Floating hearts animation

### 2. **Kartu Ucapan Istimewa**
- Ucapan romantis yang muncul dengan typing effect
- Setiap kalimat fade in secara bertahap
- Doa-doa yang disertai animasi lembut
- Transisi smooth antar section

### 3. **Album Kenangan (Memory Gallery)**
- Tampilan grid dengan memory cards
- Modal interaktif saat klik foto
- Navigasi antar memori dengan arrow keys
- Animasi page flip yang smooth
- Romantic captions untuk setiap foto

### 4. **Desain Premium**
- Glassmorphism UI dengan pink + purple theme
- Tailwind CSS untuk responsive design
- GSAP untuk smooth animations
- Mobile-friendly dan fully responsive
- Dark mode support

---

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel 10
- **Frontend**: Blade Template + HTML5
- **Styling**: Tailwind CSS + Custom CSS
- **Animations**: GSAP (GreenSock Animation Platform)
- **JavaScript**: Vanilla JS + GSAP
- **Fonts**: Google Fonts (Poppins, Playfair Display)

---

## 📋 Persyaratan Sistem

- PHP >= 8.1
- Composer
- Node.js (optional, untuk development tools)
- SQLite (sudah included)
- Browser modern dengan JavaScript enabled

---

## 🚀 Cara Menjalankan

### 1. **Persiapan Awal**

Buka Command Prompt/PowerShell dan navigasi ke folder project:

```bash
cd "c:\DATA IMAM\APLIKASI\Reny"
```

### 2. **Install Dependencies**

```bash
composer install
```

Jika belum ada Composer di sistem, download dari https://getcomposer.org/

### 3. **Setup Environment File**

File `.env` sudah tersedia di project. Pastikan konfigurasi sudah correct:

```
APP_NAME="Reny's Birthday Surprise"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000
```

### 4. **Generate Application Key**

```bash
php artisan key:generate
```

### 5. **Jalankan Development Server**

```bash
php artisan serve
```

Server akan berjalan di: **http://localhost:8000**

### 6. **Akses Aplikasi**

Buka browser dan pergi ke salah satu route:

- **Landing Page (Countdown)**: http://localhost:8000/
- **Kartu Ucapan**: http://localhost:8000/greeting
- **Album Kenangan**: http://localhost:8000/album

---

## 📁 Struktur Folder

```
Reny/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── LandingController.php    # Controller untuk landing & greeting
│           └── AlbumController.php       # Controller untuk album
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php            # Template layout utama
│       ├── landing/
│       │   ├── index.blade.php          # Landing page dengan countdown
│       │   └── greeting.blade.php       # Kartu ucapan
│       └── album/
│           └── index.blade.php          # Album kenangan
│
├── routes/
│   └── web.php                          # Routing semua halaman
│
├── public/
│   ├── css/
│   │   └── custom.css                   # Custom styles & animations
│   ├── js/
│   │   └── animations.js                # Animations library
│   └── images/                          # Folder untuk images
│
├── config/
│   └── app.php                          # Konfigurasi aplikasi
│
├── .env                                 # Environment configuration
├── .env.example                         # Example env file
├── composer.json                        # Dependencies
└── README.md                            # Dokumentasi ini
```

---

## 🎨 Desain & Warna

### Color Palette
- **Primary Pink**: `#ec4899`
- **Secondary Purple**: `#a855f7`
- **Accent Blue**: `#3b82f6`
- **Soft Pink**: `#fce7f3`

### Font
- **Heading**: Playfair Display (serif, elegant)
- **Body**: Poppins (sans-serif, modern)

---

## 🎬 Fitur Animasi

### Countdown Timer
- Update setiap detik
- Countdown mundur hingga tanggal ulang tahun
- Automatic transition ke greeting page

### Floating Hearts
- Hearts yang muncul saat mouse move
- Animasi naik dengan fade out
- Random rotation dan velocity

### Rain Particle Effect
- Canvas-based rain animation
- Smooth fade in/out
- Realistic movement

### Page Transitions
- Fade in pada page load
- Smooth scale transitions
- Stagger animations untuk element multiple

### Text Animations
- Typing effect pada greeting text
- Line fade in dengan stagger
- Prayer section dengan delay

---

## 📝 Customize Content

### Mengubah Tanggal Ulang Tahun

Edit di `resources/views/landing/index.blade.php`:

```javascript
const birthdayDate = new Date('2026-04-27T00:00:00').getTime();
```

### Mengubah Ucapan

Edit di `app/Http/Controllers/LandingController.php`:

```php
$greetingText = [
    "Ubah ucapan di sini...",
    // ...
];
```

### Menambah Memory / Foto

Edit di `app/Http/Controllers/AlbumController.php`:

```php
$memories = [
    [
        'id' => 1,
        'image' => '/images/memory-1.jpg',
        'title' => 'Judul Kenangan',
        'caption' => 'Deskripsi singkat',
        'date' => 'Tanggal/Periode',
    ],
    // Tambah lebih banyak...
];
```

---

## 🖼️ Menambah Foto/Images

1. Simpan foto di folder: `public/images/`
2. Nama file harus sesuai referensi di controller
3. Format yang disupport: JPG, PNG, GIF, WebP
4. Size recommended: 800x600px atau lebih

Contoh menambah foto baru:

```php
[
    'id' => 7,
    'image' => '/images/memory-7.jpg',
    'title' => 'Judul Baru',
    'caption' => 'Deskripsi foto',
    'date' => 'Tanggal',
],
```

---

## ⚙️ Debugging & Troubleshooting

### Port 8000 Sudah Dipakai

```bash
php artisan serve --port=8001
```

### Error: "Class not found"

```bash
composer dump-autoload
```

### Clear Cache

```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Melihat Debug Info

Set di `.env`:

```
APP_DEBUG=true
```

---

## 📱 Responsive Design

Aplikasi sudah fully responsive untuk:
- Desktop (1920px+)
- Tablet (768px - 1024px)
- Mobile (320px - 767px)

Gunakan device emulation di browser untuk test (F12 → Toggle device toolbar)

---

## 🔒 Security Notes

- CSRF protection sudah enabled
- XSS prevention via Blade escaping
- Environment variables di `.env` tidak di-commit

---

## 📞 Support & Customization

Jika ingin menambah fitur atau customize lebih lanjut:

1. **Tambah Halaman Baru**: Buat view baru di `resources/views/` dan route di `routes/web.php`
2. **Tambah Controller**: Buat class baru di `app/Http/Controllers/`
3. **Modify Styles**: Edit `public/css/custom.css`
4. **Add Animations**: Extend di `public/js/animations.js`

---

## 🎁 Tips Penggunaan

1. **Best pada Desktop** untuk pengalaman optimal
2. **Enable JavaScript** untuk semua animasi berfungsi
3. **Gunakan Browser Modern** (Chrome, Firefox, Edge, Safari)
4. **Fullscreen untuk Presentation** (F11)
5. **Record Walkthrough** untuk sharing

---

## 📄 License

This project is created with ❤️ for Reny Aprillia Safarty.

---

## 🌟 Credits

- **Framework**: Laravel
- **CSS Framework**: Tailwind CSS
- **Animation**: GSAP (GreenSock)
- **Fonts**: Google Fonts
- **Icons**: Unicode Emoji

---

**Created with love and attention to detail.**

Happiest Birthday, Reny! 🎂✨💕

---

## 🚀 Mulai Sekarang

```bash
cd "c:\DATA IMAM\APLIKASI\Reny"
composer install
php artisan serve
```

Buka browser ke: **http://localhost:8000**

Enjoy the experience! 🎉
