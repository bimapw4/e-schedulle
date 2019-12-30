@extends('index')
@section('content')
  <div>
    <!-- Horizontal Form -->
    <div class="box p-spacing" style="border-radius:10px;border:none">
      <div class="box-header with-border">
        <h4 style="margin:0">Tambah Agenda</h4>
        <h3 style="margin:0">Rektor</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" method="post" id="form">
        <div class="box-body l-spacing">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label-me">Judul Agenda</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" autocomplete="off" id="judul">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label-me">Tanggal Agenda</label>

            <div class="col-sm-9">
              <div class="col-sm-3" style="padding: 0">  
                {{-- <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select> --}}
                <input class="form-control select2" type="date" id="datestart">
              </div>
              <div class="col-sm-1">
                  <hr style="border: 1px solid #83b6f5;">
              </div>
              <div class="col-sm-3" style="padding: 0">
                {{-- <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select> --}}
                <input class="form-control select2" type="date" id="dateend">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label-me">Waktu Agenda</label>

            <div class="col-sm-7">
                <div class="col-sm-3" style="padding: 0">  
                  {{-- <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select> --}}
                  <input class="form-control select2" type="time" id="timestart">
                </div>
                <div class="col-sm-1">
                    <hr style="border: 1px solid #83b6f5;">
                </div>
                <div class="col-sm-3" style="padding: 0">
                  {{-- <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select> --}}
                  <input class="form-control select2" type="time" id="timeend">
                </div>
              </div>
          </div>    
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label-me">Lokasi Agenda</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" autocomplete="off" id="lokasi">
            </div>
          </div>        
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label-me">Jenis Agenda</label>

            <div class="col-sm-3">
              <select class="form-control select2" style="width: 100%;" id="type">
                  <option selected="selected" value=""></option>
                  <option value="RAPAT_KERJA">Rapat Kerja</option>
                  <option value="WORKSHOP">Workshop</option>
                  <option value="STUDI_BANDING">Studi Banding</option>
                  <option value="UNDANGAN">Undangan</option>
                  <option value="FAKULTATIF">Fakultatif</option>
                  <option value="PRIBADI">Pribadi</option>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label-me">Sifat Agenda</label>

            <div class="col-sm-3">
                <select class="form-control select2" style="width: 100%;" id="repeat">
                    <option selected="selected" value=""></option>
                    <option value="WEEK">Week</option>
                    <option value="MONTH">Month</option>
                    <option value="YEAR">Year</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label-me">Peserta Agenda</label>
            <div class="col-sm-5">
              <select class="selectpicker form-control" multiple data-live-search="true"  id="member">
              </select>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-info pull-right">Tambah</button>
        </div>
        <!-- /.box-footer -->
      </form>
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
        url: '{{config('view.API_DOMAIN')}}/user',
        headers: {
            contentType: "application/json",
            Authorization : `Bearer ${sessionStorage.getItem("token")}`,
            dataType: 'json',
        },
        success: function (data) {
          let level = ''
          data[0].data.forEach((user, idx) => {
            level += `
              <option value='${user.id}'>${user.fullname}</option>
              `
          })
          $('#member').append(level).selectpicker('refresh');
          console.log($('#member'))
        },
        error:function(error){
            console.log(error)
        }
      })
    })

    $('#form').on('submit', function (event) {
          event.preventDefault();
          $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content')
              }
            })
          // var timestart = $('#timestart').val()+":00"
          // console.log($('#datestart').val())
          $.ajax({
            type: "POST",
            url: '{{config('view.API_DOMAIN')}}/schedule',
            headers: {
                    contentType: "application/json",
                    Authorization : `Bearer ${sessionStorage.getItem("token")}`,
                    dataType: 'json',
            },
            data: {
              "name" : $('#judul').val(),
              "location" : $('#lokasi').val(),
              "time" : $('#datestart').val() +" "+ $('#timestart').val()+":00",
              "endtime" : $('#dateend').val() +" "+ $('#timeend').val()+":00",
              "is_repeat": $('#repeat').val(),
              "type" :$('#type').val(),
              "participant" :$('#member').val(),
              "status" : 1
            },
            success: function (data) {
              window.location.reload();
              alert("success add schedulle")
              // window.location.replace('dashboard')
            },
            error:function(error){
              console.log(error)
            }
          })
      });
  </script>
@endsection
