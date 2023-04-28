@extends('layouts.master')
@section('menu', '/home')
<style>
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Naive Bayes</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Naive Bayes</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container mt-5">
        <div class="card border-0 shadow">
            <div class="card-body p-5">
                <h5 class="card-title text-center">Naive Bayes</h5>
                <hr />

                <form action="{{ route('outputBayes') }}" method="POST">
                    <div class="row mt-5">
                        @csrf
                        <div class="col-3 mb-3">
                            <label class="form-label">Tekanan Darah Sistolik (mm/hg)</label>
                            <input type="number" class="form-control" id="" name="tekdar" autocomplete="off" />
                        </div>
                        <div class="col-3 mb-3">
                            <label class="form-label">Kolesterol / Gula Darah Normal (mg/dl)</label>
                            <input type="number" class="form-control" id="" name="kol" autocomplete="off" />
                        </div>
                        <div class="col-3 mb-3">
                            <label class="form-label">Detak Jantung Maksimum (mm/hg)</label>
                            <input type="number" class="form-control" id="" name="demak" autocomplete="off" />
                        </div>
                        <div class="col-3 mb-3">
                            <label class="form-label">Output yang Diprediksi (ya/tidak)</label>
                            <input type="text" class="form-control" id="" name="output" autocomplete="off" />
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary" id="tekan" value="Submit" />
                            <a class="btn btn-warning" href="{{ route('confusionBayes') }}">CONFUSION MATRIKS</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
