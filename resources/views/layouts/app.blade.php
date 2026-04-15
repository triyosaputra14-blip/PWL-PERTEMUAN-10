<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CV Profile')</title>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap 5.3 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f6f8; color: #333; }
        .bg-gradient-primary { background: linear-gradient(135deg, #0d6efd, #0b5ed7); }
        .text-justify { text-align: justify; }
        .tracking-wide { letter-spacing: 0.05em; }
        @media print {
            body { background-color: #fff; }
            .no-print { display: none !important; }
            .shadow-sm, .shadow { box-shadow: none !important; }
            .print-border { border: 1px solid #dee2e6 !important; }
            .card { border: none !important; }
            .bg-light { background-color: transparent !important; }
            .badge.bg-light { border-color: #dee2e6 !important; }
        }
    </style>
</head>
<body>

    <!-- Header Navbar Sederhana (Hides on print) -->
    @include('partials.navbar')

    <!-- Konten Utama -->
    <div class="container px-3 pb-5">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmxc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
