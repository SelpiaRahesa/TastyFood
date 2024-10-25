<div class="background-image-other">
    <aside class="sidebar">
        <div class="sidebar-header">
            <span class="sidebar-title">Menu</span>
            <button class="close-btn">&times;</button>
        </div>
        <ul class="sidebar-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('tentang') }}">Tentang</a></li>
            <li><a href="{{ url('berita') }}">Berita</a></li>
            <li><a href="{{ url('galery') }}">Galeri</a></li>
            <li><a href="{{ url('kontak') }}">Kontak</a></li>
        </ul>
        <div class="sidebar-footer">
            &copy; 2024 Tasty Food. All rights reserved.
        </div>
    </aside>

    <div class="container pt-4">
        <nav class="navbar navbar-expand-lg pe-4 nav-other">
            <h1><a class="navbar-brand tasty-food" href="{{ url('/') }}">TASTY FOOD</a></h1>
            <button class="navbar-toggler" type="button">
                <span class="toggler-icon">&#9776;</span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('tentang') }}">TENTANG</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('berita') }}">BERITA</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('galery') }}">GALERI</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('kontak') }}">KONTAK</a></li>
                </ul>
            </div>
        </nav>
        <!-- konten utama di sini -->
    </div>

</div>




<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navbarToggler = document.querySelector(".navbar-toggler");
        const sidebar = document.querySelector(".sidebar");
        const closeBtn = document.querySelector(".close-btn");

        navbarToggler.addEventListener("click", function() {
            sidebar.classList.add("active");
        });

        closeBtn.addEventListener("click", function() {
            sidebar.classList.remove("active");
        });

        overlay.addEventListener("click", function() {
            sidebar.classList.remove("active");
        });
    });
</script>
