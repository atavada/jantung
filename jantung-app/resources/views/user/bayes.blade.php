@extends('layouts.master')
@section('menu', '/home')
@section('content')
<div class="container mt-5">
  <div class="card border-0 shadow">
    <div class="card-body p-5">
      <h5 class="card-title text-center">Naive Bayes</h5>
      <hr />
      <div class="row mt-5">
        <div class="col-3 mb-3">
          <label class="form-label">Tekanan Darah Sistolik (mm/hg)</label>
          <input type="text" class="form-control" id="" />
        </div>
        <div class="col-3 mb-3">
          <label class="form-label">Kolesterol (mg/dl)</label>
          <input type="text" class="form-control" id="" />
        </div>
        <div class="col-3 mb-3">
          <label class="form-label">Gula Darah Puasa (mg/dl)</label>
          <input type="text" class="form-control" id="" />
        </div>
        <div class="col-3 mb-3">
          <label class="form-label">Output yang Diprediksi (ya/tidak)</label>
          <input type="text" class="form-control" id="" />
        </div>
        <div class="col-12">
          <input type="button" class="btn btn-primary float-end" id="tekan" value="Submit" />
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5 mb-5 " id="hide2">
  <div class="card border-0 shadow">
    <div class="card-body p-5">
      <h5 class="card-title text-center">Hasil Diagnosa 2</h5>
      <hr>
      <div class="mb-5">
        <table class="table table-striped-columns">
          <thead>
            <tr>
              <th scope="col">Tekanan Darah Sistolik</th>
              <th scope="col">Kolesterol</th>
              <th scope="col">Gula Darah Puasa</th>
              <th scope="col">Output yang diinginkan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>130</td>
              <td>603</td>
              <td>120</td>
              <td>iya</td>
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
              <td scope="row">47%</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection