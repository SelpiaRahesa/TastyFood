@extends('layouts.user')
@section('content')
        <div class="content-title">
            <h1>GALERY KAMI</h1>
        </div>
        <!-- Carousel -->
    <section class="slider">
        <div id="foodCarousel" class="carousel slide content" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/frontend/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}" class="d-block img-fluid"
                        alt="Food 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/frontend/luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}" class="d-block img-fluid"
                        alt="Food 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/frontend/anna-pelzer-IGfIGP5ONV0-unsplash.jpg') }}" class="d-block img-fluid"
                        alt="Food 3">
                </div>
            </div>
            <!-- Previous Button with Font Awesome Icon -->
            <button class="carousel-control-prev" type="button" data-bs-target="#foodCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <!-- Next Button with Font Awesome Icon -->
            <button class="carousel-control-next" type="button" data-bs-target="#foodCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon">
                    <i class="fas fa-chevron-right"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </section>

    <section class="photo">
        <div class="container container-img">
            <div class="row">
                @php $galery = App\Models\Galery::orderBy('id', 'asc')->get(); @endphp
                @foreach ($galery as $data)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <img src="{{ asset('/storage/galeries/' . $data->image) }}" class="rounded-img" alt="Food">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
