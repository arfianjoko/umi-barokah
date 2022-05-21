<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand fw-bold" href="#page-top">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-lg-3" href="{{ url('') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-lg-3" href="{{ url('') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-lg-3" href="{{ url('') }}">Alur Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-lg-3" href="{{ url('') }}">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-lg-3" href="{{ url('') }}">Pengaduan</a>
                </li>
            </ul>
            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                <span class="d-flex align-items-center">
                    <span class="small">Booking Sekarang</span>
                </span>
            </button>
        </div>
    </div>
</nav>