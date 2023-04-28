@extends('layouts.master')

@section('content')
<!-- Page Header Start -->
<style>
    .justify {
    text-align: justify;
    }
</style>

<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Fitur</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Fitur</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Kepuasan anda adalah prioritas utama bagi kami</p>
            <h1 class="display-5 mb-5">ADH | Heart Diasase</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Rekomendasi Obat</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Melayani Setiap Waktu</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Algoritma K-Means</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Algoritma Naive Bayes</h5>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="{{ asset('landpage/img/service-1.jpg') }}"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">Rekomendasi Obat</h3>
                                <p class="mb-4 justify">
                                    Obat yang direkomendasikan berdasarkan Peraturan Menteri Kesehatan Republik Indonesia
                                    Nomor 72 Tahun 2016
                                </p>
                                <p><i class="fa fa-check text-primary me-3"></i>Obat yang aman</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Dosis sesuai</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Aman digunakan</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Mulai</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="{{ asset('landpage/img/service-2.jpg') }}"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">Melayani Setiap Waktu</h3>
                                <p class="mb-4 justify">
                                    Bagi pasien yang memiliki keluh kesah ataupun pertanyaan. Pasien dapat mengirimkan surel atau pesan
                                    melalui media yang tertera pada website. Pelayanan ini dibuka sepenjang waktu yang artinya
                                    pelayanan kami bersifat 24 Jam.
                                </p>
                                <p><i class="fa fa-check text-primary me-3"></i>Fast respon</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Solusi tepat</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Sopan dan ramah</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Mulai</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="{{ asset('landpage/img/service-3.jpg') }}"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">Algoritma K-Means</h3>
                                <p class="mb-4 justify">
                                    Penggunaan algoritma ini mengelompokkan
                                    berdasarkan pada karakteristik pasien yang memiliki resiko penyakit jantung yang sama.
                                    Algoritma ini bertujuan untuk membantu dokter atau tenaga medis dalam mengambil keputusan
                                    yang lebih baik dan lebih efektif dalam menangani pasien dengan resiko penyakit jantung.
                                </p>
                                <p><i class="fa fa-check text-primary me-3"></i>Data valid</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Clustering data</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Berdasarkan resiko tertentu</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Mulai</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="{{ asset('landpage/img/service-4.jpg') }}"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">Algoritma Naive Bayes</h3>
                                <p class="mb-4 justify">
                                    Algoritma naive bayes adalah algoritma yang digunakan untuk memprediksi kelas dari data pasien. Hal ini
                                    dapat mempermudah dokter maupun pasien jika ingin mengetahui prediksi terkena suatu penyakit berdasarkan data yang telah valid.
                                    Selain itu, algoritma ini juga mengambil data dari algoritma K-means yang hasilnya akan ditampilkan berupa prediksi terkena penyakitnya.
                                </p>
                                <p><i class="fa fa-check text-primary me-3"></i>Data valid</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Prediksi penyakit</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Hasil Output</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Mulai</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Callback Start -->
<div class="container-fluid callback my-5 pt-5">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                            Formulir Pelayanan
                        </p>
                        <h1 class="display-5 mb-5">ADH FORM</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="name">
                                <label for="name">Nama</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="mail">
                                <label for="mail">you@gmail.com</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="hp" placeholder="hp">
                                <label for="mobile">No Hp</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subjek" placeholder="subjek">
                                <label for="subject">Subjek</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Keluhan" id="Keluhan"
                                    style="height: 100px"></textarea>
                                <label for="message">Masukkan Keluhan</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="Kirim">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Callback End -->
@stop
