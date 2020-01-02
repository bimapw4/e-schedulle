<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
      
    <form method="post" id="form">
      <div class="style-input">
        <div class="input-group ">
            <span class="input-group-addon" style="border:none;"><i class="glyphicon glyphicon-envelope"></i></span>
            <input type="username" class="form-control-me" placeholder="Alamat email" id="username">
        </div>
      </div>
        {{-- <hr style="border:0.4px solid #d1d1d1; margin:0;"> --}}
        <br/>
      <div class="style-input">
        <div class="input-group">
            <span class="input-group-addon" style="border:none"><i class="glyphicon glyphicon-lock" style=";border:black;"></i></span>
            <input type="password" class="form-control-me " placeholder="sandi" id="password">
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
</html>

<script>
  $(document).ready(function () {
    token = sessionStorage.getItem("token")
    if (token != null) {
      window.location.replace("/member")
    }
  })

  $('#form').on('submit', function (event) {
        event.preventDefault();
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content')
            }
          })
          let url = ''
        $.ajax({
          type: "POST",
          url: '{{ config('view.API_DOMAIN') }}/login',
          data: {
            username: $('#username').val(),
            password: $('#password').val(),
          },
          success: function (data) {          
            const token = data[0].data.access_token
            const id = data[0].data.id
            const position = data[0].data.position
            const fullname = data[0].data.fullname
            console.log(data)
            sessionStorage.setItem("token",token)
            sessionStorage.setItem("id",id)
            sessionStorage.setItem("position",position)
            sessionStorage.setItem("fullname",fullname)
            sessionStorage.setItem("img","")
            // sessionStorage.setItem("reload","true")
            window.location.replace('member')
          },
          error:function(error){
            console.log(error)
          }
        })
    });
</script>
