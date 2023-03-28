@extends('layouts.master')
@section('menu', '/home')
@section('content')
<div class="container mt-5">
    <div class="card border-0 shadow">
      <div class="card-body p-5">
        <h5 class="card-title text-center">Heart Screening ADH</h5>
        <hr />
          <form action="{{ route('kmeans') }}" method="POST">
            <div class="row mt-5">
            @csrf
            <div class="col-4 mb-3">
              <label class="form-label">Tekanan Darah Sistolik (mm/hg)</label>
              <input type="number" class="form-control" id="" name="tekdar"/>
            </div>
            <div class="col-4 mb-3">
              <label class="form-label">Kadar Kolesterol (mg/dl)</label>
              <input type="number" class="form-control" id="" name="kol"/>
            </div>
            <div class="col-4 mb-3">
              <label class="form-label">Detak Jantung Maksimum (mm/hg)</label>
              <input type="number" class="form-control" id="" name="demax"/>
            </div>
            <div class="col-12">
              <button type="submit" name="submit" id="tombol">SUBMIT</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container mt-5 mb-5 " id="hide">
    <div class="card border-0 shadow">
      <div class="card-body p-5">
        <h5 class="card-title text-center">Hasil Diagnosa</h5>
        <hr>
        <div class="mb-5">
          <table class="table table-striped-columns">
            <thead>
              <tr>
                <th scope="col">Tekanan Darah Sistolik</th>
                <th scope="col">Kolesterol</th>
                <th scope="col">Gula Darah Puasa</th>
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
        <hr>
        <div class="mb-5 mt-5">
          <table class="table table-striped-columns">
            <thead>
              <tr>
                <th scope="col">Resiko</th>
                <th scope="col">Nilai kepastian </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">Beresiko</td>
                <td>{{ $resiko }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/jquey.js') }}"></script>
  <script>
    $(document).ready(function(){
      $('#hide').hide();
      $('#tombol').click(function(){
        $('#hide').show();
      })
    })
  </script>
@endsection
