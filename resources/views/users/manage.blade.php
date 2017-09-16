@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Management
        <small>Version 1.0a</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Management</li>
      </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Current Users</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Status</th>
                                <th>Last Seen</th>
                                <th>Joined</th>
                                <th>Portfolios Accessible</th>
                                <th>Portfolios Owned</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach (App\User::get() as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                @if ($user->status == 1)
                                <td><span class="label label-danger">Inactive</span></td>
                                @else
                                <td><span class="label label-success">Active</span></td>
                                @endif
                                <td>{{ $user->updated_at }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ count($user->portfolios) }}</td>
                                <td>{{ count($user->portfolios->where('owner_id', $user->id)) }}</td>
                                <td><a href="/users/delete/{{$user->id}}"><i class="fa fa-trash"></i></a></td>                
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>        
            </div>
        </div>
    </div>
@endsection