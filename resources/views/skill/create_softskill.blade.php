
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

<br>
<div class="box box-info" style="padding:8px 20px 15px 20px; height:450px">
  <ul class="nav nav-tabs" >
      <li ><a data-toggle="tab" href="#menu1" >Input Skill</a></li>
      <li class="active"><a data-toggle="tab" href="#menu2">Input Soft Skill</a></li>
  </ul>
  <!-- <p style="font-size: 25px; color:#337ab7; ">Data Skill</p> -->
  <br>
    <div class="tab-content"  >
      <div id="menu1" class="tab-pane fade">
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

      <div id="menu2" class="tab-pane fade in active">
        <div class="col-sm-6 col-md-6 ">
          <form action="{{ url('/skill') }}" method="POST" >
            <div class="form-group">
              <label>Kemampuan Soft Skill*</label>
              <input type="text" class="form-control" name="ia" placeholder="Kemampuan Soft Skill" value="{{old('nama_kelas')}}">
              @if($errors->has('nama_kelas'))
                <p>
                  *Nama Kelas tidak boleh kosong
                </p>
              @endif
            </div>
            <div class="form-group">
              <label>Grade*</label>
              <select name="grade" class="form-control" >
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
              </select>
            </div>
            <!-- <button class="btn btn-success" type="submit" >Simpan</button> -->
            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            <a href="{{ url('/skill') }}" class="btn btn-success" >Simpan</a>
            <a href="{{ url('/skill') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
          </form>
      </div>
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
