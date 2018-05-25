<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Pengolahan Raport</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset("adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css") }} ">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("adminlte/bower_components/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset("adminlte/bower_components/Ionicons/css/ionicons.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("adminlte/dist/css/AdminLTE.min.css") }} ">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{ asset("adminlte/dist/css/skins/skin-blue.min.css") }} ">
  <!-- Data Tables -->
  <link rel="stylesheet" href="{{ asset("css/dataTables.bootstrap.min.css") }} ">
  <!-- datepicker -->
  <link rel="stylesheet" href="{{ asset("css/bootstrap-datepicker3.css") }} ">
  <!-- datetimepicker -->
  <link rel="stylesheet" href="{{ asset("css/bootstrap-datetimepicker.min.css") }} ">


  <style media="screen">
    .box {padding: 20px 15px 20px 15px }
    .panel-body {padding: 20px 25px 20px 25px }
    .panel-heading {padding: 10px 25px 10px 25px }
      #gambar{
      border-radius:100em;

      border:3px solid #ddd;
      width:100px;
      height:100px;
      }

      /* .control-sidebar-dark .nav-tabs.control-sidebar-tabs > li.active > a,
      .control-sidebar-dark .nav-tabs.control-sidebar-tabs > li.active > a:hover{
        background: blue;
      },
      .control-sidebar-dark .nav-tabs.control-sidebar-tabs > li.active > a:focus,
      .control-sidebar-dark .nav-tabs.control-sidebar-tabs > li.active > a:active {
        background: blue;
      } */

      /* .skin-blue .wrapper,
      .skin-blue .main-sidebar,
      .skin-blue .left-side {
        background-color: #f9fafc;
      } */


      .skin-blue .sidebar-menu > li > .treeview-menu {
        background-image: url("../gambar/h.jpg");
        background-attachment: fixed;
     }


       .main-sidebar {
         background-image: url("../gambar/h.jpg");
         /* background-repeat: no-repeat; */
         background-attachment: fixed;
         box-shadow: 3px 0 8px rgba(0, 0, 0, 0.125);
         /* opacity: 0.95; */
       }

       /* .sidebar {
         background-image: url("gambar/544454260.jpg");
         opacity: 0.5;
       } */

       .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
         background-color: white;
         font-size: 15px;
      }

      .skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li.menu-open>a{
        background-color: white;
      }

      .main-sidebar  a:visited {
        background-color: #fff !important;
      }

      .main-sidebar  a:hover {
        background-color: #4FC3F7 !important;
        font-weight: bold;
        border: 1px solid #4FC3F7;
        outline-style: outset;
        outline-color: #4FC3F7;
        outline-width: thick;
        transform:scale(0.9,0.85);
        font-size: 17px;
        padding: 12px 12px 12px 12px;

    }

    .main-sidebar  a:active {
      background-color: #fff !important;
    }

      .nav .nav-tabs li:hover {
        background: #337ab7 !important;
      }

  </style>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">
    <!-- Main Header -->
    @include('header')
    <!-- Sidebar -->
    @include('sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('judul')
    </section>
    <br>

    <!-- Main content -->
    <section class="content container-fluid">
        @yield('content')
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{asset("adminlte/bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset("adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("adminlte/dist/js/adminlte.min.js")}}"></script>
<script src="{{asset("js/datatables.min.js")}}"></script>
<script src="{{asset("js/dataTables.bootstrap.min.js")}}"></script>
<script src="{{asset("js/bootstrap-datepicker.min.js")}}"></script>
<script src="{{asset("js/moment.js")}}"></script>
<script src="{{asset("js/bootstrap-datetimepicker.min.js")}}"></script>
<script src="{{asset("chartjs/Chart.bundle.js")}} "></script>
<script>
    $(document).ready(function(){
      $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
        @yield('script')
    });
</script>

<script>
    $(document).ready(function(){
      $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
        @yield('script2')
    });
</script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
