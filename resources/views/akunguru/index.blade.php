@extends('admin_template')
@section('judul')
<h1>
  Data Akun Guru
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Akun Guru</li>
</ol>
@endsection

@section('content')

<div class="box box-info">
<div class="table-responsive">
<table id="tabel-siswa" class="table table-striped table-bordered" cellspacing="0">
  <thead>
          <tr>
            <th style="text-align:center">No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="text-align:center">1</td>
            <td>85004</td>
            <td>Rahmat</td>
            <td>Wali Kelas</td>
            <td><span class="label label-success"><i class="fa fa-unlock-alt">85004</i></span></td>
            <td>bismillah</td>
            <td><span class="label label-warning"><i class="fa fa-check">Wali Kelas</i></span></td>
            <td>
              <div class="tombol" >
                <a href="{{ url('#') }}"><button type="button" class="btn btn-danger " ><i class="fa fa-trash"></i> Unregister</button></a>
              </div>
            </td>
          </tr>
          <tr>
            <td style="text-align:center">2</td>
            <td>85005</td>
            <td>Muhtar</td>
            <td>Wali Kelas</td>
            <td><span class="label label-success"><i class="fa fa-unlock-alt">85005</i></span></td>
            <td></td>
            <td><span class="label label-warning"><i class="fa fa-check">Wali Kelas</i></span></td>
            <td>
              <div class="tombol" >
                <a href="{{ url('pengaturanguru/create') }}"><button type="button" class="btn btn-success " ><span class="glyphicon glyphicon-plus " ></span> Register</button></a>
              </div>
            </td>
          </tr>
          <tr>
            <td style="text-align:center">2</td>
            <td>85006</td>
            <td>Sinta</td>
            <td>Guru BK</td>
            <td><span class="label label-success"><i class="fa fa-unlock-alt">85006</i></span></td>
            <td></td>
            <td><span class="label label-warning"><i class="fa fa-check">Guru BK</i></span></td>
            <td>
              <div class="tombol" >
                <a href="{{ url('pengaturanguru/create') }}"><button type="button" class="btn btn-success " ><span class="glyphicon glyphicon-plus " ></span> Register</button></a>
              </div>
            </td>
          </tr>
      </tbody>
</table>
</div>
</div>
@endsection

@section('script')
$('#tabel-siswa').DataTable();
@endsection
