@extends('admin_template')

@section('judul')
<h1>
  Data Absensi Bulanan
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Absensi Bulanan</li>
</ol>
@endsection

@section('content')
<div class="tombol" >
  <a href="{{ url('absensi/edit') }}"><button type="button" class="btn btn-success btn-md " ><span class="glyphicon glyphicon-plus " ></span> Input Absen </button></a>
</div>
<br>
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
    <label>Nama Siswa :</label>
    <select name="jurusan" class="form-control" >
      <option value="Andi">Andi</option>
      <option value="Susi">Susi Pujiastuti</option>
      <option value="Bayu">Bayu</option>
    </select>
  </div>
</form>
<!-- tabel absensi  -->
<br>
<div class="box box-info">
  <a href="#" ><button type="button" class="btn btn-default " ><i class="fa fa-print" aria-hidden="true"></i> Print </button></a>
  <br>
  <br>
<div class="table-responsive">
<table class="table table-striped table-bordered" cellspacing="0">
    <thead>
        <tr>
          <th rowspan="2" style="text-align:center; padding-bottom:30px">Bulan</th>
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
      <tr>
        <th style="text-align:center">Juli</th>
        <td style="text-align:center">20</td>
        <td style="text-align:center">4</td>
        <td style="text-align:center">2</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">26</td>
      </tr>
      <tr>
        <th style="text-align:center">Agustus</th>
        <td style="text-align:center">20</td>
        <td style="text-align:center">4</td>
        <td style="text-align:center">2</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">26</td>
      </tr>
      <tr>
        <th style="text-align:center">September</th>
        <td style="text-align:center">20</td>
        <td style="text-align:center">4</td>
        <td style="text-align:center">2</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">26</td>
      </tr>
      <tr>
        <th style="text-align:center">Oktober</th>
        <td style="text-align:center">20</td>
        <td style="text-align:center">4</td>
        <td style="text-align:center">2</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">26</td>
      </tr>
      <tr>
        <th style="text-align:center">Nopember</th>
        <td style="text-align:center">20</td>
        <td style="text-align:center">4</td>
        <td style="text-align:center">2</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">26</td>
      </tr>
      <tr>
        <th style="text-align:center">Desember</th>
        <td style="text-align:center">20</td>
        <td style="text-align:center">4</td>
        <td style="text-align:center">2</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">26</td>
      </tr>
      <tr>
        <th style="text-align:center">Januari</th>
        <td style="text-align:center">20</td>
        <td style="text-align:center">4</td>
        <td style="text-align:center">2</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">26</td>
      </tr>
      <tr>
        <th style="text-align:center">Februari</th>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
      </tr>
      <tr>
        <th style="text-align:center">Maret</th>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
      </tr>
      <tr>
        <th style="text-align:center">April</th>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
      </tr>
      <tr>
        <th style="text-align:center">Mei</th>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
      </tr>
      <tr>
        <th style="text-align:center">Juni</th>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
        <td style="text-align:center">0</td>
      </tr>
    </tbody>
  </div>
</table>
</div>
@endsection

@section('script')
$('#tabel-siswa').DataTable();
@endsection
