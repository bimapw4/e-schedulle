@extends('index')
@section('content')
<div class="center-widget">
    <div class="col-md-5 col-xs-5">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user" id="widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            
        </div>
        <!-- /.widget-user -->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content')
                }
              })
            $.ajax({
              type: "GET",
              url: 'http://ub.e-protokolri2.com/user/' + `${sessionStorage.getItem("id")}`,
              headers: {
                contentType: "application/json",
                Authorization : `Bearer ${sessionStorage.getItem("token")}`,
                dataType: 'json',
              },
            //   console.log(url)
              success: function (success) {
                let level1 = ''
                profil = success[0].data
                level1 += `
                    <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;"></div>
                    <div class="widget-user-image">
                        <img class="img-circle" src="${profil.picture == null ? "../dist/img/user3-128x128.jpg" : profil.picture}" alt="User Avatar">
                    </div>
                    <div class="box-footer">
                        <h3 class="text-center">${profil.position}</h3>
                        <h5 class="text-center">Ubah Profil ></h5>
                        <h3 class="text-center">${profil.fullname}</h3>
                        <h4 class="text-center">${profil.position}</h4>
                        <h4 class="text-center">${profil.phone == null ?"xxxxxxxxx" : profil.phone}</h4>
                        <h4 class="text-center">${profil.email}</h4>
                    </div>
                  `
                
                $('#widget-user').html(level1)
                console.log(success[0].data)
              },
              error:function(error){
                console.log(error)
              }
            });
          });
      </script>
@endsection
