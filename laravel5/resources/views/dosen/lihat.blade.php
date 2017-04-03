@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('dosen') }}"><i style="color: #8a6d3b" class="faa text-default fa-chevron-left"></i></a> Detail Data Dosen</strong>
		</div>
		<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $dosen->nama }}</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>{{ $dosen->NIP }}</td>
			</tr>
			<tr>
				<td class="col-cs-4">Alamat</td>
				<td class="col-xs-1">:</td>
				<td>{{ $dosen->Alamat }}</td>
			</tr>
			<tr>
				<td class="col-cs-4">Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $dosen->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diperbarui Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $dosen->updated_at }}</td>
			</tr>
		</table>
	</div>
	@stop