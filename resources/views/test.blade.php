@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lead Nurturing
        <small>Version 1.0a</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-6'>
            <bar></bar>
            <chart></chart>
        </div><!-- /.col -->
        <div class='col-md-6'>
            <pie></pie>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection