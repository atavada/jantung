@extends('layouts.master')

@section('content')
<!-- Carousel Start -->
<style>
    .justify {
    text-align: justify;
    }
</style>

<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('landpage/img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                            @if (session()->has('pesan'))
                                <div class="alert alert-success d-inline-block">
                                {{ session()->get('pesan') }}
                                </div>
                            @endif
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p
                                    class="rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                    ADH | Heart Disease</p>
                                <h1 class="display-1 mb-4 animated slideInDown">AYO CEK KESEHATANMU
                                </h1>
                                <a href="{{ route('kmeans') }}" class="btn btn-primary py-3 px-5 animated slideInDown">K-Means</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('landpage/img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <p
                                    class="rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                    ADH | Heart Disease</p>
                                <h1 class="display-1 mb-4 animated slideInDown">
                                    PENTINGNYA KESEHATAN
                                </h1>
                                <a href="{{ route('bayes') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Naive Bayes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="{{ asset('landpage/img/about.jpg') }}">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentang Kami</p>
                <h1 class="display-5 mb-4">ADH | Heart Disease Menjadi Alat Pengecek Kesehatan</h1>
                <p class="mb-4 justify">
                    Heart Disease atau penyakit jantung merupakan keadaan dimana jantung tidak dapat
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
                            <p class="mb-0 justify">
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


<!-- Features Start -->
<div class="container-xxl feature py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Kenapa Harus ADH?</p>
                <h1 class="display-5 mb-4">INILAH ALASAN MEREKA MEMILIH ADH</h1>
                <p class="mb-4 justify">
                    ADH | Heart Disease adalah website pengecek penyakit jantung yang dirancang dengan
                    tujuan untuk membantu anda sebagai pasien dalam mengevaluasi resiko terkena penyakit jantung
                    dan memberikan informasi yang diperlukan untuk menjada kesehatan jantung pasien. Website ini
                    menggunakan metode algoritma K-Mean dan Naive Bayes. Algoritma ini dapat dipastikan lebih tepat dan akurat.
                </p>
                <a class="btn btn-primary py-3 px-5" href="">Cek Sekarang!</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="feature-box border rounded p-4">
                                    <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                    <h4 class="mb-3">Prediksi akurat</h4>
                                    <p class="mb-3 justify">
                                        Prediksi yang keluar dapat membantu saya sebagai pasien dalam mengetahui
                                        penyakit yang dialami, sehingga saya dapat mengetahui terlebih dahulu
                                        sebelum saya cek lebih lanjut.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="feature-box border rounded p-4">
                                    <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                    <h4 class="mb-3">Saran yang membantu</h4>
                                    <p class="mb-3 justify">
                                        Setelah saya diperiksa, saya mendapatkan rekomendasi obat yang dapat
                                        membantu saya untuk sembuh dari penyakit yang saya alami.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="feature-box border rounded p-4">
                            <i class="fa fa-check fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Pengecekan yang bagus</h4>
                            <p class="mb-3 justify">
                                Setelah saya diperiksa akan muncul prediksi terkena penyakit yang saya alami.
                                Ini sangat berguna bagi saya ketika saya memiliki waktu yang sangat sibuk dan padat,
                                sehingga tidak ada waktu yang cukup luang untuk periksa ke dokter.
                                Website ini sangatlah membantu saya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Kepuasan anda adalah prioritas utama bagi kami</p>
            <h1 class="display-5 mb-5">ADH | Heart Disease</h1>
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
                    <form action="{{ route("contacts") }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="name" name="nama">
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="email" name="email">
                                    <label for="mail">you@gmail.com</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="hp" placeholder="hp" name="hp">
                                    <label for="mobile">No Hp</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subjek" placeholder="subjek" name="subjek">
                                    <label for="subject">Subjek</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Keluhan" id="Keluhan"
                                        style="height: 100px" name="keluhan"></textarea>
                                    <label for="message">Masukkan Keluhan</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Callback End -->


<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Fitur</p>
            <h1 class="display-5 mb-5">ADH | Heart Disease</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="{{ asset('landpage/img/service-4.jpg') }}" alt="">
                    <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Naive Bayes</h4>
                </div>
            </div>
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="{{ asset('landpage/img/service-1.jpg') }}" alt="">
                    <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Rekomendasi Obat</h4>
                </div>
            </div>
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="{{ asset('landpage/img/service-2.jpg') }}" alt="">
                    <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Saran Ahli</h4>
                </div>
            </div>
            <div class="project-item pe-5 pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="{{ asset('landpage/img/service-3.jpg') }}" alt="">
                    <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">K-Means</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->


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


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimoni</p>
            <h1 class="display-5 mb-5">Testimoni Pasien ADH</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Saya sangat terkejut dan
                    khawatir ketika mengetahui
                    saya memiliki risiko penyakit jantung.
                    Namun, berkat prediksi yang akurat dan pengobatan yang tepat,
                    saya berhasil pulih sepenuhnya. Terima kasih kepada ADH | Heart Disease.
                </div>
                <img class="rounded-circle mb-3" src="{{ asset('landpage/img/testimonial-1.jpg') }}" alt="">
                <h4>Aldy</h4>
                <span>Mahasiswa</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Saya sangat berterima kasih kepada dokter yang merawat saya.
                    Website ADH | Heart Disease berhasil memprediksi bahwa saya menderita
                    penyakit jantung. Sekarang, setelah
                    menjalani perawatan yang disarankan, saya merasa jauh lebih baik.
                </div>
                <img class="rounded-circle mb-3" src="{{ asset('landpage/img/testimonial-2.jpg') }}" alt="">
                <h4>Maulana</h4>
                <span>Mahasiswa</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Saya awalnya tidak menyadari bahwa saya menderita penyakit jantung, namun berkat teknologi yang canggih,
                    kondisi saya sekarang terdeteksi lebih awal dan mendapat perawatan yang tepat.
                    Saya sangat berterima kasih karena saya masih bisa hidup dan menikmati
                    hidup.
                </div>
                <img class="rounded-circle mb-3" src="{{ asset('landpage/img/testimonial-3.jpg') }}" alt="">
                <h4>Valen</h4>
                <span>Mahasiswa</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Website ini sangat ahli dalam mendiagnosis penyakit jantung.
                    Kondisi jantung saya sekarang sudah membaik dan saya
                    merasa lebih sehat. Saya akan selalu menghargai dan
                    merekomendasikan layanan medis yang baik ini kepada orang lain.
                </div>
                <img class="rounded-circle mb-3" src="{{ asset('landpage/img/testimonial-4.jpg') }}" alt="">
                <h4>Avan</h4>
                <span>Mahasiswa</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@stop
