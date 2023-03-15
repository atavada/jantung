@extends('layouts.master')
@section('menu', '/home')
@section('content')
<div class="container mt-5">
    <div class="card border-0 shadow">
      <div class="card-body p-5">
        <h5 class="card-title text-center">Heart Screening ADH</h5>
        <hr />
        <div class="row mt-5">
          <div class="col-4 mb-3">
            <label class="form-label">Tekanan Darah Sistolik (mm/hg)</label>
            <input type="text" class="form-control" id="" />
          </div>
          <div class="col-4 mb-3">
            <label class="form-label">Kadar Kolesterol (mg/dl)</label>
            <input type="text" class="form-control" id="" />
          </div>
          <div class="col-4 mb-3">
            <label class="form-label">Detak Jantung Maksimum (mm/hg)</label>
            <input type="text" class="form-control" id="" />
          </div>
          <div class="col-12">
            <input type="button" class="btn btn-primary float-end" id="tekan" value="Submit" />
          </div>
        </div>
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
                <td>130</td>
                <td>603</td>
                <td>120</td>
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
                <td>67%</td>
              </tr>
            </tbody>
          </table>
        </div>
        <hr>
        <div class="mb-3 mt-5">
          <table class="table table-striped-columns">
            <thead>
              <tr>
                <th colspan="2">Berdasarkan Data yang Telah Dimasukkan, maka solusi dari sistem adalah:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="col">Solusi</th>
                <td scope="col">
                  <ol>
                    <li>Banyak istirahat</li>
                    <li>jangan merokok</li>
                    <li>jangan tidur larut malam</li>
                  </ol>
                </td>
              </tr>
              <tr>
                <th scope="row">Saran Obat</th>
                <td>Antimo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Kolom 1</th>
				<th>Kolom 2</th>
				<th>Kolom 3</th>
				<th>C1</th>
				<th>C2</th>
				<th>Class</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $d)
			<tr>
				<td>{{ $d->id }}</td>
				<td>{{ $d->kolom1 }}</td>
				<td>{{ $d->kolom2 }}</td>
				<td>{{ $d->kolom3 }}</td>
				<td>{{ $d->C1 }}</td>
				<td>{{ $d->C2 }}</td>
				<td>{{ $d->Class }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
