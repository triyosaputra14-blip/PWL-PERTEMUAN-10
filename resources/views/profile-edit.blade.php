@extends('layouts.app')

@section('title', 'Edit Profil CV')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-12 col-lg-8">
        
        <div class="d-flex justify-content-between align-items-center mb-4 no-print">
            <h2 class="fw-bold text-primary mb-0">Edit Profil Anda</h2>
            <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left me-2"></i> Kembali ke CV
            </a>
        </div>

        <div class="card shadow-sm border-0 rounded-4 print-border">
            <div class="card-body p-4 p-md-5">
                
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <h5 class="fw-bold border-bottom border-primary border-2 pb-2 mb-4 d-inline-block">Informasi Pribadi</h5>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="nama" class="form-label fw-semibold text-secondary">Identitas Lengkap (Nama)</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $profile->nama ?? '') }}" required placeholder="Masukkan nama lengkap">
                            @error('nama')
                                <div class="invalid-feedback fw-bold">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nim" class="form-label fw-semibold text-secondary">Nomor Induk Mahasiswa (NIM)</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim', $profile->nim ?? '') }}" required placeholder="Masukkan NIM Anda">
                            @error('nim')
                                <div class="invalid-feedback fw-bold">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="foto" class="form-label fw-semibold text-secondary">Unggah Foto Profil Baru</label>
                        
                        <!-- Preview Gambar -->
                        <div class="mb-2">
                            <img id="fotoPreview" 
                                 src="{{ $profile->foto ? asset('storage/' . $profile->foto) : '#' }}" 
                                 alt="Preview Foto" 
                                 class="shadow-sm border {{ $profile->foto ? '' : 'd-none' }}" 
                                 style="max-width: 150px; max-height: 150px; border-radius: 8px; object-fit: cover; margin-top: 8px;">
                        </div>

                        <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto" accept="image/*">
                        <div class="form-text text-muted small">Maksimal ukuran 2MB (JPG, JPEG, PNG). Biarkan kosong jika tidak ingin mengubah foto.</div>
                        @error('foto')
                            <div class="invalid-feedback fw-bold">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-semibold text-secondary">Alamat Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $profile->email ?? '') }}" required placeholder="email@contoh.com">
                            @error('email')
                                <div class="invalid-feedback fw-bold">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="telepon" class="form-label fw-semibold text-secondary">Nomor Telepon</label>
                            <input type="tel" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ old('telepon', $profile->telepon ?? '') }}" placeholder="+62 8xx xxxx">
                            @error('telepon')
                                <div class="invalid-feedback fw-bold">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="alamat" class="form-label fw-semibold text-secondary">Lokasi / Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="2" placeholder="Sebutkan kota atau alamat domisili Anda">{{ old('alamat', $profile->alamat ?? '') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback fw-bold">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <h5 class="fw-bold border-bottom border-primary border-2 pb-2 mt-5 mb-4 d-inline-block">Ringkasan Diri</h5>

                    <div class="mb-5">
                        <label for="bio" class="form-label fw-semibold text-secondary">Deskripsi Singkat / Bio (Tentang Saya)</label>
                        <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="5" placeholder="Jelaskan secara singkat mengenai profil dan minat karir Anda...">{{ old('bio', $profile->bio ?? '') }}</textarea>
                        @error('bio')
                            <div class="invalid-feedback fw-bold">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg fw-bold rounded-3">
                            <i class="bi bi-save me-2"></i> Simpan Perubahan Profil
                        </button>
                    </div>

                </form>

            </div>
        </div>
        
    </div>
</div>

<script>
    // Tugas 2: Preview Gambar (JavaScript Vanilla)
    document.addEventListener('DOMContentLoaded', function() {
        const inputFoto = document.getElementById('foto');
        const fotoPreview = document.getElementById('fotoPreview');

        if (inputFoto && fotoPreview) {
            inputFoto.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        fotoPreview.src = e.target.result;
                        fotoPreview.classList.remove('d-none');
                    }
                    reader.readAsDataURL(file);
                } else {
                    // Revert to original behavior or keep latest.
                    // This is minimal viable handling
                }
            });
        }
    });
</script>
@endsection
