<x-layout title="Rumah Sakit Umi Barokah">
    <div class="container-fluid" id="carousel-wrap">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{ asset('images/default.jpg') }}">
            </div>
            <div class="item">
                <img src="{{ asset('images/default.jpg') }}">
            </div>
            <div class="item">
                <img src="{{ asset('images/default.jpg') }}">
            </div>
        </div>
    </div>
    <section class="bg-light">
        <div class="container" id="medical-service-wrap">
            <div class="m-2" >
                <div class="text-center">
                    <p class="section-title">Layanan Medis</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="" class="medical-service-content">
                        <div class="card">
                            <img src="{{ asset('images/default-thumbnail.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h3 class="fw-300 text-dark">Ub.Maternity</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="medical-service-content">
                        <div class="card">
                            <img src="{{ asset('images/default-thumbnail.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h3 class="fw-300 text-dark">Rawat Jalan</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="medical-service-content">
                        <div class="card">
                            <img src="{{ asset('images/default-thumbnail.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h3 class="fw-300 text-dark">Rawat Inap</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container p-4" class="article-wrap">
        <div class="m-2">
            <div class="text-center">
                <p class="section-title">Artikel Kesehatan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="">
                    <div class="card">
                        <img src="{{ asset('images/default-thumbnail.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cara menjaga pola makan disaat inggin diet ketat</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="card">
                        <img src="{{ asset('images/default-thumbnail.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cara menjaga pola makan disaat inggin diet ketat</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="card">
                        <img src="{{ asset('images/default-thumbnail.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cara menjaga pola makan disaat inggin diet ketat</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-layout>