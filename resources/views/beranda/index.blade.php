@extends('admin_template')

@section('judul')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard Admin</li>
          </ol>
@stop
@section('content')
          <div class="callout callout-info">
            <h4>Selamat Datang Admin!</h4>
            <p>Untuk menggunakan Sistem Student Acces Online harap diperhatikan bagian-bagian data inti yang perlu dipersiapkan sebelumnya sebelum siap digunakan. </p>
          </div>

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Penting !!</h3>
              <div class="box-tools pull-right">
                <button data-original-title="Collapse" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title=""><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div style="display: block;" class="box-body">

              Data penting yang perlu disiapkan antara lain :
                <ul>
                <li>
                1. Data Siswa</li>
                <li>
                2. Data Kelas.</li>
                <li>
                3. Data Guru</li>
                <li>
                4. Data Tahun Pelajaran</li>
                <li>
                5. Data Absensi</li>
                <li>
                6. Data Skill</li>
                <li>
                7. Data Pelanggaran</li>
                <li>
                8. Data Master Dosen</li>
                <li>
                9. Penentuan hak akses untuk Siswa</li>
                <li>
                10. Penentuan hak akses untuk Wali Kelas</li>
                <li>
                11. Penentuan hak akses untuk Guru BK</li>
                <li>
                12. Penentuan hak akses Menu</li>

                </ul>
            </div><!-- /.box-body -->
          </div>
@endsection
@section('script')



@endsection
