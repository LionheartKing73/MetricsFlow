@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Token Management
        <small>Version 1.0a</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Reports</li>
      </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Signup Tokens</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>Token Value</th>
                                {{-- <th>Linked Portfolio</th> --}}
                                <th>Status</th>
                                <th>Created at</th>
                                <th>Used at</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($tokens as $token)
                            <tr>
                                <td>{{ $token->token }}</td>
                                {{-- <td>{{ $token->portfolio->name }}</td> --}}
                                @if ($token->status == "used")
                                <td><span class="label label-danger">Used</span></td>
                                @else
                                <td><span class="label label-success">Unused</span></td>
                                @endif
                                <td>{{ $token->created_at }}</td>
                                @if ($token->created_at == $token->updated_at)
                                <td>--</td>
                                @else
                                <td>{{ $token->updated_at }}</td>
                                @endif
                                <td><a href="/tokens/delete/{{$token->id}}"><i class="fa fa-trash"></i></a></td>                
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="box-footer">
                    <form action="/tokens/create" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-md-9">                            
                                <label for="portfolio_id">Using Portfolio:</label>
                                <select class="form-control pull-left" name="portfolio_id">                                    
                                    @foreach (App\Portfolio::get() as $portfolio)
                                        <option value="{{ $portfolio->id }}">{{ $portfolio->name }}</option>
                                    @endforeach
                                </select>                        
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary" style="margin-top:24px">Generate Token</button>
                            </div>
                        </div>
                        
                    </form>
                    </div>
                </div>        
            </div>
        </div>
    </div>
@endsection