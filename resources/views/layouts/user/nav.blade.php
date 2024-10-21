<div class="background-image">
    <div class="container pt-4">
        <nav class="navbar navbar-expand-lg pe-4">
            <h1><a class="navbar-brand" href="{{ url('/') }}">TASTY FOOD</a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('tentang') }}">TENTANG</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('berita') }}">BERITA</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('galery') }}">GALERI</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('kontak') }}">KONTAK</a></li>
                </ul>
            </div>
        </nav>
        <div class="hero"></div>
        <div class="content">
            <div class="black-line mb-3"></div>
            <h1 class="mb-3">HEALTHY</h1>
            <h1 class="mb-3"><strong><b><b>TATY FOOD</b></b></strong></h1>
            <p>
                <span class="konten" style="line-height: 2;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                    commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim
                    neque, vel luctus ex. Fusce sit amet <br> viverra ante.
                </span>
            </p>
            <a href="{{ url('tentang') }}" class="btn-black"><b>TENTANG KAMI</b></a>
        </div>
    </div>
</div>
