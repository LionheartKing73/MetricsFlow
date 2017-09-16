@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Settings
        <small>Version 1.0a</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Settings</li>
      </ol>
    </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-6">
        <div class="box">
          <div class="box-body">
            <span class="info-box-more">Username: {{ Auth::user()->name }}</span>
            <span class="info-box-more">Photo: <img src={{ Auth::user()->photo_url }}></span>
          </div>
        </div>
    </div>
    <div class="col-md-6"
    
    ></div>
  </div>
@endsection