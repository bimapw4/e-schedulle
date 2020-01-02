<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e-Schedulle</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../css/style.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css">
  {{-- test --}}
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.css">
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.css">
  <script src="https://kit.fontawesome.com/4ed2e5a3f3.js" crossorigin="anonymous"></script>
  <link rel="icon" sizes="192x192" href="https://material.io/static/images/simple-lp/favicons/components-192x192.png">
  <link rel="shortcut icon" href="https://material.io/static/images/simple-lp/favicons/components-72x72.png">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {{-- <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css"> --}}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  {{-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}
</head>
<body class="hold-transition sidebar-mini" >
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top skin-blue-me">
      <!-- Sidebar toggle button-->
      <div class="row">
        <div class="col-md-5 col-xs-4">
          <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" data-toggle="push-menu" role="button">
                  <img src="../img/logo.svg" class="user-image" alt="User Image">
                  <span>e-Scheduling</span>
                </a> 
              </li>
          </ul>
        </div>
        <div class="col-md-6 col-xs-6">
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown messages-menu">
                  <div class="style-form-me">
                      <div class="input-group" style="border-radius:30px;">
                          <span class="input-group-addon" style="border:none;width:auto;border-radius:30px">
                            <i class="fa fa-search" style="color:black"></i>
                          </span>
                          <input type="email" class="form-control-me" placeholder="Cari">
                      </div>
                  </div>
              </li>
              <!-- Messages: style can be found in dropdown.less-->
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle">
                  <i class="fa fa-bell-o"></i>
                </a>
              
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu" onclick="logout()">
                <a class="dropdown-toggle" id="logout">
                  <i class="fa fa-sign-out-alt"></i>
                </a>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image" id="img">
          
        </div>
        <div class="pull-left info" id="position"></div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"></li>
        <li class="treeview">
          <a href="/dashboard">
            <i class="far fa-calendar-alt"></i>
            <span>Agenda Saya</span>
          </a>
        </li>
        <li class="treeview">
          <a href="/agenda">
            <i class="fas fa-plus"></i>
            <span>Tambah Agenda</span>
          </a>
        </li>
        <li>
          <a href="#">
            <hr style="border: 0.5px solid #c4c4c4;margin:0">
          </a>
        </li>
        <li>
          <a href="/member">
            <i class="fas fa-home"></i></i> <span>Beranda</span>
          </a>
        </li>
        <li class="treeview">
          <a href="/profil">
            <i class="fas fa-user-alt"></i>
            <span>Profil</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-page">

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
{{-- test --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
{{-- <script src="../bower_components/fastclick/lib/fastclick.js"></script> --}}
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- fullCalendar -->
<script src="../bower_components/moment/moment.js"></script>
<script src="../bower_components/fullcalendar/dist/fullcalendar.js"></script>

<!-- Page specific script -->
<script>
  function logout() {
    sessionStorage.clear();
    window.location.reload();
  }

  $(document).ready(function () {

    token = sessionStorage.getItem("token")
    if (token == null) {
      window.location.replace("/")
    }

    var date = new Date()
    var m    = date.getMonth(),
        y    = date.getFullYear()
    var startdate = new Date(y, m , 1)
    var enddate = new Date(y, m + 1, 0)

    let position = `
      <p style="font-size:12pt;margin-top:15px">${sessionStorage.getItem("position")}</p>
    `
    $('#position').html(position)

    let name =`${sessionStorage.getItem("fullname")}`
    $('.header').html(name)

    let img =`<img class="img-circle-agenda" src="${sessionStorage.getItem("img") === "" ? "../dist/img/user3-128x128.jpg": sessionStorage.getItem("img")}" alt="User Avatar">`
    $('#img').html(img)
  }) 
  
</script>
</body>
</html>
