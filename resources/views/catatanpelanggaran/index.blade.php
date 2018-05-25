@extends('admin_template')

@section('judul')
<h1>
  Data Catatan Pelanggaran
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Catatan Pelanggaran</li>
</ol>
@endsection

@section('content')

<div class="box box-info">
  <div class="tombol" >
    <a href="{{ url('catatanpelanggaran/create') }}"><button type="button" class="btn btn-success btn-md " ><span class="glyphicon glyphicon-plus " ></span> Tambah Data </button></a>
  </div>
  <br>
<div class="table-responsive">
<table id="tabel-siswa" class="table table-striped table-bordered" cellspacing="0">
    <thead>
        <tr>
          <th>No</th>
          <th>Nama Pelanggar</th>
          <th>Jenis Pelanggaran</th>
          <th>Tanggal</th>
          <th>Jam</th>
          <th>Pencatat Pelanggaran</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">1</td>
            <td>Susi</td>
            <td>Berkelahi</td>
            <td>15-Januari-2018</td>
            <td>10:10</td>
            <td>Sinta</td>
            <td style="text-align: center;">
            <a href="{{ url('catatanpelanggaran/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <td style="text-align: center;">1</td>
            <td>Andi</td>
            <td>Mencontek</td>
            <td>15-Januari-2018</td>
            <td>08:10</td>
            <td>Sinta</td>
            <td style="text-align: center;">
            <a href="{{ url('catatanpelanggaran/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <td style="text-align: center;">1</td>
            <td>Fahmi</td>
            <td>Membuang Sampah Sembarangan</td>
            <td>16-Januari-2018</td>
            <td>09:30</td>
            <td>Budi</td>
            <td style="text-align: center;">
            <a href="{{ url('catatanpelanggaran/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>  <tbody>
        </div>
</table>
</div>
@endsection

@section('script')
$('#tabel-siswa').DataTable();
@endsection
