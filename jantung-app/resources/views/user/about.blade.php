@extends('layouts.master')

@section('content')
<style>
    .justify {
    text-align: justify;
    }
</style>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Tentang Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="{{ asset('landpage/img/about.jpg') }}">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentang Kami</p>
                <h1 class="display-5 mb-4">ADH | Heart Diasase Menjadi Alat Pengecek Kesehatan</h1>
                <p class="mb-4">
                    Heart Diasase atau penyakit jantung merupakan keadaan dimana jantung tidak dapat
                    melaksanakan fungsinya dengan baik, sehingga kerja jantung sebagai pemompa darah
                    dan oksigen ke seluruh tubuh terganggu. Pada akhirnya dapat menimbulkan berbagai
                    pernyakit.
                </p>
                <div class="border rounded p-4">
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                aria-selected="true">Gejala</button>
                            <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                aria-selected="false">Faktor</button>
                            <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                aria-selected="false">Pengobatan</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                            aria-labelledby="nav-story-tab">
                            <p>Berikut adalah beberapa gejala awal seseorang terkena penyakit jantung :</p>
                            <p class="mb-0">
                                Nyeri pada dada dan tulang belakang, batuk, sakit kepala, mual, nafsu makan berkurang,
                                ulu hati terasa panas, keringat yang berlebih, jeda napas pendek.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                            aria-labelledby="nav-mission-tab">
                            <p>Beberapa faktor risiko penyakit jantung antara lain, yakni :</p>
                            <p class="mb-0 justify">Gaya hidup tidak sehat,
                                seperti makan makanan tinggi karbohidrat atau lemak, obesitas,
                                jarang melakukan aktivitas fisik, serta kebiasaan merokok.
                                Riwayat keluarga juga memainkan peran besar akan risiko penyakit jantung.
                                </p>
                        </div>
                        <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                            <p class="mb-0 justify">Pengobatan untuk penyakit jantung umumnya menggunakan atau mengonsumsi
                                obat-obatan yang telah diberikan oleh dokter, namun
                                ada juga jenis penyakit jantung yang hanya dapat diselesaikan dengan
                                cara operasi. Penyakit jantung dapat dicegah dengan mengonsumsi makanan tinggi serat,
                                menghentikan kebiasaan merokok, malakukan aktivitas fisik, serta memeriksa tekanan darah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-times text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Cek Tanpa Resiko</h4>
                                <span>Berisi prediksi terkena penyakit jantung</span>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Tenaga Para Ahli</h4>
                                <span>Mempunyai saran secara langsung dari para ahli</span>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>24 Jam</h4>
                                <span>Official Customer Service</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-users fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">4030</h1>
                <span class="fs-5 text-white">Pelanggan Senang</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-check fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">3910</h1>
                <span class="fs-5 text-white">Prediksi Tepat</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">2000</h1>
                <span class="fs-5 text-white">Tenaga Ahli</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-award fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">1000</h1>
                <span class="fs-5 text-white">Penghargaan</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tenaga Ahli</p>
            <h1 class="display-5 mb-5">ADH TEAM</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="{{ asset('landpage/img/team-1.jpg') }}" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Ardha</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href="https://discordapp.com/users/tvd#7101">
                                <i class="fab fa-discord"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://github.com/atavada">
                                <i class="fab fa-github"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.instagram.com/_atvdd/">
                                <i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="{{ asset('landpage/img/team-2.jpg') }}" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">David</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href="https://discordapp.com/users/David%20Alamsyah#2153"><i
                                    class="fab fa-discord"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://github.com/DavidSatria29">
                                <i class="fab fa-github"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.instagram.com/david_alamsyahh"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="{{ asset('landpage/img/team-3.jpg') }}" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Harun</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href="https://discordapp.com/users/Harsta#0557"><i
                                    class="fab fa-discord"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://github.com/Harunsatr">
                                <i class="fab fa-github"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href="https://www.instagram.com/harunsatr"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@stop
