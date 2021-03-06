
@extends('admin_template')

@section('judul')
<h1>
  Form Edit Data Pelanggaran
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Form Edit Data Pelanggaran</li>
</ol>
@endsection

@section('content')
    <div class="panel panel-primary">
      <div class="panel-heading" style="font-size: 18px;">Data Pelanggaran</div>
      <div class="panel-body">
      <div class="row">
        <div class="col-sm-5 col-md-5">
          <form action="{{ url('/pelanggaran') }}" method="POST" >
            <div class="form-group">
              <label>Nama Pelanggaran*</label>
              <input type="text" class="form-control" name="nama_pelanggaran" placeholder="Nama Pelanggaran" value="Mencontek">
            </div>
            <div class="form-group">
              <label>Poin*</label>
              <input type="text" class="form-control" name="poin" placeholder="Poin" value="10">
            </div>
          </div>
        </div>

        <!-- <button class="btn btn-success" type="submit" >Simpan</button> -->
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
        <a href="{{ url('/pelanggaran') }}" class="btn btn-success" >Simpan</a>
        <a href="{{ url('/pelanggaran') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
          </form>
      </div>
    </div>
@endsection
