@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Portfolio
        <small>Version 1.0a</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
@endsection

@section('content')
<section class="content-header">
   <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Portfolio Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post" class="form-horizontal">
              <div class="box-body">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="inputName3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name = "name" id="inputName3" placeholder="Name e.g. John Doe" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputDescription3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5" name="description" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Domain</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="url" id="inputPassword3" placeholder="http://example.com/" required>
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" id="sign">Sign up</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</section>
  
@endsection