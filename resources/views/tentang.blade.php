@extends('layouts.user')
@section('content')
    <div class="content-title">
        <h2>TENTANG KAMI</h2>
    </div>
    <section class="tastyFood">
        @php $tentang = App\Models\Tentang::where('id', 11)->first(); @endphp
        @if ($tentang)
            <div class="tasty-food-section">
                <div class="text-content">
                    <h3>{{ $tentang->judul }}</h3>
                    <p class="paragraph"><b>{{ $tentang->subjudul }}</b></p>
                    <p class="paragraph2">{{ $tentang->deskripsi }}</p>
                </div>
                <div class="image-content">
                    <img src="{{ asset('/storage/tentangs/' . $tentang->image1) }}" alt="Tasty Food 1" loading="lazy">
                    <img src="{{ asset('/storage/tentangs/' . $tentang->image2) }}" alt="Tasty Food 2" loading="lazy">
                </div>
            </div>
        @endif
    </section>

    <section class="Tasty-Food">
        @php $tentang = App\Models\Tentang::where('id', 8)->first(); @endphp
        @if ($tentang)
            <div class="food-section">
                <div class="content-image">
                    <img src="{{ asset('/storage/tentangs/' . $tentang->image1) }}" alt="Tasty Food 1" loading="lazy">
                    <img src="{{ asset('/storage/tentangs/' . $tentang->image2) }}" alt="Tasty Food 2" loading="lazy">
                </div>
                <div class="content-text">
                    <h3>{{ $tentang->judul }}</h3>
                    <p class="paragraph">{{ $tentang->deskripsi }}</p>
                </div>
            </div>
        @endif
    </section>

    <section class="Food">
        @php $tentang = App\Models\Tentang::where('id', 9)->first(); @endphp
        @if ($tentang)
            <div class="tasty-section">
                <div class="image-content-misi order-md-2">
                    <img src="{{ asset('/storage/tentangs/' . $tentang->image1) }}" alt="Tasty Food 1" loading="lazy">
                </div>
                <div class="content-text-misi order-md-1">
                    <h3>{{ $tentang->judul }}</h3>
                    <p class="paragraph">{{ $tentang->deskripsi }}</p>
                </div>

            </div>
        @endif
    </section>

@endsection
