@extends('admin_template')
@section('judul')
<h1>
  Data Menu
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Menu</li>
</ol>
@endsection

@section('content')
<div class="box box-info" style="padding:8px 20px 15px 20px">

  <ul class="nav nav-tabs" >
      <li class="active" ><a data-toggle="tab" href="#menu1" >Data Menu Utama</a></li>
      <li><a data-toggle="tab" href="#menu2">Data Sub Menu</a></li>
  </ul>
  <!-- <p style="font-size: 25px; color:#337ab7; ">Data Skill</p> -->
  <br>
    <div class="tab-content" >
      <div id="menu1" class="tab-pane fade in active">
        <div class="tombol" >
          <a href="{{ url('menu/create_menuutama') }}"><button type="button" class="btn btn-success btn-md " ><span class="glyphicon glyphicon-plus " ></span> Tambah Menu </button></a>
        </div>
        <br>
      <div class="table-responsive">
        <table id="tabel-siswa" class="table table-striped table-bordered" cellspacing="0">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Menu Utama</th>
                  <th>Link</th>
                  <th>Icon</th>
                  <th>Level</th>
                  <th>Status</th>
                  <th colspan="3" style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;">1</td>
                    <td>Master Data</td>
                    <td>http://localhost:8000/#</td>
                    <td><i class="fa fa-bars"></i></td>
                    <td>Admin</td>
                    <td>Aktif</td>
                    <td><a href="{{ url('/menu/aktif') }}" data-toggle="tooltip" data-placement="bottom" title="Non Aktifkan"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></td>
                    <td><a href="{{ url('/menu/edit_menuutama') }}" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                    <td><a href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td style="text-align: center;">2</td>
                    <td>Beranda</td>
                    <td>http://localhost:8000/beranda</td>
                    <td><i class="fa fa-home"></i></td>
                    <td>Admin</td>
                    <td>Tidak Aktif</td>
                    <td><a href="{{ url('/menu/aktif') }}" data-toggle="tooltip" data-placement="bottom" title="Aktifkan"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    <td><a href="{{ url('/menu/edit_menuutama') }}" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                    <td><a href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td style="text-align: center;">3</td>
                    <td>Tampil Skill</td>
                    <td>http://localhost:8000/skill</td>
                    <td><i class="fa fa-star-o"></i></td>
                    <td>Siswa</td>
                    <td>Tidak Aktif</td>
                    <td><a href="{{ url('/menu/aktif') }}" data-toggle="tooltip" data-placement="bottom" title="Aktifkan"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    <td><a href="{{ url('/menu/edit_menuutama') }}" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                    <td><a href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                </tr>
              <tbody>
        </table>
      </div>
      </div>
      <div id="menu2" class="tab-pane fade">
        <div class="tombol" >
          <a href="{{ url('menu/create_submenu') }}"><button type="button" class="btn btn-success btn-md " ><span class="glyphicon glyphicon-plus " ></span> Tambah Menu </button></a>
        </div>
        <br>
      <div class="table-responsive">
        <table id="tabel-submenu" class="table table-striped table-bordered" cellspacing="0">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Sub Menu</th>
                  <th>Nama Menu Utama</th>
                  <th>Link</th>
                  <th>Icon</th>
                  <th>Level</th>
                  <th>Status</th>
                  <th colspan="3" style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;">1</td>
                    <td>Data Siswa</td>
                    <td>Master Data</td>
                    <td>http://localhost:8000/#</td>
                    <td><i class="fa fa-bars"></i></td>
                    <td>Admin</td>
                    <td>Aktif</td>
                    <td><a href="{{ url('/menu/aktif') }}" data-toggle="tooltip" data-placement="bottom" title="Non Aktifkan"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></td>
                    <td><a href="{{ url('/menu/edit_submenu') }}" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                    <td><a href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td style="text-align: center;">2</td>
                    <td>Akun Siswa</td>
                    <td>Pengaturan</td>
                    <td>http://localhost:8000/beranda</td>
                    <td><i class="fa fa-home"></i></td>
                    <td>Admin</td>
                    <td>Tidak Aktif</td>
                    <td><a href="{{ url('/menu/aktif') }}" data-toggle="tooltip" data-placement="bottom" title="Aktifkan"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    <td><a href="{{ url('/menu/edit_submenu') }}" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                    <td><a href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td style="text-align: center;">3</td>
                    <td>Tampil Karakter</td>
                    <td>Data Skill</td>
                    <td>http://localhost:8000/skill</td>
                    <td><i class="fa fa-star-o"></i></td>
                    <td>Siswa</td>
                    <td>Tidak Aktif</td>
                    <td><a href="{{ url('/menu/aktif') }}" data-toggle="tooltip" data-placement="bottom" title="Aktifkan"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    <td><a href="{{ url('/menu/edit_submenu') }}" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                    <td><a href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                </tr>
              <tbody>
        </table>
      </div>
    </div>
    </div>
</div>
@endsection

@section('script')
$('#tabel-siswa').DataTable();
$('#tabel-submenu').DataTable();
$('[data-toggle="tooltip"]').tooltip();
@endsection
