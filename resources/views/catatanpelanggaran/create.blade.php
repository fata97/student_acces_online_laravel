
@extends('admin_template')

@section('judul')
<h1>
  Form Tambah Catatan Pelanggaran
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Form Tambah Catatan Pelanggaran</li>
</ol>
@endsection

@section('content')
    <div class="panel panel-primary">
      <div class="panel-heading" style="font-size: 18px;">Data Catatan Pelanggaran</div>
      <div class="panel-body">
      <div class="row">
        <div class="col-sm-5 col-md-5">
          <form action="{{ url('/catatanpelanggaran') }}" method="POST" >
            <div class="form-group">
              <label>Jenis Pelanggaran*</label>
              <select name="jenis_pelanggaran" class="form-control" >
                <option value="Admin">Mencontek</option>
                <option value="Wali Kelas">Berkelahi</option>
                <option value="Guru BK">Membuang Sampah Sembarangan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Kelas*</label>
              <select name="kelas" class="form-control" >
                <option value="Admin">X IPA</option>
                <option value="Wali Kelas">XI IPS</option>
                <option value="Guru BK">XII IPA</option>
              </select>
            </div>
            <div class="form-group">
              <label>Nama Pelanggar*</label>
              <select name="nama" class="form-control" >
                <option value="Admin">Andi</option>
                <option value="Wali Kelas">Susi</option>
                <option value="Guru BK">Budi</option>
              </select>
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal*</label>
               <input type="text" name="tanggal" class="tanggal form-control" />
            </div>
            <div class="form-group">
							<label>Jam*</label>
              <input type="text" name="jam" class="form-control" />
            </div>
            <div class="form-group">
              <label>Nama Pencatat*</label>
              <select name="nama" class="form-control" >
                <option value="Admin">Rahmat</option>
                <option value="Wali Kelas">Sinta</option>
              </select>
            </div>
          </div>
        </div>

          <!-- <button class="btn btn-success" type="submit" >Simpan</button> -->
          <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
          <a href="{{ url('/catatanpelanggaran') }}" class="btn btn-success" >Simpan</a>
          <a href="{{ url('/catatanpelanggaran') }}" class="btn btn-default" style="background-color:#fff;">Batal</a>
        </form>
      </div>
    </div>
@endsection

@section('script')
                $('.tanggal').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });

     $('#datetimepicker4').datetimepicker();
@endsection
