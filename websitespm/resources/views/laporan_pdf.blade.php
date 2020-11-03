<!DOCTYPE html>
<html>
<head>
	<title>Daftar Laporan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Unit</h4>
			<table class='table table-bordered'>
				<thead>
						@php $i=1 @endphp
						@foreach($laporan as $p)
					<tr>
						<th>No</th>
						<td>{{ $i++ }}</td>				
					</tr>
					<tr>
						<th>Nama Laporan</th>
						<td>{{$p->nama_laporan}}</td>
					</tr>
					<tr>
						<th>Tujuan</th>
						<td>{{$p->tujuan}}</td>
					</tr>
					<tr>
						<th>Kegiatan Rutin</th>
						<td>{{$p->kegiatan_rutin}}</td>
					</tr>
					<tr>
						<th>Kegiatan Non-rutin</th>			
						<td>{{$p->kegiatan_non_rutin}}</td>
					</tr>
					<tr>
						<th>Serapan Anggaran</th>
						<td>{{$p->serapan_anggaran}}</td>
					</tr>
					<tr>
						<th>Pemasukan Dana</th>		
						<td>@currency($p->pemasukan_dana)</td>		
					</tr>
					<tr>
						<th>Evaluasi Kegiatan</th>		
						<td>{{$p->evaluasi_kegiatan}}</td>
					</tr>
					<tr>
						<th>Rencana Kerja Bulan Berikutnya</th>
						<td>{{$p->rencana_kerja_bulan_berikutnya}}</td>
					</tr>
					<tr>
						<th>Hambatan</th>
						<td>{{$p->hambatan}}</td>
					</tr>
					<tr>
						<th>Upaya mengatasi hambatan</th>
						<td>{{$p->upaya_mengatasi_hambatan}}</td>
					</tr>
					<tr>
						<th>Kesimpulan dan saran</th>
						<td>{{$p->kesimpulan_dan_saran}}</td>
					</tr>

					<tr>
						<th></th>
						<td></td>
					</tr>
					@endforeach	
				</thead>
			</table>

		</body>
		</html>