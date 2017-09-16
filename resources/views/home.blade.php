@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Live Leads
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
@endsection

@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">52 active leads through 3 campaigns</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <span class="info-box-icon bg-blue"><i class="fa fa-facebook"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Facebook</span>
                            <span class="info-box-number">90<small>%</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <div class="col-md-3">
                        <span class="info-box-icon bg-red"><i class="fa fa-google"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Google</span>
                            <span class="info-box-number">34<small>%</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <div class="col-md-3">
                        <span class="info-box-icon bg-green"><i class="fa fa-linkedin"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">LinkedIn</span>
                            <span class="info-box-number">34<small>%</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <div class="col-md-3">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-twitter"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Twitter</span>
                        <span class="info-box-number">34<small>%</small></span>
                    </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
        </div>
        <!-- /.col -->
      </div>

@endsection
