<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e-Schedule</title>
  <!-- Tell the browser to be responsive to screen width -->
 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css">
  
</head>
<body class="bg-login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-body">
    <p class="login-msg">Selamat Datang di</p>

     <div class="title-group">
        <img src="../img/logo.svg" class="margin-img">
        <p style="margin-top:10px;">e-Schedulling</p>
      </div> 
      
    <form action="" method="post">
      <div class="style-input-me">
        <div class="input-group ">
            <span class="input-group-addon" style="border:none;"><i class="glyphicon glyphicon-envelope"></i></span>
            <input type="email" class="form-control-me " placeholder="Alamat email">
        </div>
      </div>
        {{-- <hr style="border:0.4px solid #d1d1d1; margin:0;"> --}}
        <br/>
      <div class="style-input">
        <div class="input-group">
            <span class="input-group-addon" style="border:none"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="email" class="form-control-me " placeholder="sandi">
        </div>
      </div>
        {{-- <hr style="border:0.4px solid #d1d1d1; margin:0;"> --}}
        <!-- /.col -->
       
        <div class="row" style="margin-top:30px">
            <div class="col-md-12 text-center ">
                <button type="submit" class="btn btn-primary-me btn-position btn-flat" style="border-radius:3px"><p class="sign-in">Masuk</p></button>
            </div>
        </div>
        <!-- /.col -->
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
</body>
</html>
