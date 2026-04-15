Percobaan-2 selesai: Struktur folder dipetakan, View Partials diterapkan, dan Routing Dinamis berhasil diuji
Percobaan-3 selesai: Database MySQL terkoneksi, Tabel Profiles dibuat via Migration, dan Data berhasil ditarik secara dinamis ke halaman CV.
Percobaan-4 selesai: Form input berhasil dibuat, keamanan CSRF diimplementasikan, dan data profil kini bisa diperbarui langsung dari browser.

---
## Percobaan-5 ✅
**Status:** Selesai
**Fitur yang aktif:**
- Upload foto profil berfungsi
- Symlink storage sudah dibuat (`php artisan storage:link`)
- Auto-delete foto lama saat user mengunggah foto baru
- Preview gambar real-time di halaman edit profil (JavaScript vanilla)

**Catatan teknis:**
- Disk yang digunakan: `public`
- Folder penyimpanan foto: `storage/app/public/photos`
- Hapus foto lama dilakukan di Controller sebelum penyimpanan foto baru
---
