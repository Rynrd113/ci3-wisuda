# Portal Wisuda

Portal Wisuda adalah aplikasi yang dirancang untuk mengelola seluruh proses wisuda dengan efisien dan efektif. Aplikasi ini memiliki beberapa halaman utama yang masing-masing memiliki fungsi spesifik, yaitu:

1. **Halaman Admin**: 
    - Digunakan oleh admin untuk mengelola seluruh data dan konfigurasi aplikasi.
    - Fitur: manajemen pengguna, pengaturan sistem, dan pemantauan aktivitas.

2. **Halaman Akademik**: 
    - Digunakan untuk mengelola data akademik mahasiswa yang akan wisuda.
    - Fitur: input dan verifikasi data akademik, pengelolaan jadwal wisuda, dan pelaporan.

3. **Dashboard**: 
    - Menampilkan ringkasan informasi dan statistik terkait proses wisuda.
    - Fitur: grafik statistik, notifikasi penting, dan laporan status wisuda.

4. **Validasi Foto**: 
    - Digunakan untuk validasi foto mahasiswa yang akan digunakan dalam proses wisuda.
    - Fitur: upload foto, verifikasi kualitas foto, dan persetujuan akhir.

5. **Validasi Toga**: 
    - Digunakan untuk validasi peminjaman dan pengembalian toga wisuda.
    - Fitur: pemesanan toga, status peminjaman, dan pengembalian toga.

6. **Validasi Keuangan/Pembayaran**: 
    - Digunakan untuk validasi pembayaran biaya wisuda.
    - Fitur: konfirmasi pembayaran, riwayat transaksi, dan pengelolaan tagihan.

7. **Homepage**: 
    - Halaman utama yang menampilkan informasi umum tentang portal wisuda.
    - Fitur: berita terbaru, panduan penggunaan, dan kontak bantuan.

Dengan fitur-fitur tersebut, Portal Wisuda diharapkan dapat membantu mempermudah dan mempercepat proses wisuda bagi mahasiswa dan pihak akademik.

## CodeIgniter 3

Portal Wisuda ini dibuat menggunakan CodeIgniter 3, sebuah framework PHP yang ringan dan mudah digunakan. CodeIgniter 3 membantu pengembang untuk membuat aplikasi web dengan cepat dan efisien.

### Instalasi CodeIgniter 3 dari GitHub

Berikut adalah langkah-langkah untuk menginstal CodeIgniter 3 dari GitHub:

1. **Clone Repository**:
    ```bash
    git clone https://github.com/Rynrd113/ci3-wisuda
    ```

2. **Pindah ke Direktori Project**:
    ```bash
    cd ci3-wisuda
    ```

3. **Konfigurasi Base URL**:
    Buka file `application/config/config.php` dan atur `base_url` sesuai dengan URL aplikasi Anda.
    ```php
    $config['base_url'] = 'http://localhost/portal-wisuda/';
    ```

4. **Konfigurasi Database**:
    Buka file `application/config/database.php` dan atur konfigurasi database sesuai dengan pengaturan database Anda.
    ```php
    $db['default'] = array(
        'dsn'   => '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'portal_wisuda',
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'db_debug' => (ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
    );
    ```

5. **Jalankan Aplikasi**:
    Pastikan server web Anda (seperti Apache atau Nginx) sudah berjalan, kemudian akses aplikasi melalui browser dengan URL yang telah Anda konfigurasi.

Dengan mengikuti langkah-langkah di atas, Anda dapat menginstal dan menjalankan Portal Wisuda yang dibangun dengan CodeIgniter 3.
