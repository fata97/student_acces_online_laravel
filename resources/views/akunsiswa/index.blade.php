@extends('admin_template')
@section('judul')
<h1>
  Data Akun Siswa
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Akun Siswa</li>
</ol>
@endsection

@section('content')

<div class="box box-info">
<div class="table-responsive">
<table id="tabel-siswa" class="table table-striped table-bordered" cellspacing="0">
  <thead>
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="text-align:center">1</td>
            <td>112112</td>
            <td>Fata Hasan</td>
            <td>X IPA</td>
            <td><span class="label label-success"><i class="fa fa-unlock-alt">112112</i></span></td>
            <td>bismillah</td>
            <td><span class="label label-warning"><i class="fa fa-check"> Siswa </i></span></td>
            <td>
              <div class="tombol" >
                <a href="{{ url('pengaturansiswa/create') }}"><button type="button" class="btn btn-danger " ><i class="fa fa-trash"></i> Unregister</button></a>
              </div>
            </td>
          </tr>
          <tr>
            <td style="text-align:center">2</td>
            <td>112113</td>
            <td>Susi</td>
            <td>XI IPS</td>
            <td><span class="label label-success"><i class="fa fa-unlock-alt">112112</i></span></td>
            <td>testdulu</td>
            <td><span class="label label-warning"><i class="fa fa-check"> Siswa </i></span></td>
            <td>
              <div class="tombol" >
                <a href="{{ url('pengaturansiswa/create') }}"><button type="button" class="btn btn-danger " ><i class="fa fa-trash"></i> Unregister</button></a>
              </div>
            </td>
          </tr>
          <tr>
            <td style="text-align:center">3</td>
            <td >112114</td>
            <td>Andi</td>
            <td>XI IPA</td>
            <td><span class="label label-success"></td>
            <td></td>
            <td><span class="label label-warning"><i class="fa fa-check"> Siswa </i></span></td>
            <td>
              <div class="tombol" >
                <a href="{{ url('pengaturansiswa/create') }}"><button type="button" class="btn btn-success " ><span class="glyphicon glyphicon-plus " ></span> Register</button></a>
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
