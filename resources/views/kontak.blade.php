@extends('layouts.user')
@section('content')
    <div class="content-title">
        <h2>KONTAK KAMI</h2>
    </div>
    <!-- Contact Form Section -->
    <div class="contact-form-section">
        <div class="container">
            <h3><b>KONTAK KAMI</b></h3>
            <form action="{{ route('user.message.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"
                            placeholder="Subject" />
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Name" required />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            placeholder="Email" required />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" placeholder="Message" required></textarea>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="submit-btn">KIRIM</button>
            </form>
        </div>
    </div>
    <div class="body-kontak">
        @php $kontak = App\Models\Kontak::orderBy('id')->get(); @endphp
        @foreach ($kontak as $data)
            <div class="kontak-info">
                <div class="kontak-item">
                    <i class="fas fa-envelope"></i>
                    <h3>EMAIL</h3>
                    <p>{{ $data->email }}</p>
                </div>
                <div class="kontak-item">
                    <i class="fas fa-phone"></i>
                    <h3>PHONE</h3>
                    <p>{{ $data->no_telepon }}</p>
                </div>
                <div class="kontak-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>LOCATION</h3>
                    <p>{{ $data->alamat }}</p>
                </div>
            </div>
        @endforeach
    </div>
    {{-- Maps --}}
            <section class="map">
                <div id="map">
                    @php
                        $kontak = App\Models\Kontak::first();
                    @endphp
                    <script>
                        // Ambil alamat dari database yang dikirim melalui controller
                        var alamat="{{ $kontak->alamat }}" ;
                    </script>
                </div>
            </section>
@endsection
