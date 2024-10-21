@extends('layouts.home')
@section('content')
    {{-- ABOUT --}}
    <div class="about">
        <div class="container mb-3">
            <h3 class="mb-3 text-center" style="font-family: Arial, sans-serif; font-weight: bold"><b>TENTANG KAMI</b></h3>
            <p class="about">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,
                    dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex.
                    Fusce sit amet viverra ante.</span>
            </p>
            <div class="black-line1"></div>
        </div>
    </div>

    {{-- END ABOUT --}}
    {{-- GALERY --}}
<div class="gallery">
    <div class="card md-3 mb-4">
        <img class="card-image" src="{{ asset('assets/frontend/img-1.png') }}" alt="Image 1">
        <h2 class="card1 mb-3"><b>LOREM IPSUM</b></h2>
        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
    </div>
    <div class="card md-3 mb-4">
        <img class="card-image" src="{{ asset('assets/frontend/img-2.png') }}" alt="Image 2">
        <h2 class="card1 mb-3"><b>LOREM IPSUM</b></h2>
        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
    </div>
    <div class="card md-3 mb-4">
        <img class="card-image" src="{{ asset('assets/frontend/img-3.png') }}" alt="Image 3">
        <h2 class="card1 mb-3"><b>LOREM IPSUM</b></h2>
        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
    </div>
    <div class="card md-3 mb-4">
        <img class="card-image" src="{{ asset('assets/frontend/img-4.png') }}" alt="Image 4">
        <h2 class="card1 mb-3"><b>LOREM IPSUM</b></h2>
        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
    </div>
</div>
{{-- END GALERY --}}

    {{-- BERITA --}}
    <section class="content-news">
        <div class="news p-3">
            <h2 style="'Poppins', 'sans-serif'" class="m-3"><b>BERITA KAMI</b></h2>
            <div class="container-news">
                <div class="row">
                    <div class="col-md-6">
                        <div class="news-card-big mb-4">
                            <div class="aspect-ratio">
                                <img src="{{ asset('assets/frontend/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}"
                                    class="news-img-top" alt="Food Image">
                            </div>
                            <div class="news-body mb-5">
                                <h5 class="news-title mb-4">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</h5>
                                <p class="news-content mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                    scelerisque magna aliquet cursus tempus. Duis viverra metus ut turpis elementum
                                    elementum.</p>
                                <a href="#" class="btn btn-link text-warning read-more">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="news-card mb-4">
                                    <div class="aspect-ratio">
                                        <img src="{{ asset('assets/frontend/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}"
                                            class="news-img-top" alt="Food Image">
                                    </div>
                                    <div class="news-body">
                                        <h5 class="news-title">Lorem Ipsum</h5>
                                        <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <a href="#" class="btn btn-link text-warning read-more">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="news-card mb-4">
                                    <div class="aspect-ratio">
                                        <img src="{{ asset('assets/frontend/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}"
                                            class="news-img-top" alt="Food Image">
                                    </div>
                                    <div class="news-body">
                                        <h5 class="news-title">Lorem Ipsum</h5>
                                        <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <a href="#" class="btn btn-link text-warning read-more">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="news-card mb-4">
                                    <div class="aspect-ratio">
                                        <img src="{{ asset('assets/frontend/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}"
                                            class="news-img-top" alt="Food Image">
                                    </div>
                                    <div class="news-body">
                                        <h5 class="news-title">Lorem Ipsum</h5>
                                        <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <a href="#" class="btn btn-link text-warning read-more">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="news-card mb-4">
                                    <div class="aspect-ratio">
                                        <img src="{{ asset('assets/frontend/luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}"
                                            class="news-img-top" alt="Food Image">
                                    </div>
                                    <div class="news-body">
                                        <h5 class="news-title">Lorem Ipsum</h5>
                                        <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <a href="#" class="btn btn-link text-warning read-more">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END BERITA --}}

    {{-- GALERY --}}
    <section class="content-galeri">
        <div class="galeri p-1">
            <div class="galeri-title">
                <h3 class="mb-3 text-center"><b>GALERI KAMI</b>
            </div>
            <div class="row galeri">
                @php $galery = App\Models\Galery::orderBy('id', 'asc')->get(); @endphp
                @foreach ($galery->take(6) as $data)
                    <div class="col-10 col-sm-4 col-md-3">
                        <div class="image-container">
                            <img src="{{ asset('/storage/galeries/' . $data->image) }}"
                                class="rounded img-fluid image-shadow">
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{url('/galery')}}" class="galeri-btn">LIHAT LEBIH BANYAK</a>
        </div>
    </section>
    {{-- END GALERY --}}
@endsection


