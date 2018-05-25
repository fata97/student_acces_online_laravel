@extends('admin_template')

@section('judul')
<h1>
  Form Tambah Data Absensi Bulanan
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Form Tambah Data Absensi Bulanan</li>
</ol>
@endsection

@section('content')
<!-- form pilih kelas dan siswa -->
<form class="form-inline" action="index.html" method="post" >
  <div class="form-group">
    <label for="kelas">Tahun Ajaran :</label>
    <select name="jurusan" class="form-control" >
      <option value="Andi">2017/2018</option>
      <option value="Susi">2018/2019</option>
      <option value="Bayu">2019/2020</option>
    </select>
  </div>
  <div class="form-group">
    <label for="kelas">Kelas :</label>
    <select name="jurusan" class="form-control" >
      <option value="Andi">X IPA</option>
      <option value="Susi">XI BAHASA</option>
      <option value="Bayu">XII IPS</option>
    </select>
  </div>
  <div class="form-group">
    <label>Bulan :</label>
    <select name="bulan" class="form-control" >
      <option value="Andi">Juli</option>
      <option value="Susi">Agustus</option>
      <option value="Bayu">September</option>
      <option value="Bayu">Oktober</option>
      <option value="Bayu">Nopember</option>
      <option value="Bayu">Desember</option>
      <option value="Bayu">Januari</option>
      <option value="Bayu">Februari</option>
      <option value="Bayu">Maret</option>
      <option value="Bayu">April</option>
      <option value="Bayu">Mei</option>
      <option value="Bayu">Juni</option>
    </select>
  </div>
</form>
<!-- tabel absensi  -->
<br>
<div class="box box-info">
<div class="table-responsive">
<table class="table table-striped table-bordered"  cellspacing="0">
    <thead>
        <tr>
          <th rowspan="2" style="text-align:center; padding-bottom:30px">Nama Siswa</th>
          <th colspan="5" style="text-align:center">Kehadiran</th>
        </tr>
        <tr>
          <th style="text-align:center">H</th>
          <th style="text-align:center">A</th>
          <th style="text-align:center">I</th>
          <th style="text-align:center">S</th>
          <th style="text-align:center">T</th>
        </tr>
    </thead>
    <tbody>
      <form action="{{ url('/absensi') }}">
      <tr>
        <th style="text-align:center">Andi</th>
        <td style="text-align:center" class="col-md-1"><input type="text" name="hadir" class="form-control"></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="alfa"  class="form-control"></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="izin"  class="form-control"></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="sakit" class="form-control"></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="total" class="form-control"></td>
      </tr>
      <tr>
        <th style="text-align:center">Susi</th>
        <td style="text-align:center" class="col-md-1"><input type="text" name="hadir" class="form-control"></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="alfa"  class="form-control"></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="izin"  class="form-control"></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="sakit" class="form-control"></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="total" class="form-control"></td>
      </tr>
      <tr>
        <th style="text-align:center">Fata</th>
        <td style="text-align:center" class="col-md-1"><input type="text" name="hadir" class="form-control"  ></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="alfa"  class="form-control"></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="izin"  class="form-control"></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="sakit" class="form-control"></td>
        <td style="text-align:center" class="col-md-1"><input type="text" name="total" class="form-control"></td>
      </tr>
    </tbody>
  </div>
</table>
<br>
<a href="{{ url('/absensi') }}" class="btn btn-success" >Simpan</a>
<a href="{{ url('/absensi') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
</form>
</div>
@endsection

@section('script')
$('#tabel-siswa').DataTable();
@endsection
