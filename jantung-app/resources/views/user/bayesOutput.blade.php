@extends('layouts.master')
@section('menu', '/home')
<style>
  footer{
    position: fixed;
    bottom: 0;
    width: 100%;
  }
</style>
@section('content')
<div class="container mt-5 mb-5 " id="hide2">
  <div class="card border-0 shadow">
    <div class="card-body p-5">
      <h5 class="card-title text-center">Hasil Diagnosa </h5>
      <hr>
      <div class="mb-5">
        <table class="table table-striped-columns">
          <thead>
            <tr>
              <th scope="col">Tekanan Darah Sistolik</th>
              <th scope="col">Kolesterol</th>
              <th scope="col">Detak jantung maksimum</th>
              <th scope="col">Output yang diinginkan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $tekananDarah }}</td>
              <td>{{ $kolestrol }}</td>
              <td>{{ $detakjantung }}</td>
              <td>{{ $output }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="mb-5 mt-5">
        <table class="table table-striped-columns text-center">
          <thead>
            <tr>
              <th scope="col">Kemungkinan(%)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">{{ $outputAsli }}</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>
</div>
@endsection