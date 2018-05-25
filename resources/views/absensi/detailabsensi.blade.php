
@extends('admin_template')

@section('judul')
<h1>
  Data Absensi Siswa
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i>Student Acces Online</a></li>
  <li class="active">Data Absensi Siswa</li>
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


<div class="col-sm-6 col-md-4" >
  <div class="panel panel-primary" style="height:570px">
    <div class="panel-heading" style="font-size: 18px;">Profile Siswa</div>
    <div class="panel-body">
    <center><img id="gambar" src="{{asset('gambar/doraemon.jpg')}}" >
      <h4 style="font-family: “Duru Sans”, Verdana, sans-serif;">Fata Hasan</h4>
      <h5 style="font-weight:normal; font-family: Courier, monospace;">XI IPA</h5>
    </center>
    <ul class="list-group list-group-unbordered">
      <li class="list-group-item"><b>Jenis Kelamin</b>
          <a href="#" style="float:right">Laki-Laki</a>
      </li>
      <li class="list-group-item"><b>Agama</b>
          <a href="#" style="float:right">Islam</a>
      </li>
      <li class="list-group-item"><b>TTL</b>
          <a href="#" style="float:right">Bandung, 20 Maret 1997</a>
      </li>
      <li class="list-group-item"><b>Alamat</b>
          <a href="#" style="float:right">Bandung</a>
      </li>
      <li class="list-group-item"><b>No. Telp</b>
          <a href="#" style="float:right">087822555784</a>
      </li>
      <li class="list-group-item"><b>Nama Ayah</b>
          <a href="#" style="float:right">Rahmat</a>
      </li>
    </ul>
  </div>
