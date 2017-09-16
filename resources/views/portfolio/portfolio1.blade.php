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
      <div class="col-md-8 col-md-offset-2">
    @foreach(Auth::user()->portfolios as $portfolio)
      <div class="box">
        <h3 class="box-header">{{$portfolio->name}}
        </h3>
        <h4 class="box-header" style="margin-top: -20px">{{$portfolio->description}}</h4>
        <div class="box-header" style="margin-top: -10px;">
          <span class="pull-left">
          @if(Auth::user()->currentPortfolio() == $portfolio)
            <button class="btn btn-primary bg-olive btn-flat" style="pointer-events: none">Currently Active</button>
          @else
          <a href="/portfolio/switch/{{$portfolio->id}}">
            <button class="btn bg-navy btn-flat">Make Active</button>
          </a>
          @endif
          <a href="/portfolio/edit/{{$portfolio->id}}">
            <button class="btn bg-purple btn-flat">Edit Portfolio</button>
          </a>
          <a href="/portfolio/settings/{{$portfolio->id}}">
            <button class="btn btn-flat"><i class="fa fa-gears text-black"></i></button>
          </a>
          <span>
        </div>
      </div>
    @endforeach
      </div>
    </div>
  @else
    <h3>No Portfolios</h3>
  @endif
@endsection