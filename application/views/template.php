<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMK TELKOM MALANG</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>index.php/home" class="site_title">
                <!-- <i class="fa fa-paw"></i> --> 
                <img class="logo_title" src="<?php echo base_url(); ?>assets/productions/images/ts.png"><span>SMK TELKOM MALANG</span>
              </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/productions/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Nugrahanto</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>index.php/home"><i class="fa fa-home"></i> Home <!-- <span class="fa fa-chevron-down"></span> --></a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Kelas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form_advanced.html">Tambah Kelas</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/kelas">Daftar Kelas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Karyawan <span class="fa fa-chevron-down" ></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form_advanced.html"> Tambah Karyawan</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/karyawan">Daftar Karyawan</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Siswa <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/siswa/kelas_10">X</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/siswa/kelas_11">XI</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/siswa/kelas_12">XII</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Pelajaran <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/pelajaran/kelas_10">X</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/pelajaran/kelas_11">XI</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/pelajaran/kelas_12">XII</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Nilai <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/nilai/kelas_10">X</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/nilai/kelas_11">XI</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/nilai/kelas_12">XII</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-linux"></i> Catatan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>index.php/catatan/kelas_10">X</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/catatan/kelas_11">XI</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/catatan/kelas_12">XII</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Configuration</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Admin <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
                    <img src="<?php echo base_url(); ?>assets/productions/images/img.jpg" alt="">Nugrahanto
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
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url(); ?>assets/productions/images/img.jpg" alt="Profile Image" /></span>
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
                        <span class="image"><img src="<?php echo base_url(); ?>assets/productions/images/img.jpg" alt="Profile Image" /></span>
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
                        <span class="image"><img src="<?php echo base_url(); ?>assets/productions/images/img.jpg" alt="Profile Image" /></span>
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
                        <span class="image"><img src="<?php echo base_url(); ?>assets/productions/images/img.jpg" alt="Profile Image" /></span>
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

            <?php 
                $this->load->view($main_view); //main view sesuai dengan yang di controller pendaftarans
            ?>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url(); ?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url(); ?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url(); ?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url(); ?>assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>
    
          <script src="<?php echo base_url(); ?>assets/build/js/jquery-quickedit.js" type="text/javascript"></script>
          <!-- <script type="text/javascript">
            $(function () {
                $('.table a').quickEdit({
                    blur: false,
                    checkold: true,
                    space: false,
                    maxLength: 50,
                    showbtn: false,
                    submit: function (dom, newValue) {
                        dom.text(newValue);
                    }
                });
                $('#click_edit').on('click', function () {
                    var edit = $(this).quickEdit('create', {
                        prefix: '.qe_?',
                        blur: true,
                        autosubmit: false,
                        checkold: true,
                        space: false,
                        submit: function (dom, newValue) {
                            dom.text(newValue);
                        },
                        tmpl: '<span class="qe_scope input-group"><span><textarea rows="5" class="qe_input form-control" ></textarea></span>'
                        + '<span class="input-group-btn" style="vertical-align: top;"><button class="btn btn-primary qe_submit" >确定</button>'
                        + '<button class="btn btn-danger qe_cancel">取消</button></span></span>'
                    });
                    $(this).after(edit);
                    $('textarea', edit)[0].select();
                });
            })
        </script> -->
        <script type="text/javascript">
          $(function () {
            $('.nilai').hide();
            $('.X1').show();
                
            $('#select').on("change",function () {
              $('.nilai').hide();
              $('.X'+$(this).val()).show();
            }).val("1");
          });
        </script>
        <script type="text/javascript">
          // function trclick(){console.log('tr clicked')};

          function a1(event){  
               // alert("Silahkan input nilai..!");
               var txt;
                  var nilai = prompt("Silahkan Input Nilai...!");
                  if (nilai == null || nilai == "") {
                      txt = "User cancelled the prompt.";
                  } else {
                      txt = nilai;
                  }
                  document.getElementById("1").innerHTML = txt;
          };
        </script>

  
  </body>
</html>
