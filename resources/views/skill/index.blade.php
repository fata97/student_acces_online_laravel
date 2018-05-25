
@extends('admin_template')

@section('judul')
<h1>
  Data Skill
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Skill</li>
</ol>
@endsection

@section('content')

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
<!-- </div> -->

<br>
<div class="box box-info" style="padding:8px 20px 15px 20px; height:450px">
  <ul class="nav nav-tabs" >
      <li class="active" ><a data-toggle="tab" href="#menu1" >Input Skill</a></li>
      <li><a data-toggle="tab" href="#menu2">Input Soft Skill</a></li>
  </ul>
  <!-- <p style="font-size: 25px; color:#337ab7; ">Data Skill</p> -->
  <br>
    <div class="tab-content"  >
      <div id="menu1" class="tab-pane fade in active">
        <form action="{{ url('/skill') }}" method="POST" >
        <div class="col-sm-6 col-md-6 ">
            <div class="form-group">
              <label>Jujur*</label>
              <input type="text" class="form-control" name="ia" placeholder="Jujur" value="{{old('nama_kelas')}}">
              @if($errors->has('nama_kelas'))
                <p>
                  *Nama Kelas tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Disiplin*</label>
              <input type="text" class="form-control" name="ia" placeholder="Disiplin" value="{{old('nama_kelas')}}">
              @if($errors->has('nama_kelas'))
                <p>
                  *Nama Kelas tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Kerja Sama*</label>
              <input type="text" class="form-control" name="ia" placeholder="Kerja Sama" value="{{old('nama_kelas')}}">
              @if($errors->has('nama_kelas'))
                <p>
                  *Nama Kelas tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Kreatif*</label>
              <input type="text" class="form-control" name="ia" placeholder="Kreatif" value="{{old('nama_kelas')}}">
              @if($errors->has('nama_kelas'))
                <p>
                  *Nama Kelas tidak boleh kosong
                </p>
              @endif
            </div>
          </div>
          <div class="col-sm-6 col-md-6 ">
            <div class="form-group">
              <label>Tanggung Jawab*</label>
              <input type="text" class="form-control" name="ia" placeholder="Tanggung Jawab" value="{{old('nama_kelas')}}">
              @if($errors->has('nama_kelas'))
                <p>
                  *Nama Kelas tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Kerja Keras*</label>
              <input type="text" class="form-control" name="ia" placeholder="Kerja Keras" value="{{old('nama_kelas')}}">
              @if($errors->has('nama_kelas'))
                <p>
                  *Nama Kelas tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Mandiri*</label>
              <input type="text" class="form-control" name="ia" placeholder="Mandiri" value="{{old('nama_kelas')}}">
              @if($errors->has('nama_kelas'))
                <p>
                  *Nama Kelas tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Komunikatif*</label>
              <input type="text" class="form-control" name="ia" placeholder="Komunikatif" value="{{old('nama_kelas')}}">
              @if($errors->has('nama_kelas'))
                <p>
                  *Nama Kelas tidak boleh kosong
                </p>
              @endif
            </div>
            <!-- <button class="btn btn-success" type="submit" >Simpan</button> -->
            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            <a href="{{ url('/skill') }}" class="btn btn-success" >Simpan</a>
            <a href="{{ url('/skill') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
          </form>
        </div>
      </div>

      <div id="menu2" class="tab-pane fade">
        <div class="tombol" >
          <a href="" style="float:right;"><button type="button" class="btn btn-default " ><i class="fa fa-print" aria-hidden="true"></i> Print </button></a>
          <a href="{{ url('skill/create_softskill') }}"><button type="button" class="btn btn-success btn-md " ><span class="glyphicon glyphicon-plus " ></span> Tambah Data </button></a>
        </div>
        <br>
        <table id="tabel-siswa" class="table table-striped table-bordered" cellspacing="0">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Kemampuan</th>
                  <th>Grade</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;">1</td>
                    <td>Berbahasa Inggris</td>
                    <td>A</td>
                    <td style="text-align: center;">
                    <a href="{{ url('skill/edit_softskill') }}" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Hapus</a></td>
                </tr>
                <tr>
                    <td style="text-align: center;">2</td>
                    <td>Sepak Bola</td>
                    <td>B</td>
                    <td style="text-align: center;">
                    <a href="{{ url('skill/edit_softskill') }}" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Hapus</a></td>
                </tr>
                <tr>
                    <td style="text-align: center;">3</td>
                    <td>Pidato</td>
                    <td>B</td>
                    <td style="text-align: center;">
                    <a href="{{ url('skill/edit_softskill') }}" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Hapus</a></td>
                </tr>
          <tbody>
        </table>
      </div>
    </div>
</div>
<!-- <div class="box box-info col-md-8 col-sm-8 col-xs-12" style=" display: block; width:550px; height:420px; padding-top: 0px;padding-right:
50px;padding-bottom: 30px;padding-left: 5px; position: overflow: hidden;relative;  ">
<center><h3 style="margin-left:60px;">Skill Karakter</h3>
<canvas id="marksChart" height="8" width="10"></canvas> -->

@endsection

@section('script')
$('#tabel-siswa').DataTable();
@endsection
