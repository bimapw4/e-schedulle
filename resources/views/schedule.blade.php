@extends('index')
@section('content')


    <div class="row">
        <div class="col-md-6">
            <div class="col-md-12" style="margin-bottom:5%;">
                <div class="row content-profil">
                    <div class="col-sm-5">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle-me" alt="User Image">
                    </div>
                    <div class="col-sm-7">
                        <h2>Agenda</h2>
                        <h4>Dekan FT</h4>
                        <h4>Alfian Ramadhan, S.ST</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box box-primary" style="border-radius:0px">
                    <div class="box-body no-padding">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="box-schedule box-schedule-over" id="box-schedule">
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
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
                url: 'http://ub.e-protokolri2.com/schedule?startdate=2020-03-01&enddate=2020-03-31',
                headers: {
                    contentType: "application/json",
                    Authorization : `Bearer ${sessionStorage.getItem("token")}`,
                    dataType: 'json',
                },
                success: function (data) {
                    let level = ''
                    data[0].data.forEach((schedulle, idx) => {
                    level += `
                    <div class="header-box-schedule">
                    <h4>Selasa, 25 oktober 2019</h4>
                    </div>
                    <div class="body-box-schedule">
                        <div class="row" style="margin-top:20px">
                            <div class="col-md-2 col-xs-2 style-time">
                                <h4>08.00</h4>
                                <p style="">-</p>
                                <h4>10.00</h4>
                                <h4 style="font-size:12pt">WIB</h4>
                            </div>
                            <div class="col-md-9 col-xs-9" style="padding:0">
                                <p class="title-agenda">Pelantikan WD II Fakultas Kedokteran</p>
                                <div class="style-name-place">
                                    <i class="fa fa-map-marker pull-left"></i>
                                    <p>Graha Medika Fakultas Kedokteran UB</p>
                                </div>
                            </div>
                        </div>
                        <hr style="border:0.5px solid #d9dbdc">
                        <div class="row" style="margin-top:20px">
                            <div class="col-md-2 col-xs-2 style-time">
                                <h4>08.00</h4>
                                <p style="">-</p>
                                <h4>10.00</h4>
                                <h4 style="font-size:12pt">WIB</h4>
                            </div>
                            <div class="col-md-9 col-xs-9" style="padding:0">
                                <p class="title-agenda">Pelantikan WD II Fakultas Kedokteran</p>
                                <div class="style-name-place">
                                    <i class="fa fa-map-marker pull-left"></i>
                                    <p>Graha Medika Fakultas Kedokteran UB</p>
                                </div>
                            </div>
                        </div>
                        <hr style="border:0.5px solid #d9dbdc">
                    </div>
                    `
                })
                console.log(level)
                $('#box-schedule').html(level)
                 
                },
                error:function(error){
                    console.log(error)
                }
            });

           
          });
      </script>
@endsection
