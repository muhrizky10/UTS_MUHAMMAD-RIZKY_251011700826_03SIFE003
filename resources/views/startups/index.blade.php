@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <p class="text-uppercase fw-semibold small" style="letter-spacing:.15em;color:var(--accent)">Karya anak bangsa</p>
                <h1 class="mb-3">Kenali <em>startup lokal</em> yang sedang tumbuh di sekitarmu.</h1>
                <p class="lead text-muted mb-4">Direktori startup Indonesia dari berbagai industri, lengkap dengan pendiri dan tautan website resminya.</p>
                <a href="#direktori" class="btn btn-accent">Jelajahi Direktori</a>
            </div>
            <div class="col-lg-5">
                <div class="row g-3">
                    <div class="col-6"><div class="stat"><strong>{{ $startups->count() }}</strong><small>Startup</small></div></div>
                    <div class="col-6"><div class="stat"><strong>{{ $startups->pluck('founder')->unique()->count() }}</strong><small>Pendiri</small></div></div>
                    <div class="col-12"><div class="stat"><strong>{{ $startups->pluck('industry')->unique()->count() }}</strong><small>Industri</small></div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="direktori" class="container pt-3">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
        <h2 class="h3 mb-0 text-dark">Direktori Startup</h2>
        <div class="d-flex flex-wrap gap-2">
            <button class="filter-btn active" data-filter="all">Semua</button>
            @foreach ($startups->pluck('industry')->unique() as $industry)
                <button class="filter-btn" data-filter="{{ $industry }}">{{ $industry }}</button>
            @endforeach
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($startups as $startup)
            <div class="col startup-item" data-industry="{{ $startup->industry }}">
                <article class="course-card position-relative d-flex flex-column">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/' . $startup->logo) }}" alt="Logo {{ $startup->name }}">
                        <span class="chip">{{ $startup->industry }}</span>
                    </div>
                    <div class="p-4 d-flex flex-column flex-grow-1">
                        <h3 class="h5 mb-3 text-dark">{{ $startup->name }}</h3>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="avatar">{{ strtoupper(substr($startup->founder, 0, 1)) }}</span>
                            <span class="small">Pendiri: {{ $startup->founder }}</span>
                        </div>
                        <p class="small text-muted">{{ \Illuminate\Support\Str::limit($startup->description, 90) }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('startups.show', $startup) }}" class="stretched-link fw-semibold text-decoration-none" style="color:var(--forest)">Lihat detail →</a>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</section>
@endsection

@push('scripts')
<script>
document.querySelectorAll('.filter-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
        document.querySelectorAll('.filter-btn').forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');
        var f = btn.dataset.filter;
        document.querySelectorAll('.startup-item').forEach(function (item) {
            item.classList.toggle('d-none', f !== 'all' && item.dataset.industry !== f);
        });
    });
});
</script>
@endpush
