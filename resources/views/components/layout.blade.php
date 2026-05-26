<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'HIMTI' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger mb-5">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('index') }}">
            <img src="{{ asset('images/himti.png') }}" alt="HIMTI" width="40">
            HIMTI UNITAMA
        </a>

        <div class="navbar-nav ms-auto">
            <a href="{{ route('create') }}" class="nav-link text-white">
                + Anggota
            </a>
        </div>

    </div>
</nav>

<div class="container mt-4">
    {{ $slot }}
</div>

<footer class="text-center mt-5 mb-3 text-muted">
    © {{ date('Y') }} HIMTI UNITAMA. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>