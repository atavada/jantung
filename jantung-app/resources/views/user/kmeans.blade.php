<!DOCTYPE html>
<html>
<head>
	<title>Hasil Clustering</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Kolom 1</th>
				<th>Kolom 2</th>
				<th>Kolom 3</th>
				<th>Jarak ke C1</th>
				<th>Jarak ke C2</th>
				<th>Jarak ke C3</th>
				<th>Cluster</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $d)
			<tr>
				<td>{{ $d->no }}</td>
				<td>{{ $d->kolom1 }}</td>
				<td>{{ $d->kolom2 }}</td>
				<td>{{ $d->kolom3 }}</td>
				<td>{{ $d->C1 }}</td>
				<td>{{ $d->C2 }}</td>
				<td>{{ $d->C3 }}</td>
				<td>{{ $d->Class }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
