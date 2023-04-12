@extends('layouts.master')
@section('menu', '/home')
@section('content')
<div class="container mt-5 mb-5 " id="hide2">
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
  <div class="container mt-5 mb-5 " id="hide2">
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
@endsection