@extends('index')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-12" style="margin-bottom:5%;">
                <div class="row content-profil">
                    <div class="col-sm-5" id="img-profile">
                        
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}
    <script>
        $(document).ready(function () {
                $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content')
                    }
                })
                
                var date = new Date()
                        mm    = date.getMonth() + 1;
                        yy    = date.getFullYear();
                var enddate = new Date(yy, mm, 0);

                let url = '{{config('view.API_DOMAIN')}}'

                if (sessionStorage.getItem('url')) {
                    var linkid = sessionStorage.getItem('url')
                    var link = `${url}/schedule?startdate=${yy+"-"+ mm +"-"+"1"}&enddate=${yy+"-"+ mm +"-"+ enddate.getDate()}${linkid}`
                } else {
                    var link = `${url}/schedule?startdate=${yy+"-"+ mm +"-"+"1"}&enddate=${yy+"-"+ mm +"-"+ enddate.getDate()}`
                }
                
                $.ajax({
                type: "GET",
                url: `${link}`,
                headers: {
                    contentType: "application/json",
                    Authorization : `Bearer ${sessionStorage.getItem("token")}`,
                    dataType: 'json',
                },
                success: function (data) {
                    var datasave = JSON.stringify(data[0].data)
                    if (datasave == "") {
                        sessionStorage.setItem('data', ['']);
                    }
                    sessionStorage.setItem('data', datasave);
                    let level = ''
                    let tanggal = ''
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
                    if (tanggal !== numday){
                        tanggal = numday
                        level += `
                            <div class="header-box-schedule">
                            <h4>${days+", "+numday+" "+month+" "+numyear}</h4>
                            </div>
                            `
                    }
                    level += `<div class="body-box-schedule">
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
                    </div>`
                })
                $('#box-schedule').html(level)
                // console.log(data[0].data)
                },
                error:function(error){
                    console.log(error)
                }
            });

            let position = `${sessionStorage.getItem("position")}`
            $('#positon').append(position)

            let name =`${sessionStorage.getItem("fullname")}`
            $('#name').html(name)

            let img =`<img class="img-circle-me" src="${sessionStorage.getItem("img") === "" ? "../dist/img/user2-160x160.jpg": sessionStorage.getItem("img")}" alt="User Avatar">`
        //    let img = `<img src="../dist/img/user2-160x160.jpg" class="img-circle-me" alt="User Image">`
           $('#img-profile').html(img)
        //    if (sessionStorage.getItem('reload') == "") {
        //         this.location.reload()
        //      }
          })
          
          $(function () {

                /* initialize the external events
                -----------------------------------------------------------------*/
                function init_events(ele) {
                ele.each(function () {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                    }

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject)

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                    zIndex        : 1070,
                    revert        : true, // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                    })

                })
                }

                init_events($('#external-events div.external-event'))

                /* initialize the calendar
                -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date()
                var d    = date.getDate(),
                    m    = date.getMonth(),
                    y    = date.getFullYear()
                    mmm  = date.getMonth() + 1;
                var enddate = new Date(y, mmm, 0);

                let url = '{{config('view.API_DOMAIN')}}'

                if (sessionStorage.getItem('url')) {
                    var linkid = sessionStorage.getItem('url')
                    var link = `${url}/schedule?startdate=${y+"-"+ mmm +"-"+"1"}&enddate=${yy+"-"+ mmm +"-"+ enddate.getDate()}${linkid}`
                } else {
                    var link = `${url}/schedule?startdate=${y+"-"+ mmm +"-"+"1"}&enddate=${yy+"-"+ mmm +"-"+ enddate.getDate()}`
                }
                var read = []
                $.ajax({
                    type: "GET",
                    url: `${link}`,
                    headers: {
                        contentType: "application/json",
                        Authorization : `Bearer ${sessionStorage.getItem("token")}`,
                        dataType: 'json',
                    },
                    success: function (data) {
                        dd(data[0].data)
                    },
                    error:function(error){
                        console.log(error)
                    }
                })

                function dd(read) {
                    read.map(r => r.time = r.time.slice(0, 10))
                    const result = []

                    for (const time of read) {
                        if (result.indexOf(time.time) < 0) {
                            result.push(time.time)
                        }
                    }

                    let finalResult = []

                    result.map(
                        time => {
                            const dd = read.filter(re => re.time == time)

                            let color = [
                            '#f56954', // red
                            '#f39c12', // yellow
                            '#0073b7', // blue
                            '#00a65a', // green
                            '#3c8dbc' // light blue
                        ]

                        dd.map((d, idx) => {
                            if (idx == dd.length - 1) {
                                const { time, name } = d

                                const e = {
                                start: time,
                                backgroundColor: color[idx],
                                borderColor    : color[idx]
                                }
                                finalResult.push(e)
                            }
                        })
                    })

                    $('#calendar').fullCalendar({
                        header    : {
                            left  : 'prev,next today',
                            center: 'title',
                            right : 'month,agendaWeek,agendaDay'
                        },
                        buttonText: {
                            today: 'today',
                            month: 'month',
                            week : 'week',
                            day  : 'day'
                        },
                        //Random default events
                        events    : (finalResult)
                    })
                }
            /* ADDING EVENTS */
            });
      </script>
@endsection
