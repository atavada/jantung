@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">K-Means</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">K-Means</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container mt-5 mb-5" id="hide2">
        <div class="card border-0 shadow">
            <div class="card-body p-5">
                <h5 class="card-title text-center">Tabel Confusion Kmean</h5>
                <hr>
                <div class="mb-5">
                    <table class="table table-striped-columns">
                        <thead>
                            <tr>
                                <th scope="col">TC</th>
                                <th scope="col">Prediksi terkena</th>
                                <th scope="col">Prediksi Tidak Terkena</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Asli Terkena</td>
                                <td>{{ $TP }}</td>
                                <td>{{ $FN }}</td>
                            </tr>
                            <tr>
                                <td>Asli Tidak Terkena</td>
                                <td>{{ $FP }}</td>
                                <td>{{ $TN }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-5" id="hide2">
            <div class="card border-0 shadow">
                <div class="card-body p-5">
                    <h5 class="card-title text-center">Tabel Confusion Kmean</h5>
                    <hr>
                    <div class="mb-5">
                        <table class="table table-striped-columns">
                            <thead>
                                <tr>
                                    <th scope="col">Recall</th>
                                    <th scope="col">Akurasi</th>
                                    <th scope="col">Presisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $outputRecall }}</td>
                                    <td>{{ $outputAkurasi }}</td>
                                    <td>{{ $outputPresisi }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
