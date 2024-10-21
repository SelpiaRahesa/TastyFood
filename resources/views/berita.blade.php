@extends('layouts.user')
@section('content')
    <div class="content-title">
        <h1>BERITA KAMI</h1>
    </div>
    <section class="news-tasty">
        <div class="news-tasty-section">
            <div class="image-content-news">
                <img src="{{ asset('assets/frontend/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" alt="Tasty Food 1"
                    loading="lazy">
            </div>

            <div class="text-content-news">
                <h3>APA SAJA MAKANAN KHAS NUSANTARA?</h3>
                <br>
                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu
                    rutrum
                    commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel
                    luctus ex. Fusce sit amet viverra ante.</p>
                <br>
                <p class="paragraph2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu
                    rutrum
                    commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel
                    luctus ex. Fusce sit amet viverra ante.</p>
                <br>
                <a href="#" class="btn-black">BACA SELENGKAPNYA</a>
            </div>
        </div>
    </section>
    <section class="content-news">
        <div class="news p-3">
            <div class="container-news">
                <h2 style="'Poppins', 'sans-serif'" class="news-1"><b>BERITA LAINNYA</b></h2>
                <br>
                <div class="row">
                    @php $berita = App\Models\Berita::orderBy('id', 'asc')->paginate(8); @endphp
                    @foreach ($berita as $data)
                        <div class="col-sm-3">
                            <div class="news-card mb-4">
                                <div class="aspect-ratio">
                                    <img src="{{ asset('/storage/beritas/' . $data->image) }}" class="news-img-top"
                                        alt="Food Image">
                                </div>
                                <div class="news-body">
                                    <h5 class="news-title">{{ $data->judul }}</h5>
                                    <p class="news-text">{{ $data->deskripsi }}
                                    </p>
                                    <a href="#" class="btn btn-link text-warning read-more">Baca selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                 <!-- Tombol Pagination -->
                 <div class="d-flex justify-content-center">
                    {{ $berita->links(('pagination::bootstrap-4')) }} <!-- Menampilkan link paginasi -->
                </div>
            </div>
    </section>
@endsection
