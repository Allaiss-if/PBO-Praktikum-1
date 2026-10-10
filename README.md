# PBO PRAKTIKUM 1 - PERTEMUAN 2
### Akazasa Sitanala / 2530____88 / 3C

# Belajar OOP dengan PHP

Kumpulan kode praktikum **Pemrograman Berorientasi Objek (PBO)** Pertemuan 2: *Pengenalan Tools & Bahasa Pemrograman* dengan implementasi **PHP**.

Pada pertemuan ini fokusnya belum pada class dan object, melainkan pada kesiapan tools dan penguasaan sintaks dasar PHP yang akan menjadi fondasi untuk materi PBO berikutnya.

## Isi Repositori

```
belajar-oop/
├── belajar.php           # Program pertama: Hello PHP
├── vardata.php           # Variabel dan tipe data
├── halophp.php           # Variabel, output, dan percabangan sederhana
├── percabangan.php       # if / elseif / else
├── perulangan.php        # Perulangan for
├── function.php          # Function dasar
├── inputmahasiswa.php    # Form input data mahasiswa (POST + HTML/CSS)
└── tugaspraktikum.php    # Tugas: program transaksi warung klontong
```

## Daftar Program

| File | Materi | Ringkasan |
|------|--------|-----------|
| `belajar.php` | `echo` | Menampilkan teks "Hello, PHP!" untuk memastikan PHP dan web server berjalan. |
| `vardata.php` | Variabel dan tipe data | Empat variabel dengan tipe berbeda: string, integer, boolean, dan float. Menggabungkan string dengan operator titik (`.`). |
| `halophp.php` | Variabel + `if` | Menampilkan variabel, lalu mengubah isi `$aktif` dari boolean menjadi string di dalam blok `if`. Menunjukkan bahwa PHP bersifat dynamically typed. |
| `percabangan.php` | `if` / `elseif` / `else` | Mengategorikan nilai: 80 ke atas "Sangat Baik", 70-79 "Baik", di bawah 70 "Perlu Perbaikan". |
| `perulangan.php` | `for` | Menampilkan "Perulangan ke-1" sampai "Perulangan ke-5". |
| `function.php` | Function | Function `hitungLuas($panjang, $lebar)` untuk menghitung luas persegi panjang. Hasil untuk 10 x 5 adalah `Luas = 50`. |
| `inputmahasiswa.php` | Form, `$_POST`, HTML/CSS | Formulir data mahasiswa dengan validasi di browser dan hasil yang tampil setelah formulir dikirim. |
| `tugaspraktikum.php` | Gabungan semua materi | Nota transaksi warung klontong dengan diskon member. |

## Detail Program

### `inputmahasiswa.php`

Formulir dengan method `POST` yang berisi NIM, nama, fakultas, program studi, asal sekolah, semester (1-8), dan hobi.

- Data dibaca dari `$_POST` dan dibersihkan spasi berlebihnya dengan `trim()`.
- Output dilindungi dengan `htmlspecialchars()` agar input pengguna tidak dieksekusi sebagai HTML.
- Validasi di sisi browser: NIM bertipe `number`; nama, fakultas, program studi, dan hobi memakai atribut `pattern` (hanya huruf dan spasi). Semua kolom wajib diisi kecuali hobi.
- Tampilan dibuat dengan CSS: kartu berlatar biru, tombol kuning bergaya timbul, dan kotak hasil dengan layout grid.

### `tugaspraktikum.php`

Program transaksi sederhana yang memenuhi ketentuan tugas praktikum:

| Ketentuan | Pemenuhan |
|-----------|-----------|
| Minimal 4 variabel dengan tipe berbeda | string `$namaPelanggan`, integer `$totalBelanja`, float `$persenDiskon`, boolean `$member`, array `$daftarBarang` |
| Minimal 1 percabangan | `if` / `else` untuk menentukan status member dan diskon |
| Minimal 1 perulangan | `foreach` untuk menampilkan daftar barang bernomor |
| Minimal 1 function buatan sendiri | `hitungTotalBayar($belanja, $diskon)` |

Contoh hasil: belanja Rp 300.000 dengan diskon member 20% menghasilkan total bayar **Rp 240.000**. Nota ditampilkan dengan bingkai gradasi yang berputar (animasi CSS `@keyframes`).

## Cara Menjalankan

### Opsi 1: Web server lokal (XAMPP / Laragon)

1. Instal **XAMPP** atau **Laragon**, lalu aktifkan Apache.
2. Salin folder `belajar-oop` ke direktori `htdocs` (XAMPP) atau `www` (Laragon).
3. Buka browser dan akses, misalnya:

   ```
   http://localhost/belajar-oop/belajar.php
   http://localhost/belajar-oop/inputmahasiswa.php
   http://localhost/belajar-oop/tugaspraktikum.php
   ```

### Opsi 2: Server bawaan PHP

Jika PHP sudah tersedia di PATH, jalankan dari terminal masuk ke dalam folder proyek (cd) dan ketik:

```bash
php -S localhost:8000
```
Tambah nama file .php dibelakang,
lalu buka `http://localhost:8000/belajar.php` di browser.

> File PHP harus dijalankan lewat web server (localhost). Jika dibuka langsung sebagai file biasa, kode PHP tidak akan dieksekusi.

## Tools

- PHP
- Web server lokal: Laragon 6
- Visual Studio Code
- Browser Edge
- Git

## Konsep yang Dipelajari

- [x] Menyiapkan lingkungan kerja PHP dan web server lokal
- [x] Output dengan `echo`
- [x] Variabel dan tipe data (string, integer, float, boolean, array)
- [x] Percabangan `if` / `elseif` / `else`
- [x] Perulangan `for` dan `foreach`
- [x] Function buatan sendiri
- [x] Menangani form HTML dengan `$_POST`
- [x] Membaca pesan error dan memperbaiki kesalahan sintaks dasar

## Penulis

Nama: Akazasa Sitanala

