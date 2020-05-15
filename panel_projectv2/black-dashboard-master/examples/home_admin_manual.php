<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>PANEL</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

  <script src="../assets/js/jquery-latest.js"></script> 
    <script>
    var refreshId = setInterval(function()
    {
       $('#refresh_manual').load('refresh_manual.php');
    }, 100);
  </script>

  <style type="text/css">
    .border{
      border: 2px solid black;
    }
    .padding{
    padding-bottom: 15px;
    }
    .isi{
      padding-left: 280px;
      padding-right: 30px;
      padding-top: 20px;
    }
  </style>

</head>

<body class="">
  <a class="btn btn-primary  btn-round ss" href="index.php" >Keluar</a>
<H2>&nbsp&nbspPANEL MODE : ADMIN [MANUAL]</H2>

  <div class="sidebar">
    <div class="sidebar-wrapper" class="logo">
      <div class="aktual">
        <?php
          include("koneksi.php");
              $lampu1 = mysqli_query($conn, "SELECT * FROM lampu WHERE id_lampu='1'");
              while($row1 = mysqli_fetch_array($lampu1)){
                $hasil1 = $row1["status"];
                $identitas1 = $row1["id_lampu"];
              }
              $lampu2 = mysqli_query($conn, "SELECT * FROM lampu WHERE id_lampu='2'");
              while($row2 = mysqli_fetch_array($lampu2)){
                $hasil2 = $row2["status"];
                $identitas2 = $row2["id_lampu"];
              }

          ?>
          <dir class="simple-text"></dir>
          <h2 > <font color="#1e1e2f"><center>Stopkontak 1</center>  </font> </h2>
              <?php
              if ($hasil1 == "on") {?>
                <a class="klik" id="stopkontak1" href="proses_update_manual.php?status=off" >
                  <img src="button1.png" height="150" alt="">
                </a><br>
              <?php
              } else { ?>
                <a class="klik" id="stopkontak1" href="proses_update_manual.php?status=on" >
                  <img src="button2.png" height="150" alt="">
                </a>
              <?php
              }
              ?>
          
          <hr size="200px" color="red">

          <h2 > <font color="#1e1e2f"><center>Stopkontak 2</center>  </font> </h2>
              <?php
              if ($hasil2 == "on") {?>
                <a class="klik" id="stopkontak1" href="proses_update_manual2.php?status=off">
                  <img src="button1.png" height="150" width="3000" alt="">
                </a><br>
              <?php
              } else { ?>
                <a class="klik" id="stopkontak1" href="proses_update_manual2.php?status=on" >
                  <img src="button2.png" height="150" alt="">
                </a>
              <?php
              }
              ?>

      </div>   
    </div>
  </div>

  <div class="main-panel">
    <div class="isi">
      <div class="row">
        <div class="col-12">
        <a href="menu.php" class="btn btn-warning">Pilih Mode</a>
          <div class="card card-chart">
            <div class="card-header ">
              <div class="row" id="refresh_manual">

              <?php
              include 'koneksi.php';
                  $sql1  = mysqli_query($conn, "SELECT * FROM lampu WHERE id_lampu='1'");
                  $rowa  = mysqli_fetch_array($sql1);
                  $sql2  = mysqli_query($conn, "SELECT * FROM lampu WHERE id_lampu='2'");
                  $rowb  = mysqli_fetch_array($sql2);
              ?>                
            
                    <div class="col">
                      
                      <table>
                        <tr>
                          <td width="500">
                            <center>   
                            <h2 ><font color="yellow">Status Stopkontak 1</font></h2>
                            <?php
                              include("koneksi.php");
                              $sql = "SELECT * FROM lampu WHERE id_lampu='1'";
                              $result = array();
                              $query = mysqli_query($conn, $sql);
                               
                              while($row = mysqli_fetch_array($query)){
                                  echo "<h4>[".$row['status_aktual']."]</h4>";
                                  if ($row['status_aktual']=="nyala") {
                                    echo "<img src='nyala1.png'  height='169'><br>"; 
                                  }else{
                                    echo "<img src='mati1.png'  height='169'><br>"; 
                                  }
                              }
                              ?>    
                            </center>
                          </td>
                        </tr> 
                      </table>
                      
                    </div> 

                    <div class="col">
                      
                      <table>
                        <tr>
                          <td width="1000">
                            <CENTER>
                            <h2 ><font color="yellow">Status Stopkontak 2</font></h2>
                            <?php
                              include("koneksi.php");
                              $sql2 = "SELECT * FROM lampu WHERE id_lampu='2'";
                              $result2 = array();
                              $query2 = mysqli_query($conn, $sql2);
                                 
                              while($row2 = mysqli_fetch_array($query2)){
                                    echo "<h4>[".$row2['status_aktual']."]</h4>";
                                    if ($row2['status_aktual']=="nyala") {
                                      echo "<img src='nyala1.png'  height='169'><br>";
                                    }else{
                                      echo "<img src='mati1.png'  height='169'><br>";  
                                    }
                              }
                              ?>
                              </CENTER>
                          </td>      
                        </tr>
                      </table>
                      
                    </div>
                 
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card card-chart">
            <div class="card-header ">
              <div class="row">
                <div class="col-sm-6 text-left">
                  <h5 class="card-category">Monitor KWh</h5>
                  <h2 class="card-title">Total pemakaian : 20000 KWH</h2>
                </div>
                  <!-- <div class="col-sm-6">
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                      <label class="btn btn-sm btn-primary btn-simple active" id="0">
                        <input type="radio" name="options" checked>
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-single-02"></i>
                        </span>
                      </label>
                      <label class="btn btn-sm btn-primary btn-simple" id="1">
                        <input type="radio" class="d-none d-sm-none" name="options">
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-gift-2"></i>
                        </span>
                      </label>
                      <label class="btn btn-sm btn-primary btn-simple" id="2">
                        <input type="radio" class="d-none" name="options">
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-tap-02"></i>
                        </span>
                      </label>
                    </div>
                  </div> -->
              </div>
            </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig1"></canvas>
                </div>
              </div>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Shipments</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Daily Sales</h5>
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="CountryChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Completed Tasks</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLineGreen"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div> 
    
       <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="card card-tasks">
              <div class="card-header ">
                <h6 class="title d-inline">Tasks(5)</h6>
                <p class="card-category d-inline">Hari Ini</p>
                <div class="dropdown">
                  <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                    <i class="tim-icons icon-settings-gear-63"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#pablo">Action</a>
                    <a class="dropdown-item" href="#pablo">Another action</a>
                    <a class="dropdown-item" href="#pablo">Something else</a>
                  </div>
                </div>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Update Jadwal otomatis</p>
                          <p class="text-muted">Sesuaikan dengan jadwal dan kondisi yang ada</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Rekrut Operator</p>
                          <p class="text-muted">Berikan panel,id dan password orang yang dapat mengendalikan atau hanya dapat melihat status</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Bagikan ke keluarga</p>
                          <p class="text-muted">Berikan info login ke keluarga atau orang yang dipercaya agar dapat mengendalikan perangkat secara bersama-sama </p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Update Sofware</p>
                          <p class="text-muted">Software akan diupdate 2 bulan sekali secara mayor dan sewaktu update minor dapat di lakukan</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Backup Database</p>
                          <p class="text-muted">Secara berkala update database untuk menjaga data jika sewaktu-waktu hilang</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Cek Keamanan</p>
                          <p class="text-muted">Pengecekan berkala pada log aplikasi untuk menghindari pengontrolan diluar orang yang diijinkan</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="card  card-tasks ">
              <div class="card-header"> 
                <h4 class="card-title"> LOG Panel</h4>
                 <table class="table tablesorter " id="">
                    <thead class=" text-primary card-body" >
                      <tr >
                        <th class="text-left" >
                          No Id
                        </th>
                        <th class="text-center" >
                          Waktu
                        </th>
                        <th class="text-right">
                          Lokasi Lampu
                        </th>
                        <th class="text-right">
                          Status
                        </th>
                      </tr>
                    </thead>
                  </table>
              </div>
             
                <div class="table-responsive table-full-width ">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                       
                      </tr>
                    </thead>
                     <?php  
        include("koneksi.php");

        $sql = "SELECT * FROM log_lampu";
        $query3 = mysqli_query($conn, $sql);
        while($row1 = mysqli_fetch_array($query3)){
            echo "<tr>";
            echo "<td class='text-right'>".$row1['id_lampu']."</td>";
            echo "<td  class='text-center'>".$row1['waktu']."</td>";
            //echo "<td>".$row['laju_arus']."</td>";
            
            //echo "<td>".$row['total_debit']."</td>";
            echo "<td>".$row1['nama_lampu']."</td>";
            echo "<td>".$row1['status']."</td>";
            echo "</tr>";
        }

        ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
     <!--  <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>2018 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
          </div> 
        </div>
      </footer>-->
    </div>
  </div>
  <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div>
  </div> -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $("#button").click(function load() {
                                                $.ajax({
                                                    url: "php/service/proses_update.php",
                                                    type: 'GET',
                                                    data: {
                                                        status: 'ON1'
                                                    },
                                                });
                                            });


    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>