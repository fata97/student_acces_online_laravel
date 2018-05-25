
@extends('admin_template')

@section('judul')
<h1>
  Form Edit Data Tahun Pelajaran
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Form Edit Data Tahun Pelajaran</li>
</ol>
@endsection

@section('content')
    <div class="panel panel-primary">
      <div class="panel-heading" style="font-size: 18px;">Data Tahun Pelajaran</div>
      <div class="panel-body">
      <div class="row">
        <div class="col-sm-5 col-md-5">
          <form action="{{ url('/tahunajaran') }}" method="POST" >
							<div class="form-group">
								<label>Tahun*</label>
								<input type="text" class="form-control" name="tahun" placeholder="Tahun" value="2017">
								@if($errors->has('nama_kelas'))
									<p>
										*Nama Kelas tidak boleh kosong
									</p>
								@endif
							</div>
              <div class="form-group">
								<label>Keterangan*</label>
								<input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="2017/2018">
								@if($errors->has('nama_kelas'))
									<p>
										*Nama Kelas tidak boleh kosong
									</p>
								@endif
							</div>
            </div>
          </div>

          <!-- <button class="btn btn-success" type="submit" >Simpan</button> -->
          <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
          <a href="{{ url('/tahunajaran') }}" class="btn btn-success" >Simpan</a>
          <a href="{{ url('/tahunajaran') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
        </form>
      </div>
    </div>
@endsection
