@extends('index')
@section('content')
<div class="center-widget">
    <div class="col-md-5 col-xs-5">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
            </div>
            <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
                <h3 class="text-center">Dekan FT</h3>
                <h5 class="text-center">Ubah Profil ></h5>
                <h3 class="text-center">Alfian Ramadhan, S. ST.</h3>
                <h4 class="text-center">Dekan Fakultas Teknik</h4>
                <h4 class="text-center">08123456789</h4>
                <h4 class="text-center">dekan.feb@ub.ac.id</h4>
            </div>
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
              success: function (data) {
                console.log(data)
              },
              error:function(error){
                console.log(error)
              }
            });
          });
      </script>
@endsection
