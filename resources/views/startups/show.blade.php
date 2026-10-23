@extends('layouts.app')

@section('title', $startup->name)

@section('content')
<section class="band">
    <div class="container">
        <a href="{{ route('startups.index') }}" class="small text-decoration-none">← Kembali ke direktori</a>
        <div class="mt-4">
            <span class="chip mb-3">{{ $startup->industry }}</span>
            <h1 class="display-5 text-white">{{ $startup->name }}</h1>
            <p class="mb-0 opacity-75">Didirikan oleh {{ $startup->founder }}</p>
        </div>
    </div>
</section>

<div class="container pull-up">
    <div class="row g-4">
        <div class="col-lg-8">
            <img src="{{ asset('assets/images/' . $startup->logo) }}" alt="Logo {{ $startup->name }}" class="img-fluid w-100 rounded-4 shadow mb-4">

            <h2 class="h4 mb-3 text-dark">Tentang Startup</h2>
            <p class="text-muted mb-4">{{ $startup->description }}</p>

            <div class="row g-3 mb-4">
                <div class="col-sm-4"><div class="info-box"><small>Pendiri</small><strong>{{ $startup->founder }}</strong></div></div>
                <div class="col-sm-4"><div class="info-box"><small>Industri</small><strong>{{ $startup->industry }}</strong></div></div>
                <div class="col-sm-4"><div class="info-box"><small>Website</small><strong class="text-break">{{ preg_replace('#^https?://#', '', $startup->website) }}</strong></div></div>
            </div>

            @if ($related->count())
                <h2 class="h4 mb-3 text-dark">Startup Lainnya</h2>
                <div class="row row-cols-1 row-cols-sm-3 g-3">
                    @foreach ($related as $r)
                        <div class="col">
                            <a href="{{ route('startups.show', $r) }}" class="text-decoration-none">
                                <div class="course-card">
                                    <img src="{{ asset('assets/images/' . $r->logo) }}" alt="Logo {{ $r->name }}">
                                    <div class="p-3"><div class="small fw-semibold text-dark">{{ $r->name }}</div></div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="col-lg-4">
            <div class="side-card">
                <small class="text-muted">Website resmi</small>
                <div class="fw-semibold text-break mb-3">{{ $startup->website }}</div>
                <a href="{{ $startup->website }}" target="_blank" rel="noopener" class="btn btn-accent w-100 mb-2">Kunjungi Website</a>
                <a href="{{ route('startups.index') }}" class="btn btn-outline-secondary w-100 rounded-pill">Kembali</a>
                <hr>
                <ul class="list-unstyled small text-muted mb-0">
                    <li class="mb-1">🏷 Industri: {{ $startup->industry }}</li>
                    <li>👤 Pendiri: {{ $startup->founder }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