</div>
</div>
<div class="col-sm-6 col-md-8 ">
  <div class="box box-info" style="padding:8px 20px 15px 20px; height:570px">
  <ul class="nav nav-tabs">
      <li class="active" ><a data-toggle="tab" href="#menu1" >Absen Bulanan</a></li>
      <li><a data-toggle="tab" href="#menu2">Absen Tahunan</a></li>
  </ul>
  <br>
    <div class="tab-content">
      <div id="menu1" class="tab-pane fade in active">
        <a href="#" style="float:right;"><button type="button" class="btn btn-default " ><i class="fa fa-print" aria-hidden="true"></i> Print </button></a>
        <!-- <div class="tombol" >
          <a href="#" style="float:right;"><button type="button" class="btn btn-default " ><i class="fa fa-print" aria-hidden="true"></i> Print </button></a>
        </div> -->
      <table class="table">
        <tr>
          <td class="col-md-3">
            <canvas id="demobar1" width="5" height="5" style="position: relative;"></canvas>
          </td>
          <td class="col-md-3">
            <canvas id="demobar2" width="5" height="5" style="position: relative;"></canvas>
          </td>
          <td class="col-md-3">
            <canvas id="demobar3" width="5" height="5" style="position: relative;"></canvas>
          </td>
          <td class="col-md-3">
            <canvas id="demobar4" width="5" height="5" style="position: relative;"></canvas>
          </td>
        </tr>
        <tr>
          <td class="col-md-3">
            <canvas id="demobar5" width="5" height="5" style="position: relative;"></canvas>
          </td>
          <td class="col-md-3">
            <canvas id="demobar6" width="5" height="5" style="position: relative;"></canvas>
          </td>
          <td class="col-md-3">
            <canvas id="demobar7" width="5" height="5" style="position: relative;"></canvas>
          </td>
          <td class="col-md-3">
            <canvas id="demobar8" width="5" height="5" style="position: relative;"></canvas>
          </td>
        </tr>
        <tr>
          <td class="col-md-3">
            <canvas id="demobar9" width="5" height="5" style="position: relative;"></canvas>
          </td>
          <td class="col-md-3">
            <canvas id="demobar10" width="5" height="5" style="position: relative;"></canvas>
          </td>
          <td class="col-md-3">
            <canvas id="demobar11" width="5" height="5" style="position: relative;"></canvas>
          </td>
          <td class="col-md-3">
            <canvas id="demobar12" width="5" height="5" style="position: relative;"></canvas>
          </td>
        </tr>
      </table>

  </div>
      <div id="menu2" class="tab-pane fade">
        <a href="#" style="float:right;"><button type="button" class="btn btn-default " ><i class="fa fa-print" aria-hidden="true"></i> Print </button></a>
        <div class="col-md-8">
            <canvas id="tahunan" width="5" height="5" style="position: relative;"></canvas>
        </div>
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
      var ctx = document.getElementById("demobar1").getContext("2d");
      data = {
      datasets: [{
        data: [80, 20],
        backgroundColor: [
                      "rgba(59, 100, 222, 0.8)",
                      "rgba(203, 222, 225, 0.9)"]
      }],

      // These labels appear in the legend and in the tooltips when hovering different arcs
      labels: [
        'Kehadiran',
        'Tidak Hadir'
      ]
      };

      var myBarChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: {
                  responsive: true,
                  title: {
                      display: true,
                      text: 'Juli'
                  },
                  legend: {
                  display: false
                  }
                }
            });

            var ctx = document.getElementById("demobar2").getContext("2d");
            data = {
            datasets: [{
              data: [80, 20],
              backgroundColor: [
                            "rgba(59, 100, 222, 0.8)",
                            "rgba(203, 222, 225, 0.9)"]
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
              'Kehadiran',
              'Tidak Hadir'
            ]
            };

            var myBarChart = new Chart(ctx, {
                      type: 'doughnut',
                      data: data,
                      options: {
                        responsive: true,
                        title: {
                            display: true,
                            text: 'Agustus'
                        },
                        legend: {
                        display: false
                        }
                      }
                  });

                  var ctx = document.getElementById("demobar3").getContext("2d");
                  data = {
                  datasets: [{
                    data: [80, 20],
                    backgroundColor: [
                                  "rgba(59, 100, 222, 0.8)",
                                  "rgba(203, 222, 225, 0.9)"]
                  }],

                  // These labels appear in the legend and in the tooltips when hovering different arcs
                  labels: [
                    'Kehadiran',
                    'Tidak Hadir'
                  ]
                  };

                  var myBarChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: data,
                            options: {
                              responsive: true,
                              title: {
                                  display: true,
                                  text: 'September'
                              },
                              legend: {
                              display: false
                              }
                            }
                        });

                        var ctx = document.getElementById("demobar4").getContext("2d");
                        data = {
                        datasets: [{
                          data: [80, 20],
                          backgroundColor: [
                                        "rgba(59, 100, 222, 0.8)",
                                        "rgba(203, 222, 225, 0.9)"]
                        }],

                        // These labels appear in the legend and in the tooltips when hovering different arcs
                        labels: [
                          'Kehadiran',
                          'Tidak Hadir'
                        ]
                        };

                        var myBarChart = new Chart(ctx, {
                                  type: 'doughnut',
                                  data: data,
                                  options: {
                                    responsive: true,
                                    title: {
                                        display: true,
                                        text: 'Oktober'
                                    },
                                    legend: {
                                    display: false
                                    }
                                  }
                              });

                      //Nopember
                      var ctx = document.getElementById("demobar5").getContext("2d");
                      data = {
                      datasets: [{
                        data: [80, 20],
                        backgroundColor: [
                                      "rgba(59, 100, 222, 0.8)",
                                      "rgba(203, 222, 225, 0.9)"]
                      }],

                      // These labels appear in the legend and in the tooltips when hovering different arcs
                      labels: [
                        'Kehadiran',
                        'Tidak Hadir'
                      ]
                      };

                      var myBarChart = new Chart(ctx, {
                                type: 'doughnut',
                                data: data,
                                options: {
                                  responsive: true,
                                  title: {
                                      display: true,
                                      text: 'Nopember'
                                  },
                                  legend: {
                                  display: false
                                  }
                                }
                            });

                            //Desember
                            var ctx = document.getElementById("demobar6").getContext("2d");
                            data = {
                            datasets: [{
                              data: [80, 20],
                              backgroundColor: [
                                            "rgba(59, 100, 222, 0.8)",
                                            "rgba(203, 222, 225, 0.9)"]
                            }],

                            // These labels appear in the legend and in the tooltips when hovering different arcs
                            labels: [
                              'Kehadiran',
                              'Tidak Hadir'
                            ]
                            };

                            var myBarChart = new Chart(ctx, {
                                      type: 'doughnut',
                                      data: data,
                                      options: {
                                        responsive: true,
                                        title: {
                                            display: true,
                                            text: 'Desember'
                                        },
                                        legend: {
                                        display: false
                                        }
                                      }
                                  });

                                  //Januari
                                  var ctx = document.getElementById("demobar7").getContext("2d");
                                  data = {
                                  datasets: [{
                                    data: [80, 20],
                                    backgroundColor: [
                                                  "rgba(59, 100, 222, 0.8)",
                                                  "rgba(203, 222, 225, 0.9)"]
                                  }],

                                  // These labels appear in the legend and in the tooltips when hovering different arcs
                                  labels: [
                                    'Kehadiran',
                                    'Tidak Hadir'
                                  ]
                                  };

                                  var myBarChart = new Chart(ctx, {
                                            type: 'doughnut',
                                            data: data,
                                            options: {
                                              responsive: true,
                                              title: {
                                                  display: true,
                                                  text: 'Januari'
                                              },
                                              legend: {
                                              display: false
                                              }
                                            }
                                        });

                                        //Februari
                                        var ctx = document.getElementById("demobar8").getContext("2d");
                                        data = {
                                        datasets: [{
                                          data: [80, 20],
                                          backgroundColor: [
                                                        "rgba(59, 100, 222, 0.8)",
                                                        "rgba(203, 222, 225, 0.9)"]
                                        }],

                                        // These labels appear in the legend and in the tooltips when hovering different arcs
                                        labels: [
                                          'Kehadiran',
                                          'Tidak Hadir'
                                        ]
                                        };

                                        var myBarChart = new Chart(ctx, {
                                                  type: 'doughnut',
                                                  data: data,
                                                  options: {
                                                    responsive: true,
                                                    title: {
                                                        display: true,
                                                        text: 'Februari'
                                                    },
                                                    legend: {
                                                    display: false
                                                    }
                                                  }
                                              });

                                              //Maret
                                              var ctx = document.getElementById("demobar9").getContext("2d");
                                              data = {
                                              datasets: [{
                                                data: [80, 20],
                                                backgroundColor: [
                                                              "rgba(59, 100, 222, 0.8)",
                                                              "rgba(203, 222, 225, 0.9)"]
                                              }],

                                              // These labels appear in the legend and in the tooltips when hovering different arcs
                                              labels: [
                                                'Kehadiran',
                                                'Tidak Hadir'
                                              ]
                                              };

                                              var myBarChart = new Chart(ctx, {
                                                        type: 'doughnut',
                                                        data: data,
                                                        options: {
                                                          responsive: true,
                                                          title: {
                                                              display: true,
                                                              text: 'Maret'
                                                          },
                                                          legend: {
                                                          display: false
                                                          }
                                                        }
                                                    });
                                                    //April
                                                    var ctx = document.getElementById("demobar10").getContext("2d");
                                                    data = {
                                                    datasets: [{
                                                      data: [80, 20],
                                                      backgroundColor: [
                                                                    "rgba(59, 100, 222, 0.8)",
                                                                    "rgba(203, 222, 225, 0.9)"]
                                                    }],

                                                    // These labels appear in the legend and in the tooltips when hovering different arcs
                                                    labels: [
                                                      'Kehadiran',
                                                      'Tidak Hadir'
                                                    ]
                                                    };

                                                    var myBarChart = new Chart(ctx, {
                                                              type: 'doughnut',
                                                              data: data,
                                                              options: {
                                                                responsive: true,
                                                                title: {
                                                                    display: true,
                                                                    text: 'April'
                                                                },
                                                                legend: {
                                                                display: false
                                                                }
                                                              }
                                                          });
                                                          //Mei
                                                          var ctx = document.getElementById("demobar11").getContext("2d");
                                                          data = {
                                                          datasets: [{
                                                            data: [80, 20],
                                                            backgroundColor: [
                                                                          "rgba(59, 100, 222, 0.8)",
                                                                          "rgba(203, 222, 225, 0.9)"]
                                                          }],

                                                          // These labels appear in the legend and in the tooltips when hovering different arcs
                                                          labels: [
                                                            'Kehadiran',
                                                            'Tidak Hadir'
                                                          ]
                                                          };

                                                          var myBarChart = new Chart(ctx, {
                                                                    type: 'doughnut',
                                                                    data: data,
                                                                    options: {
                                                                      responsive: true,
                                                                      title: {
                                                                          display: true,
                                                                          text: 'Mei'
                                                                      },
                                                                      legend: {
                                                                      display: false
                                                                      }
                                                                    }
                                                                });

                                                                //Juni
                                                                var ctx = document.getElementById("demobar12").getContext("2d");
                                                                data = {
                                                                datasets: [{
                                                                  data: [80, 20],
                                                                  backgroundColor: [
                                                                                "rgba(59, 100, 222, 0.8)",
                                                                                "rgba(203, 222, 225, 0.9)"]
                                                                }],

                                                                // These labels appear in the legend and in the tooltips when hovering different arcs
                                                                labels: [
                                                                  'Kehadiran',
                                                                  'Tidak Hadir'
                                                                ]
                                                                };

                                                                var myBarChart = new Chart(ctx, {
                                                                          type: 'doughnut',
                                                                          data: data,
                                                                          options: {
                                                                            responsive: true,
                                                                            title: {
                                                                                display: true,
                                                                                text: 'Juni'
                                                                            },
                                                                            legend: {
                                                                            display: false
                                                                            }
                                                                          }
                                                                      });

                                                                      //Tahunan
                                                                      var ctx = document.getElementById("tahunan").getContext("2d");
                                                                      data = {
                                                                      datasets: [{
                                                                        data: [80, 20],
                                                                        backgroundColor: [
                                                                                      "rgba(59, 100, 222, 0.8)",
                                                                                      "rgba(203, 222, 225, 0.9)"]
                                                                      }],

                                                                      // These labels appear in the legend and in the tooltips when hovering different arcs
                                                                      labels: [
                                                                        'Kehadiran',
                                                                        'Tidak Hadir'
                                                                      ]
                                                                      };

                                                                      var myBarChart = new Chart(ctx, {
                                                                                type: 'doughnut',
                                                                                data: data,
                                                                                options: {
                                                                                  responsive: true,
                                                                                  title: {
                                                                                      display: true,
                                                                                      text: '2017/2018'
                                                                                  },
                                                                                  legend: {
                                                                                  display: false
                                                                                  }
                                                                                }
                                                                            });


@endsection

@section('script2')
$('#tabel-siswa').DataTable();
@endsection
