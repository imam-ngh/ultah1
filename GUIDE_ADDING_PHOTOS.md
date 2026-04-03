# 📸 Panduan Menambah Foto ke Album

## Langkah-Langkah Menambah Foto

### 1. Persiapkan Foto Anda

- Format: JPG, PNG, GIF, atau WebP
- Ukuran ideal: 800x600px atau lebih
- Kualitas: High quality (untuk tampilan premium)
- Nama file: Gunakan underscore atau dash (contoh: `memory_1.jpg`, `memory-2.png`)

### 2. Upload Foto ke Folder `public/images/`

```
Reny/
└── public/
    └── images/
        ├── memory-1.jpg      ← Simpan foto di sini
        ├── memory-2.jpg
        ├── memory-3.jpg
        └── memory-4.jpg
```

### 3. Edit File AlbumController

Buka file: `app/Http/Controllers/AlbumController.php`

Cari array `$memories` kemudian tambahkan entry baru:

```php
[
    'id' => 7,                              // ID unik (increment)
    'image' => '/images/memory-7.jpg',     // Path ke foto
    'title' => 'Judul Kenangan',           // Judul photo
    'caption' => 'Deskripsi singkat kenangan ini...',  // Caption singkat
    'date' => 'Musim Gugur 2024',          // Tanggal/periode
],
```

### 4. Edit Memory Detail (Opsional)

Untuk caption yang lebih panjang, edit juga array `$memories` di method `getMemory()`:

```php
[
    'id' => 7,
    'image' => '/images/memory-7.jpg',
    'title' => 'Judul Kenangan',
    'caption' => 'Deskripsi untuk card preview',
    'fullCaption' => 'Deskripsi panjang yang akan muncul di modal',
],
```

### 5. Refresh Browser

Buka http://localhost:8000/album dan lihat album terbaru Anda!

---

## Contoh Foto yang Cocok

Foto yang baik untuk romantic photobook:

✅ Couple photos (foto berdua)
✅ Candid moments (foto natural)
✅ Sunset/sunrise shots
✅ Close-up moments
✅ Travel photos bersama
✅ Special moments & celebrations
✅ Daily life moments
✅ Black & white romantic shots

---

## Tips untuk Hasil Terbaik

1. **Konsistensi Warna**: Gunakan filter yang sama untuk semua foto
2. **Editing**: Crop dan enhance dengan softly (jangan terlalu edit)
3. **Urutan**: Arrange memories dalam urutan kronologis atau thematic
4. **Captions**: Tulis captions yang meaningful dan personal
5. **Mix**: Gabungkan close-ups dengan wide shots untuk variasi

---

## Struktur Folder Images (Contoh)

```
public/images/
├── memory-1.jpg          # Kenangan Pertama
├── memory-2.jpg          # Senyuman Terindah
├── memory-3.jpg          # Petualangan Bersama
├── memory-4.jpg          # Malam Berbintang
├── memory-5.jpg          # Kehangatan Dekatmu
└── memory-6.jpg          # Masa Depan Kita
```

---

## Cara Mengganti Foto Existing

1. Buka folder `public/images/`
2. Replace foto lama dengan foto baru (gunakan nama file yang sama)
3. Refresh browser untuk melihat perubahan

Contoh:
- Ganti `memory-1.jpg` dengan foto baru tapi nama file tetap `memory-1.jpg`
- Tidak perlu edit code

---

## Menambah Lebih Dari 6 Foto

1. Duplikat entry di array `$memories`
2. Increment ID (7, 8, 9, dst)
3. Tambah file foto baru di `public/images/`
4. Ikuti format yang sama

Aplikasi akan automatically menampilkan semua foto dalam grid responsive.

---

## Size & Performance

Album sudah optimized untuk:
- Lazy loading (jika diperlukan)
- Responsive images
- Fast loading times

Untuk performa terbaik:
- Compress foto dengan tools seperti TinyPNG
- Ukuran file per foto: 100-500KB
- Gunakan format WebP untuk file lebih kecil

---

## Troubleshooting

**Foto tidak muncul?**
- Cek path di controller (harus `/images/filename.jpg`)
- Pastikan file ada di folder `public/images/`
- Refresh browser dan clear cache (Ctrl+Shift+Delete)

**Foto blur atau pixelated?**
- Upload versi dengan resolusi lebih tinggi
- Minimal 800px width

**Foto terpotong di modal?**
- Gunakan aspect ratio 4:3 atau 16:10
- Avoid very wide atau very tall images

---

Happy Adding! 📷✨
