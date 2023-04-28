@extends('layouts.master')
<style>
  footer{
    position: fixed;
    bottom: 0;
    width: 100%;
  }
</style>
@section('content')
<div class="container mt-5">
    <div class="card border-0 shadow">
      <div class="card-body p-5">
        <h5 class="card-title text-center">Heart Screening ADH</h5>
        <hr />
          <form action="{{ route('kmeansOutput') }}" method="POST">
            @csrf
            <div class="row mt-5">
            <div class="col-4 mb-3">
              <label class="form-label">Tekanan Darah Sistolik (mm/hg)</label>
              <input type="number" class="form-control" id="" name="tekdar" autocomplete="off"/>
            </div>
            <div class="col-4 mb-3">
              <label class="form-label">Kadar Kolesterol (mg/dl)</label>
              <input type="number" class="form-control" id="" name="kol" autocomplete="off"/>
            </div>
            <div class="col-4 mb-3">
              <label class="form-label">Detak Jantung Maksimum (mm/hg)</label>
              <input type="number" class="form-control" id="" name="demax" autocomplete="off"/>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit" name="submit" id="tombol">SUBMIT</button>
              <a class="btn btn-warning" href="{{ route('confusionKmeans') }}">CONFUSION MATRIKS</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
