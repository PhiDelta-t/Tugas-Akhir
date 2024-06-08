# Tugas Akhir Kelompok 2 Sanbercode x Universitas Lancang Kuning

# Sistem Informasi Gudang

Sistem Informasi Gudang adalah aplikasi berbasis web yang dirancang untuk mengelola proses penyimpanan dan pengelolaan inventaris di sebuah gudang. Aplikasi ini menyediakan antarmuka pengguna yang intuitif untuk melakukan berbagai tugas terkait manajemen gudang.

## Entity-Relationship Diagram (ERD)

Berikut adalah diagram yang menggambarkan hubungan antara entitas (tabel) dalam basis data Sistem Informasi Gudang:

![Entity-Relationship Diagram](https://github.com/PhiDelta-t/Tugas-Akhir/blob/main/ERD.png)

## Fitur Utama

- Manajemen Stok: Menambah, menghapus, dan memperbarui stok barang di gudang.

## Instalasi

1. *Persyaratan*: Pastikan Anda telah menginstal PHP, MySQL, dan Composer di komputer Anda.
2. *Clone Repositori*: Clone repositori ini ke direktori lokal Anda.
    bash
    git clone https://github.com/username/repo.git
    
3. *Konfigurasi Database*: Buat database MySQL dan konfigurasikan file .env dengan kredensial database Anda.
4. *Instal Dependensi*: Jalankan perintah berikut untuk menginstal dependensi PHP.
    bash
    composer install
    
5. *Jalankan Migrasi Database*: Jalankan migrasi database untuk membuat tabel-tabel yang diperlukan.
    bash
    php artisan migrate
    
6. *Jalankan Aplikasi*: Jalankan server lokal menggunakan perintah berikut.
    bash
    php artisan serve
    
7. *Akses Aplikasi*: Buka peramban web dan akses aplikasi melalui URL http://localhost:8000.

## Kontribusi

Jika Anda ingin berkontribusi pada pengembangan aplikasi ini, silakan ikuti langkah-langkah berikut:

1. Lakukan Fork repositori ini.
2. Buat cabang fitur baru: git checkout -b fitur-baru.
3. Lakukan perubahan yang diperlukan dan commit: git commit -am 'Menambahkan fitur baru'.
4. Push ke cabang baru: git push origin fitur-baru.
5. Buat Pull Request.

## Teknologi yang Digunakan

- *Laravel*: Framework PHP untuk pengembangan aplikasi web.
- *PHP*: Bahasa pemrograman utama untuk pengembangan aplikasi Laravel.
- *MySQL*: Sistem manajemen basis data relasional yang digunakan untuk menyimpan data aplikasi.
- *Composer*: Manajer paket PHP untuk mengelola dependensi aplikasi.
- *HTML, CSS, JavaScript*: Teknologi standar untuk pengembangan antarmuka pengguna web.
- *Bootstrap*: Kerangka kerja front-end untuk desain dan komponen antarmuka pengguna yang responsif.
- *Git*: Sistem kontrol versi untuk kolaborasi pengembangan perangkat lunak.


## Authors

- [Aulia Bhaskoro Maghribi](https://www.github.com/PhiDelta-t)

- [Mia kartika](https://www.github.com/Miakartika)

- [Rahmad Abdillah](https://www.github.com/RahmadAbdillah1)

- [Salsa Nabilla](https://www.github.com/salsa-nabilla)

## Lisensi

Proyek ini dilisensikan di bawah Lisensi GNU GPLv3 - lihat file [GNU GPLv3](https://choosealicense.com/licenses/gpl-3.0/) untuk detail lebih lanjut.
