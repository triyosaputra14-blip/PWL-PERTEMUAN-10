@extends('layouts.app')

@section('title', 'Detail Portofolio: ' . $portofolioData['judul'])

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-12 col-lg-8">
        <nav aria-label="breadcrumb" class="mb-4 no-print">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none"><i class="bi bi-house-door-fill me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $portofolioData['judul'] }}</li>
            </ol>
        </nav>

        <div class="card shadow-sm border-0 rounded-4 print-border">
            <div class="card-body p-4 p-md-5">
                <h2 class="fw-bold text-primary mb-3">{{ $portofolioData['judul'] }}</h2>
                
                <div class="row mb-4 bg-light rounded-3 p-3 mx-0">
                    <div class="col-12 col-sm-6 mb-2 mb-sm-0">
                        <div class="text-muted small text-uppercase tracking-wide mb-1">Klien</div>
                        <div class="fw-semibold"><i class="bi bi-building me-2 text-primary"></i>{{ $portofolioData['klien'] }}</div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="text-muted small text-uppercase tracking-wide mb-1">Tahun Penyelesaian</div>
                        <div class="fw-semibold"><i class="bi bi-calendar-check me-2 text-primary"></i>{{ $portofolioData['tahun'] }}</div>
                    </div>
                </div>

                <h5 class="fw-bold border-bottom border-primary border-2 pb-2 mb-3 d-inline-block">Deskripsi Proyek</h5>
                <p class="text-secondary lh-lg mb-0" style="font-size: 1.05rem; text-align: justify;">
                    {{ $portofolioData['deskripsi'] }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
