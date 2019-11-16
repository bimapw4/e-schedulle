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
      <form class="form-horizontal">
        <div class="box-body l-spacing">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label-me">Judul Agenda</label>

            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label-me">Tanggal Agenda</label>

            <div class="col-sm-9">
              <div class="col-sm-3" style="padding: 0">  
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <div class="col-sm-1">
                  <hr style="border: 1px solid #83b6f5;">
              </div>
              <div class="col-sm-3" style="padding: 0">
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label-me">Waktu Agenda</label>

            <div class="col-sm-7">
                <div class="col-sm-3" style="padding: 0">  
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <div class="col-sm-1">
                    <hr style="border: 1px solid #83b6f5;">
                </div>
                <div class="col-sm-3" style="padding: 0">
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              </div>
          </div>    
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label-me">Lokasi Agenda</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3">
            </div>
          </div>        
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label-me">Jenis Agenda</label>

            <div class="col-sm-3">
              <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label-me">Sifat Agenda</label>

            <div class="col-sm-3">
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label-me">Peserta Agenda</label>

            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputPassword3">
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-info pull-right">Sign in</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  </div>
@endsection
