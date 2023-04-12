@extends('layouts.master')
@section('menu', '/home')
@section('content')
<div class="container mt-5">
  <div class="card border-0 shadow">
    <div class="card-body p-5">
      <h5 class="card-title text-center">Naive Bayes</h5>
      <hr />
      
        <form action="{{  route('bayes') }}" method="GET">
          <div class="row mt-5">
          @csrf
          <div class="col-4 mb-3">
            <label class="form-label">Tekanan Darah Sistolik (mm/hg)</label>
            <input type="text" class="form-control"  id="" name="tekdar" />
          </div>
          <div class="col-4 mb-3">
            <label class="form-label">Kolesterol (mg/dl)</label>
            <input type="text" class="form-control"  id="" name="kol"/>
          </div>
          <div class="col-4 mb-3">
            <label class="form-label">Detak Jantung Maksimum (mm/hg)</label>
            <input type="text" class="form-control"  id="" name="demak"/>
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
      <div class="mb-5 mt-5">
        <table class="table table-striped-columns text-center">
          <thead>
            <tr>
              <th colspan="2" scope="col">Kemungkinan(%)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">Iya = {{ $outputAsli1 }}</td>
              <td scope="row">Tidak = {{ $outputAsli0 }}</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>

@endsection