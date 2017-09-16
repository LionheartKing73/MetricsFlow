@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Portfolio
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
              <h3 class="box-title">Edit Portfolio Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post" class="form-horizontal">
              <div class="box-body">
                {{ csrf_field() }}
                @foreach($port as $data)
                <div class="form-group">
                  <label for="inputName3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name = "name" id="inputName3" placeholder="Name e.g. John Doe" value="{!! $data -> name !!}" required>
                    
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputDescription3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5" name="description" required>{!! $data -> description !!}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Domain</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="url" id="inputPassword3" value="{!! $data -> domain !!}" required>
                  </div>
                </div>
                @endforeach
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="/portfolio"><button type="submit" class="btn btn-default">Cancel</button></a>
                <button type="submit" class="btn btn-info pull-right" id="sign">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</section>
  
@endsection