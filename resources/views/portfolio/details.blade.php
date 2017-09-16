@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Portfolio Details
        <small>Version 1.0a</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Portfolios</li>
      </ol>
    </section>
@endsection

@section('content')
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
      @foreach($port as $data)
         <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <h3 class="widget-user-username" style="margin-left: 0px;">{!! $data -> name !!}</h3>
              <h5 class="widget-user-desc" style="margin-left: 0px;" >{!! $data -> domain !!}</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><h4 style="padding: 25px;">{!! $data -> description !!}</h4> </li>
               <!--  <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li> -->
              </ul>
            </div>
          </div>
        @endforeach

      </div>
    </div>
@endsection