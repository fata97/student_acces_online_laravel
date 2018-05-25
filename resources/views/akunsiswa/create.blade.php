
@extends('admin_template')

@section('judul')
<h1>
  Form Tambah Data Akun Siswa
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Form Tambah Data Akun Siswa</li>
</ol>
@endsection

@section('content')
    <div class="panel panel-primary">
      <div class="panel-heading" style="font-size: 18px;">Data Akun Siswa</div>
      <div class="panel-body">
      <div class="row">
        <div class="col-sm-5 col-md-5">
          <form action="{{ url('/kelas') }}" method="POST" >
							<div class="form-group">
								<label>NIS</label>
								<input type="text" class="form-control" name="nis" value="112112" readonly>
							</div>
              <div class="form-group">
                <div class="form-group">
  								<label>Nama</label>
  								<input type="text" class="form-control" name="nama" value="Fata" readonly>
  							</div>
							</div>
              <div class="form-group">
                <div class="form-group">
  								<label>Username</label>
  								<input type="text" class="form-control" name="username" value="112112" readonly>
  							</div>
							</div>
              <div class="form-group">
                <div class="form-group">
  								<label>Password</label>
  								<input type="text" class="form-control" name="password" >
  							</div>
							</div>
              <div class="form-group">
                <div class="form-group">
  								<label>Konfirmasi Password</label>
  								<input type="text" class="form-control" name="konfirmas_password" >
  							</div>
							</div>
            </div>
          </div>

          <!-- <button class="btn btn-success" type="submit" >Simpan</button> -->
          <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
          <a href="{{ url('/pengaturansiswa') }}" class="btn btn-success" >Simpan</a>
          <a href="{{ url('/pengaturansiswa') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
        </form>
      </div>
    </div>
@endsection
