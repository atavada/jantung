@extends('layouts.master')
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
    <div class="container mt-5 mb-5 " id="hide">
        <div class="card border-0 shadow">
            <div class="card-body p-5">
                <h5 class="card-title text-center">Hasil Diagnosa</h5>
                <hr>
                <div class="mb-5">
                    <div class="table-responsive">
                        <table class="table table-striped-columns">
                            <thead>
                                <tr>
                                    <th>Tekanan Darah Sistolik</th>
                                    <th>Kolesterol</th>
                                    <th>Detak Jantung Maksimum</th>
                                </tr>                              
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $tekananDarah }}</td>
                                    <td>{{ $kolestrol }}</td>
                                    <td>{{ $detakjantung }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="mb-5 mt-5">
                    <table class="table table-striped-columns">
                        <thead>
                            <tr>
                                <th class="text-center"scope="col">Nilai kepastian </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">{{ $resiko }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="mb-5">
                    <table class="table table-striped-columns">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Rekomendasi Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul>
                                        @forelse ($hasil as $value)
                                            <li class="text-center">
                                                {{ $value }}
                                            </li>
                                    </ul>
                                @empty
                                    <p>Anda sudah Sehat</p>
                                    @endforelse
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
