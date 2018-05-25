
@extends('admin_template')

@section('judul')
<h1>
  Form Tambah Data Jurusan
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Form Tambah Data Jurusan</li>
</ol>
@endsection

@section('content')
    <div class="panel panel-primary">
      <div class="panel-heading" style="font-size: 18px;">Data Jurusan</div>
      <div class="panel-body">
      <div class="row">
        <div class="col-sm-5 col-md-5">
          <form action="{{ url('/jurusan') }}" method="POST" >
							<div class="form-group">
								<label>Jurusan*</label>
								<input type="text" class="form-control" name="jurusan" placeholder="Jurusan" value="{{old('jurusan')}}">
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
          <a href="{{ url('/jurusan') }}" class="btn btn-success" >Simpan</a>
          <a href="{{ url('/jurusan') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
        </form>
      </div>
    </div>
@endsection
