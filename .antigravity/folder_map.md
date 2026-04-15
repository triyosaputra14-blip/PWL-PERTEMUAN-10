# Peta Folder Percobaan-1 (Laravel)

Berikut adalah penjelasan singkat mengenai beberapa direktori utama pada framework Laravel:

## 1. app/Http/Controllers
Folder ini digunakan sebagai tempat menyimpan **Controller**. Controller bertugas sebagai penghubung (pengendali) antara alur logika dari routing, model, dan kemudian mengirimkan data akhirnya menuju *View* (tampilan browser).

## 2. resources/views
Direktori ini difungsikan murni untuk menyimpan file-file antarmuka (UI) dalam ekstensi `.blade.php`. Di sinilah kerangka HTML dan struktur layout utama diciptakan sebelum di-render ke hadapan pengguna.

## 3. routes
Berfungsi sebagai pusat navigasi atau peta penunjuk arah seluruh endpoint URL dalam aplikasi. Secara khusus, file `routes/web.php` menerima permintaan rute (URL) yang diketik oleh browser dan menentukan fungsi/controller mana yang harus dieksekusi.

## 4. public
Berfungsi sebagai direktori pintu masuk utama web (*document root*) sistem Laravel, serta digunakan untuk menampung seluruh berkas *assets* statis (seperti gambar/foto, CSS, JavaScript, font). Akses public secara murni ditujukan ke dalam sini demi keamanan file-file logik inti.

---

## File yang Berhasil Diubah/Dibuat pada Percobaan-1

Selama rangkaian pengerjaan Praktikum Percobaan-1 (Membuat CV), berikut adalah daftar file spesifik yang telah kita ubah atau buat baru:

1. **`app/Http/Controllers/CVProfileController.php`** 
   *(Membuat logika array profil CV dan me-return layout View)*
2. **`resources/views/welcome.blade.php`**
   *(Merombak penuh desain bawaan Laravel menjadi halaman profil layout CV Card berbasis ATS yang modern)*
3. **`resources/views/layouts/app.blade.php`**
   *(Membuat kerangka *blueprint* desain utamanya yang ditenagai CDN Bootstrap, inter font, dan fitur Print-to-PDF)*
4. **`routes/web.php`**
   *(Mengubah jalur default `/` agar langsung memanggil method `index` dari `CVProfileController` alih-alih `welcome` default kosong)*
