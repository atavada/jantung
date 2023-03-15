@extends('layouts.master')
@section('menu', '/home')
@section('content')
<div class="container mt-5">
  {{-- <table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Kolom 1</th>
				<th>Kolom 2</th>
				<th>Kolom 3</th>
				<th>C1</th>
				<th>C2</th>
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
			</tr>
			@endforeach
		</tbody>
	</table> --}}
</div>
@endsection
