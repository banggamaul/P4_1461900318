<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Data Mahasiswa</title>
	<style>
		table {
		border-collapse: collapse;
		border-spacing: 0;
		width: 100%;
		border: 1px solid #ddd;
		}
		thead {
		background-color: #f2f2f2;
		}
		th, td {
		text-align: left;
		padding: 8px;
		}
		tr:nth-child(even){background-color: #f2f2f2}
		.tambah{
		padding: 8px 16px ;
		text-decoration: none;
		}
	</style>
</head>
<body>
	<div style="overflow-x:auto;">
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Jenis</th>
				<th>Tahun Terbit</th>
			</tr>
		</thead>
		<tbody>
		<?php $no=1; ?>
		@foreach ($buku as $s)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$s->judul}}</td>
			<td>{{$s->tahun_terbit}}</td>
			<td>{{$s->jenis}}</td>
			<td></td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<a style="float:right;" href="/export" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
	</div>
</body>