@extends('admin_template')

@section('judul')
<h1>
  Data Tahun Pelajaran
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Tahun Pelajaran</li>
</ol>
@endsection

@section('content')

<div class="box box-info">
  <div class="tombol" >
    <a href="{{ url('tahunajaran/create') }}"><button type="button" class="btn btn-success btn-md " ><span class="glyphicon glyphicon-plus " ></span> Tambah Data </button></a>
  </div>
  <br>
<div class="table-responsive">
<table id="tabel-siswa" class="table table-striped table-bordered" cellspacing="0">
    <thead>
        <tr>
          <th>No</th>
          <th>Tahun</th>
          <th>Keterangan</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">1</td>
            <td>2017</td>
            <td>2017/2018</td>
            <td style="text-align: center;">
            <a href="{{ url('tahunajaran/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <td style="text-align: center;">1</td>
            <td>2018</td>
            <td>2018/2019</td>
            <td style="text-align: center;">
            <a href="{{ url('tahunajaran/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        <tr>
            <td style="text-align: center;">1</td>
            <td>2019</td>
            <td>2019/2020</td>
            <td style="text-align: center;">
            <a href="{{ url('tahunajaran/edit') }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
  <tbody>
</table>
</div>
</div>
@endsection

@section('script')
$('#tabel-siswa').DataTable();
@endsection
