@extends('layouts.user')
@section('content')
    <div class="content-title">
        <h2>BERITA KAMI</h2>
    </div>
    <section class="news-tasty">
        @php $berita = App\Models\Berita::where('id', 24)->first(); @endphp
        @if ($berita)
        <div class="news-tasty-section">
            <div class="image-content-news">
                <img src="{{ asset('/storage/beritas/' . $berita->image) }}" alt="Tasty Food 1"
                    loading="lazy">
            </div>

            <div class="text-content-news">
                <h3>{{ $berita->judul }}</h3>
                <p class="paragraph">{{ $berita->deskripsi }}</p>
                <br>
                <p class="paragraph2">{{ $berita->deskripsi }}</p>
            
                <a href="{{ url('detailBerita', $berita->id) }}" class="btn-black">BACA SELENGKAPNYA</a>
            </div>
        </div>
        @endif
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
                                    <p class="news-text"><span class="message-preview" onclick="toggleMessage(this)"
                                        data-full-message="{{ $data->deskripsi }}">
                                      {{ \Illuminate\Support\Str::limit($data->deskripsi, 50, '...') }}
                                  </span>
                                    </p>
                                    <a href="{{ url('detailBerita', $data->id) }}" class="btn btn-link text-warning read-more">Baca selengkapnya</a>
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
