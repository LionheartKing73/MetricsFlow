@extends('layouts.template')

@section('content-header')
@endsection

@section('content')
<table id="example3" class="table table-hover">
                      <thead>
                      <tr id="tablehead">
                        <th >User ID</th>
                        <th id="th_last">Name</th>
                        <th id="th_last">Token</th>
                        <th >Created At</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($api as $token)            
                      <tr> 
                        <td>{{ $token->user_id}}</td>
                        <td>{{ $token->name }}</td>  
                        <td>{{ $token->token}}</td>         
                        <td>{{ $token->created_at}}</td>                                           
                      </tr>
                      @endforeach
                     </tbody>
                    </table>
@endsection