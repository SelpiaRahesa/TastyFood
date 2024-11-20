@extends('layouts.user')
@section('content')
<div class="content-title">
    <h2> DETAIL BERITA</h2>
</div>
<section class="Food-Berita">
        <div class="berita-section">
            <div class="content-text-berita">
                <h3>{{ $berita->judul }}</h3>
                <p class="paragraph">{{ $berita->deskripsi }}</p>
                <hr>
                <p class="news-date mb-3"><small>Dibuat pada: {{ $berita->created_at->format('d F Y') }}</small></p>
            <p class="news-date mb-3"><small>Diperbaharui pada: {{ $berita->updated_at->format('d F Y') }}</small></p>
            </div>
<div class="image-content-berita">
                <img src="{{ asset('/storage/beritas/' . $berita->image) }}" alt="Tasty Food 1" loading="lazy">
            </div>

        </div>
</section>
@endsection
