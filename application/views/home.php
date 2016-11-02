<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Area</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('admin/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('admin/vendors/font-awesome/css/font-awesome.min.css') ?>"rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('admin/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('admin/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('admin/vendors/jqvmap/dist/jqvmap.min.css')?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('admin/vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('admin/build/css/custom.min.css')?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url();?>" class="site_title"><i class="fa fa-paw"></i> <span>PIL-APP</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url('admin/production/images/img.jpg')?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin Help Desk BINER</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>CEO</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Monitoring <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/C_server/dataPemakai">Data Pemakaian</a></li>
                      <li><a href="index2.html">Pengenmbalian</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-dashboard"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>index.php/c_member/index" >Daftar Member</a></li>
                      <li><a href="form_advanced.html">Jadwal Pemakaian Lab</a></li>
                      <li><a href="form_validation.html">Informasi</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/c_dataLab/index">Tambah Ruang</a></li>

                    </ul>


                  <li><a><i class="fa fa-user"></i>Suara Kami<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Saran dan Masukkan</a></li>
                      <li><a href="fixed_footer.html">Keluhan</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">


              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Admin Page
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">

                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-home"></i> Total Ruangan</span>
              <div class="count">10</div>
              <span class="count_bottom"><i class="green"> </i>Teknik Informatika</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-home"></i> Dipakai</span>
              <div class="count">5</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i>Teknik Informatika</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-home"></i> Kosong</span>
              <div class="count green">5</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i>Teknik Informatika</span>
            </div>

          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-12">
                    <h3>ADMIN AREA <small></small></h3>
                    <div class="clearfix"></div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Laboratorium<small> Teknik Informatika </small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Settings 1</a>
                                  </li>
                                  <li><a href="#">Settings 2</a>
                                  </li>
                                </ul>
                              </li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                            <div class="row">

                              <p>Informasi Status Pemakaian LAB</p>

                              <div class="col-md-55">
                                <div class="thumbnail">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo base_url('admin/production/images/media.jpg')?>" alt="image" />
                                    <div class="mask">

                                      <div class="tools tools-bottom">

                                      </div>
                                    </div>
                                  </div>
                                  <div class="caption">
                                      <p><strong>Lab Robotik</strong>
                                    <p>Status : <b>Dipakai</b></p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-55">
                                <div class="thumbnail">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo base_url('admin/production/images/media2.jpg')?>" alt="image" />
                                    <div class="mask">
                                      <p>Aksi</p>
                                      <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="caption">
                                      <p><strong>Ruang Meeting</strong>
                                    <p>Status : <b>Dipakai</b></p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-55">
                                <div class="thumbnail">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo base_url('admin/production/images/media3.jpg')?>" alt="image" />
                                    <div class="mask">
                                      <p>Aksi</p>
                                      <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="caption">
                                      <p><strong>Lab Artificial Intellegent</strong>
                                    <p>Status : <b>Dipakai</b></p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-55">
                                <div class="thumbnail">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo base_url('admin/production/images/media4.jpg')?>" alt="image" />
                                    <div class="mask">
                                      <p>Aksi</p>
                                      <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="caption">
                                      <p><strong>Lab Computer Vision</strong>
                                    <p>Status : <b>Dipakai</b></p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-55">
                                <div class="thumbnail">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo base_url('admin/production/images/media5.jpg')?>" alt="image" />
                                    <div class="mask">
                                      <p>Aksi</p>
                                      <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="caption">
                                      <p><strong>Lab Digital</strong>
                                    <p>Status : <b>Dipakai</b></p>
                                  </div>
                                </div>
                              </div>


                              <div class="col-md-55">
                                <div class="thumbnail">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo base_url('admin/production/images/media6.jpg')?>" alt="image" />
                                    <div class="mask no-caption">
                                      <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="caption">
                                    <p><strong>Lab Pemrograman</strong>
                                    </p>
                                    <p>Status : Kosong</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-55">
                                <div class="thumbnail">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo base_url('admin/production/images/media7.jpg')?>" alt="image" />
                                    <div class="mask no-caption">
                                      <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="caption">
                                    <p><strong>Lab Database</strong>
                                    </p>
                                    <p>Status : Kosong</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-55">
                                <div class="thumbnail">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo base_url('admin/production/images/media8.jpg')?>" alt="image" />
                                    <div class="mask no-caption">
                                      <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="caption">
                                    <p><strong>Lab Multimedia</strong>
                                    </p>
                                    <p>Status : Kosong</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-55">
                                <div class="thumbnail">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo base_url('admin/production/images/media9.jpg')?>" alt="image" />
                                    <div class="mask no-caption">
                                      <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="caption">
                                    <p><strong>Lab Internet</strong>
                                    </p>
                                    <p>Status : Kosong</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-55">
                                <div class="thumbnail">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo base_url('admin/production/images/media10.jpg')?>" alt="image" />
                                    <div class="mask no-caption">
                                      <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="caption">
                                    <p><strong>Lab Mobile</strong>
                                    </p>
                                    <p>Status :Kosong</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  </div>





                </div>

                <div class="clearfix"></div>

              </div>
            </div>

          </div>
          <br />



    <!-- jQuery -->
    <script src="<?php echo base_url('admin/vendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('admin/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('admin/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('admin/vendors/nprogress/nprogress.js')?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('admin/vendors/Chart.js/dist/Chart.min.js')?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('admin/vendors/gauge.js/dist/gauge.min.js')?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('admin/vendors/iCheck/icheck.min.js')?>"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('admin/vendors/skycons/skycons.js')?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('admin/vendors/Flot/jquery.flot.js')?>"></script>
    <script src="<?php echo base_url('admin/vendors/Flot/jquery.flot.pie.js')?>"></script>
    <script src="<?php echo base_url('admin/vendors/Flot/jquery.flot.time.js')?>"></script>
    <script src="<?php echo base_url('admin/vendors/Flot/jquery.flot.stack.js')?>"></script>
    <script src="<?php echo base_url('admin/vendors/Flot/jquery.flot.resize.js')?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')?>"></script>
    <script src="<?php echo base_url('admin/vendors/flot-spline/js/jquery.flot.spline.min.js')?>"></script>
    <script src="<?php echo base_url('admin/vendors/flot.curvedlines/curvedLines.js')?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('admin/vendors/DateJS/build/date.js')?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('admin/vendors/jqvmap/dist/jquery.vmap.js')?>"></script>
    <script src="<?php echo base_url('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')?>"></script>
    <script src="<?php echo base_url('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('admin/vendors/moment/min/moment.min.js')?>"></script>
    <script src="<?php echo base_url('admin/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('admin/build/js/custom.min.js')?>"></script>

    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- JQVMap -->
    <script>
      $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
      });
    </script>
    <!-- /JQVMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->

    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->
  </body>
</html>
