@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Portfolios
        <small>Version 1.0a</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Portfolios</li>
      </ol>
    </section>
@endsection

@section('content')
  @if (Auth::user()->hasPortfolios())
    <div class="row">
      <div class="col-md-12 col-md-offset-1">
    @foreach(Auth::user()->portfolios as $portfolio)
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner" style="padding-top: 20px; padding-bottom: 20px;">
              <h4 style="text-align: center">{{$portfolio->name}}</h4>
            </div>
            <a href="/details/{{$portfolio->id}}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
    @endforeach
      </div>
    </div>
  @else
    <h3>No Portfolios</h3>
  @endif
@endsection