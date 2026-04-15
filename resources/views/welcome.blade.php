@extends('layouts.app')

@section('title', 'CV - ' . ($profile->nama ?? 'Mencari Profil'))

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show rounded-4 shadow-sm border-0 mb-4" role="alert">
    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($profile)
<div class="row justify-content-center g-4 mt-2">
    <!-- Kolom Kiri: Profil Singkat & Kontak -->
    <div class="col-12 col-lg-4">
        <div class="card shadow-sm border-0 rounded-4 print-border h-100">
            <div class="card-body text-center p-4">
                <div class="position-relative d-inline-block mb-3">
                    <!-- Foto Dinamis bersumber dari Storage / Auto-Avatar UI -->
                    <img src="{{ $profile->foto ? asset('storage/' . $profile->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($profile->nama) . '&background=random&size=200' }}" alt="Foto Profil" class="rounded-circle border border-3 border-primary shadow-sm" style="width: 140px; height: 140px; object-fit: cover;">
                </div>
                <h4 class="fw-bold mb-1">{{ $profile->nama }}</h4>
                <p class="text-primary fw-medium mb-3">Web Developer</p>
                <p class="text-muted small mb-3">NIM: {{ $profile->nim }}</p>

                <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary btn-sm mb-4 fw-semibold rounded-pill px-4 no-print">
                    <i class="bi bi-pencil-square me-1"></i> Edit Profil
                </a>
                
                <hr class="text-muted border-2 opacity-25">

                <div class="text-start mt-4">
                    <div class="d-flex align-items-center mb-3 text-secondary" style="font-size: 0.95rem;">
                        <i class="bi bi-envelope-fill fs-5 me-3 text-primary"></i>
                        <span>{{ $profile->email }}</span>
                    </div>
                    <div class="d-flex align-items-center mb-3 text-secondary" style="font-size: 0.95rem;">
                        <i class="bi bi-telephone-fill fs-5 me-3 text-primary"></i>
                        <span>{{ $profile->telepon }}</span>
                    </div>
                    <div class="d-flex align-items-center mb-3 text-secondary" style="font-size: 0.95rem;">
                        <i class="bi bi-geo-alt-fill fs-5 me-3 text-primary"></i>
                        <span>{{ $profile->alamat }}</span>
                    </div>
                </div>

                <hr class="text-muted border-2 opacity-25 mt-4">

                <div class="text-start mt-4">
                    <h6 class="fw-bold text-uppercase mb-3 tracking-wide" style="font-size: 0.9rem;">Keahlian Tertinggi</h6>
                    <div class="d-flex flex-wrap gap-2">
                        <!-- Substitusi statis sementara: Array dihilangkan karena belum ada relasi db -->
                        <span class="badge bg-light text-dark border px-3 py-2 fw-medium">HTML5 & CSS3</span>
                        <span class="badge bg-light text-dark border px-3 py-2 fw-medium">PHP & Laravel</span>
                        <span class="badge bg-light text-dark border px-3 py-2 fw-medium">UI/UX Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan: Detail Ringkasan, Pengalaman, Pendidikan -->
    <div class="col-12 col-lg-8">
        <div class="card shadow-sm border-0 rounded-4 print-border h-100">
            <div class="card-body p-4 p-md-5">
                
                <!-- Bio / Ringkasan -->
                <section class="mb-5">
                    <h5 class="fw-bold border-bottom border-primary border-2 pb-2 mb-3 d-inline-block">Profil Saya</h5>
                    <p class="text-secondary text-justify lh-lg" style="font-size: 0.95rem;">
                        {{ $profile->bio }}
                    </p>
                </section>

                <section class="mb-5">
                    <h5 class="fw-bold border-bottom border-primary border-2 pb-2 mb-3 d-inline-block">Pengalaman Kerja</h5>
                    <div class="alert alert-light border text-secondary small p-3">
                        <i class="bi bi-info-circle me-2 text-primary"></i> <em>Fitur multi-pengalaman (tabel relasi one-to-many) belum dibuat di database.</em>
                    </div>
                </section>

                <section>
                    <h5 class="fw-bold border-bottom border-primary border-2 pb-2 mb-3 d-inline-block">Riwayat Pendidikan</h5>
                    <div class="alert alert-light border text-secondary small p-3">
                        <i class="bi bi-info-circle me-2 text-primary"></i> <em>Fitur multi-pendidikan (tabel relasi one-to-many) belum dibuat di database.</em>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
@else
<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="alert alert-warning text-center shadow-sm rounded-4 border-0 p-5 bg-white print-border">
            <i class="bi bi-exclamation-triangle-fill text-warning d-block mb-3" style="font-size: 3rem;"></i>
            <h3 class="fw-bold fs-4">Akses Data Ditolak: Profil Teks Kosong</h3>
            <p class="text-secondary mb-0">Belum ada baris entitas record profil yang tersedia di dalam Tabel Profiles database MySQL Anda (Zero Data). Silakan tambahkan satu profil terlebih dahulu.</p>
        </div>
    </div>
</div>
@endif

@endsection
