<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') - Startup Lokal</title>
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg site-nav py-3">
    <div class="container">
        <a class="brand" href="{{ route('startups.index') }}">Startup<span>.</span>Lokal</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto gap-lg-3">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('startups.index') ? 'active' : '' }}" href="{{ route('startups.index') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('startups.index') }}#direktori">Direktori Startup</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    @yield('content')
</main>

<footer class="site-footer py-4 mt-5">
    <div class="container d-flex justify-content-center small">
        <span>&copy; {{ date('Y') }} Direktori Startup Lokal</span>
    </div>
</footer>

<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@stack('scripts')
</body>
</html>
