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
                        <h4 id="positon" style="margin-bottom: 5px"></h4>
                        <h4 id="name"></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box box-primary" style="border-radius:0px">
                    <div class="box-body no-padding">
                        <div id="calendar">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="box-schedule box-schedule-over">
                <div style="width: 500px" id="box-schedule">

                </div>
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
                var date = new Date()
                        m    = date.getMonth() + 1;
                        y    = date.getFullYear();
                var enddate = new Date(y, m, 0);

                let url = '{{config('view.API_DOMAIN')}}'
                
                $.ajax({
                type: "GET",
                url: `${url}/schedule?startdate=${y+"-"+ m +"-"+"1"}&enddate=${y+"-"+ m +"-"+ enddate.getDate()}`,
                headers: {
                    contentType: "application/json",
                    Authorization : `Bearer ${sessionStorage.getItem("token")}`,
                    dataType: 'json',
                },
                success: function (data) {
                    let level = ''
                    data[0].data.forEach((schedulle, idx) => {
                    var st = schedulle.time; 
                    var timestart = st.slice(11, 16);

                    var et = schedulle.endtime; 
                    var timeend = et.slice(11, 16);
                    
                    var numday = st.slice(8, 10);
                    var nummonth = st.slice(5, 7) - 1;
                    var numyear = st.slice(0, 4);

                    var day = new Date(numyear,nummonth,numday).getDay()

                    var daymaster = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","minggu"]
                    var monthmaster = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember","Januari"]

                    var days = daymaster[day]
                    var month = monthmaster[nummonth]
                    // console.log(monthmaster[nummonth])
                    level += `
                    <div class="header-box-schedule">
                    <h4>${days+", "+numday+" "+month+" "+numyear}</h4>
                    </div>
                    <div class="body-box-schedule">
                        <div class="row" style="margin-top:20px">
                            <div class="col-md-2 col-xs-2 style-time">
                                <h4>${timestart}</h4>
                                <p style="">-</p>
                                <h4>${timeend}</h4>
                                <h4 style="font-size:12pt">WIB</h4>
                            </div>
                            <div class="col-md-9 col-xs-9" style="padding:0">
                                <p class="title-agenda">${schedulle.name}</p>
                                <div class="style-name-place">
                                    <i class="fa fa-map-marker pull-left"></i>
                                    <p>${schedulle.location}</p>
                                </div>
                            </div>
                        </div>
                        <hr style="border:0.5px solid #d9dbdc">
                    </div>
                    `
                })
                $('#box-schedule').html(level)
                 console.log(data)
                },
                error:function(error){
                    console.log(error)
                }
            });

            let position = `
            ${sessionStorage.getItem("position")}
            `
            $('#positon').append(position)
            let name =`${sessionStorage.getItem("fullname")}`
            $('#name').html(name)
           
          });
      </script>
@endsection
