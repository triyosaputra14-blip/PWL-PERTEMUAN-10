# Laporan Praktikum: Project Web Curriculum Vitae (CV)

## 1. Latar Belakang
Dalam era digital saat ini, memiliki Curriculum Vitae (CV) atau portofolio online yang interaktif sangat penting bagi seorang profesional maupun mahasiswa, khususnya yang berkecimpung di bidang teknologi dan pengembangan web. CV digital tidak hanya berfungsi sebagai media untuk menampilkan profil, riwayat pendidikan, pengalaman, dan keahlian, tetapi juga sebagai bukti nyata (*showcase*) dari kemampuan teknis yang dimiliki. Oleh karena itu, pembuatan aplikasi CV berbasis web menggunakan framework modern seperti Laravel dan Bootstrap menjadi langkah pembelajaran yang sangat relevan untuk membekali kemampuan dalam membangun aplikasi web yang dinamis, responsif, dan fungsional.

## 2. Tujuan Praktikum
Tujuan dari pelaksanaan praktikum pembuatan project CV ini adalah:
1. Memahami dan mengimplementasikan konsep arsitektur MVC (Model-View-Controller) pada framework Laravel 12.
2. Mampu merancang dan membangun antarmuka pengguna (User Interface) yang responsif dengan pendekatan "*Mobile First*" menggunakan framework CSS Bootstrap 5.3.
3. Memahami proses pengelolaan *request* form, validasi data, serta pembaruan data profil pada aplikasi web.
4. Mampu mengimplementasikan manajemen *file upload* pada Laravel, khususnya fitur unggah foto profil berserta logika penghapusan otomatis (*auto-delete*) file foto lama agar penyimpanan server tetap efisien.
5. Mempraktikkan pembuatan *routing* dinamis untuk menampilkan halaman detail portofolio (berdasarkan *slug*).

## 3. Hasil Pembahasan
Berdasarkan pengerjaan project praktikum, telah berhasil dibangun sebuah sistem informasi CV/Portofolio sederhana dengan rincian fitur dan implementasi sebagai berikut:

*   **Desain Antarmuka (View):**
    Tampilan web dibangun menggunakan *Blade templating engine* (`welcome.blade.php` dan `profile-edit.blade.php`) yang dikombinasikan dengan Bootstrap 5.3. Layout telah dirancang secara responsif sehingga dapat diakses dengan baik melalui perangkat desktop maupun mobile. Halaman utama menampilkan secara komprehensif foto profil, informasi identitas (NIM, Nama), kontak, keahlian, dan ringkasan bio.
*   **Pengelolaan Logika dan Data (Controller):**
    Logika aplikasi dikelola secara terpusat melalui `CVProfileController.php`. Pengambilan dan penyimpanan data profil menggunakan sistem ORM (Object-Relational Mapping) bawaan Laravel melalui model `Profile`. 
*   **Fitur Edit Profil & Validasi:**
    Aplikasi dilengkapi dengan formulir edit profil yang memungkinkan pengguna untuk memodifikasi informasi pribadinya. Sebelum data disimpan, input divalidasi dengan aturan ketat (contoh: email harus valid, foto harus berekstensi gambar dengan maksimal ukuran 2MB) untuk menjaga integritas data.
*   **Manajemen File (Storage):**
    Pada proses *update* foto profil, sistem mengimplementasikan logika cerdas di mana aplikasi akan melakukan pengecekan foto yang ada (eksisting). Jika ditemukan, foto lama tersebut akan dihapus dari penyimpanan (`storage/app/public/photos`) secara otomatis sebelum foto baru disimpan dengan nama (*hash*) yang di-*generate* otomatis oleh Laravel.
*   **Fitur Portofolio Dinamis:**
    Terdapat *route* spesifik untuk menampilkan halaman detail portofolio yang bersifat dinamis dengan menangkap parameter *slug* (`showPortofolio($slug)`), memberikan kemudahan dalam menambahkan detail proyek di masa mendatang.

## 4. Kesimpulan
Praktikum pembuatan project web CV ini telah berhasil diselesaikan dengan baik. Pembuatan aplikasi ini membuktikan bahwa kombinasi framework Laravel 12 dan Bootstrap 5.3 sangat mumpuni dan efisien dalam membangun aplikasi web dinamis yang responsif. Melalui project ini, pemahaman terhadap alur kerja Laravel—mulai dari *Routing*, *Controller*, *Validation*, *File Storage*, hingga ke *Blade Templating*—menjadi semakin kuat. Logika manajemen file yang diimplementasikan (hapus foto lama saat mengunggah foto baru) juga melatih penerapan best practice dalam pengelolaan ruang penyimpanan di sisi server. Secara keseluruhan, project ini menjadi fondasi yang kuat untuk pengembangan sistem informasi portofolio yang lebih kompleks (seperti integrasi relasi *one-to-many* untuk riwayat pendidikan dan pengalaman) di masa mendatang.
