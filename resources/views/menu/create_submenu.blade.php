
@extends('admin_template')

@section('judul')
<h1>
  Form Tambah Data Sub Menu
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Form Tambah Data Sub Menu</li>
</ol>
@endsection

@section('content')
    <div class="panel panel-primary">
      <div class="panel-heading" style="font-size: 18px;">Data Sub Menu</div>
      <div class="panel-body">
      <div class="row">
        <div class="col-sm-5 col-md-5">
          <form action="{{ url('/menuutama') }}" method="POST" >
            <div class="form-group">
              <label>Nama Sub Menu*</label>
              <input type="text" class="form-control" name="menu_utama" placeholder="Nama Menu Utama" value="{{old('menu_utama')}}">
            </div>
            <div class="form-group">
              <label>Menu Utama*</label>
              <select name="menu_utama" class="form-control" >
                <option value="Admin">Master Data</option>
                <option value="Wali Kelas">Beranda</option>
                <option value="Guru BK">Data Absensi</option>
                <option value="Siswa">Data Skill</option>
              </select>
            </div>
            <div class="form-group">
              <label>Link*</label>
              <input type="text" class="form-control" name="link" placeholder="Link" value="{{old('link')}}">
            </div>
            <div class="form-group">
              <label>Icon*</label>
              <input type="text" class="form-control" name="icon" placeholder="Icon" value="{{old('icon')}}">
            </div>
            <div class="form-group">
              <label>Level*</label>
              <select name="level" class="form-control" >
                <option value="Admin">Admin</option>
                <option value="Wali Kelas">Wali Kelas</option>
                <option value="Guru BK">Guru BK</option>
                <option value="Siswa">Siswa</option>
              </select>
            </div>
          </div>
      </div>
          <!-- <button class="btn btn-success" type="submit" >Simpan</button> -->
          <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
          <a href="{{ url('/menu') }}" class="btn btn-success" >Simpan</a>
          <a href="{{ url('/menu') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
        </form>
      </div>
    </div>
@endsection
