<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" >
<div class="main-sidebar" style="background-color: white !important; opacity:0.5; ">
  <!-- <center><p style="font-weight: bold; font-size: 20px;">
  SAO
</p></center>
  <hr style="border: 0.5px solid black"> -->
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" >

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{ url('/beranda') }}" style="color:black;  "  ><i class="fa fa-home"></i> <span>Beranda</span></a></li>
      <li class="treeview">
        <a href="" style="color:black;"><i class="fa fa-bars"></i> <span>Master Data</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" >
          <li><a href="{{ url('/siswa') }}" style="color:black;"><i class="fa fa-user-o"></i><span>Data Siswa</span></a></li>
          <li><a href="{{ url('/guru') }}" style="color:black"><i class="fa fa-book"></i>Data Guru</a></li>
          <li><a href="{{ url('/kelas') }}" style="color:black"><i class="fa fa fa-building-o"></i>Data Kelas</a></li>
          <li><a href="{{ url('/jurusan') }}" style="color:black"><i class="fa fa fa-building-o"></i>Data Jurusan</a></li>
          <li><a href="{{ url('/tahunajaran') }}" style="color:black"><i class="fa fa-calendar"></i>Data Tahun Ajaran</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="" style="color:black;" ><i class="fa fa-star-o"></i><span>Data Skill</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" >
          <li><a href="{{ url('/skill') }}" style="color:black"><i class="fa fa-user-circle-o"></i><span>Input Skill</span></a></li>
          <li><a href="{{ url('/skill/detailskill') }}" style="color:black"><i class="fa fa-user-circle-o"></i><span>Data Skill Siswa</span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="" style="color:black;" ><i class="fa fa-calendar-check-o"></i> <span>Data Absensi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" >
          <li><a href="{{ url('/absensi') }}" style="color:black"><i class="fa fa-user-circle-o"></i><span>Input Absensi</span></a></li>
          <li><a href="{{ url('/absensi/detailabsensi') }}" style="color:black"><i class="fa fa-user-circle-o"></i><span>Data Absensi Siswa</span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="" style="color:black;" ><i class="fa fa-file-text"></i> <span>Data Pelanggaran</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" >
          <li><a href="{{ url('/pelanggaran') }}" style="color:black"><i class="fa fa-user-circle-o"></i><span>Data Daftar Pelanggaran</span></a></li>
          <li><a href="{{ url('/catatanpelanggaran') }}" style="color:black"><i class="fa fa-user-circle-o"></i><span>Catatan Pelanggaran</span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="" style="color:black;" ><i class="fa fa-cog"></i> <span>Pengaturan</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" >
          <li><a href="{{ url('/pengaturansiswa') }}" style="color:black"><i class="fa fa-user-circle-o"></i><span>Akun Siswa</span></a></li>
          <li><a href="{{ url('/pengaturanguru') }}" style="color:black"><i class="fa fa-user-circle-o"></i><span>Akun Guru</span></a></li>
          <li><a href="{{ url('/menu') }}" style="color:black"><i class="fa fa-check-square-o"></i>Pengaturan Menu</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</div>
</aside>
