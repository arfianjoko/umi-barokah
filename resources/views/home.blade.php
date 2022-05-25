<x-layout title="Rumah Sakit Umi Barokah">
    <div class="container-fluid" id="banner-wrap">
        <div class="owl-carousel owl-theme" id="banner">
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
    <section class="bg-primary bg-opacity-10" style="padding: 2rem 0 2rem 0 !important">
        <div class="container" id="medical-service-wrap">
            <div class="m-1">
                <div class="text-center">
                    <p class="section-title">Layanan Medis</p>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-md-4 text-center">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa-thin fa-truck-medical" style="font-size: 50px;"></i>
                            <h5 class="fw-bolder pt-3 pb-0">Rawat Jalan</h5>
                            <p>Poli Anak, Poli Obgyn, Poli Gigi, <a href="">Lihat Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa-thin fa-bed-pulse" style="font-size: 50px;"></i>
                            <h5 class="fw-bolder pt-3 pb-0">Rawat Inap</h5>
                            <p>Kamar I, VIP, VIIP, Ruang Operasi <a href="">Lihat Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa-thin fa-wave-pulse" style="font-size: 50px;"></i>
                            <h5 class="fw-bolder pt-3 pb-0">IGD</h5>
                            <p>Instalasi Gawat Darurat <a href="">Lihat Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="padding: 2rem 0 2rem 0 !important">
        <div class="container" id="excellent-medical-service-wrap">
            <div class="m-1">
                <div class="text-center">
                    <p class="section-title">Layanan Medis Unggulan</p>
                </div>
            </div>
            <div class="text-center p-4 owl-carousel owl-theme" id="excellent-medical-service">
                <div class="text-center item">
                    <div class="card bg-light border">
                        <div class="card-body text-center">
                            <i class="fa-thin fa-person-pregnant" style="font-size: 50px;"></i>
                            <h5 class="fw-bolder pt-3 pb-0">UB Fetomaternal</h5>
                            <p><a href="">Lihat Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
                <div class="text-center item">
                    <div class="card bg-light border">
                        <div class="card-body text-center">
                            <i class="fa-thin fa-virus" style="font-size: 50px;"></i>
                            <h5 class="fw-bolder pt-3 pb-0">Tes PCR Covid 19</h5>
                            <p><a href="">Lihat Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
                <div class="text-center item">
                    <div class="card bg-light border">
                        <div class="card-body text-center">
                            <i class="fa-thin fa-face-mask" style="font-size: 50px;"></i>
                            <h5 class="fw-bolder pt-3 pb-0">Tes Antige Covid 19</h5>
                            <p><a href="">Lihat Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="padding: 2rem 0 2rem 0 !important">
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
    </section>
    <section style="padding: 2rem 0 2rem 0 !important">
        <div class="container" id="cooperation-wrap">
            <div class="m-1">
                <div class="text-center">
                    <p class="section-title">Mitra Kerja Sama</p>
                </div>
            </div>
            <section class="bg-primary bg-opacity-10 rounded-5" style="padding: 0 !important">
                <div class="text-center p-4 owl-carousel owl-theme" id="cooperation">
                    <img class="item" src="{{ asset('images/default-thumbnail.jpg') }}">
                </div>
            </section>
        </div>
    </section>
</x-layout>