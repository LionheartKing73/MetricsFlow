@extends('spark::layouts.app')

@section('scripts')
    <script src="https://js.stripe.com/v2/"></script>
@endsection

@section('content')
    <div class="spark-screen container">
        <div class="row">
            <!-- Tabs -->
            <div class="col-md-3">
                <div class="panel panel-default panel-flush">
                    <div class="panel-heading">
                        Settings
                    </div>

                    <div class="panel-body">
                        <div class="spark-settings-tabs">
                            <ul class="nav spark-settings-stacked-tabs" role="tablist">
                                <!-- Profile Link -->
                                <li role="presentation">
                                    <a href="/settings#/profile">
                                        <i class="fa fa-fw fa-btn fa-edit"></i>Profile
                                    </a>
                                </li>
                                @if (Auth::user()->role_id == 1)
                                    <li role="presentation" class="active">
                                        <a href="/users">
                                            <i class="fa fa-fw fa-btn fa-edit"></i>User List
                                        </a>
                                    </li>
                                @endif
                                <li role="presentation">
                                    <a href="/settings#/teams">
                                        <i class="fa fa-fw fa-btn fa-users"></i>Portfolios
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab Panels -->
            <div class="col-md-9">
                <div class="tab-content">
                    <!-- Profile -->
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <div>
                            <!-- Update Profile Photo -->
                            <div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Users List
                                        <a href="/users/create" class="btn btn-primary pull-right"> Send Invitation </a>
                                    </div>

                                    <div class="panel-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                            @if(!$users->isEmpty())
                                                @foreach($users as $user)
                                                    <tr>
                                                        <td> {!! $user->id !!}</td>
                                                        <td> {!! $user->name !!}</td>
                                                        <td> {!! $user->email !!}</td>
                                                        <td>  @if($user->role_id == 1){!! 'Super Admin' !!} @elseif($user->role_id == 2) {!! 'Admin' !!} @else {!! 'Client' !!}@endif </td>
                                                        <td>  @if($user->status == 1){!! 'Pending' !!} @else{!! 'Active' !!}@endif </td>
                                                        <td>
                                                            <!--<a href="/users/edit/{!! $user->id !!}"> Edit </a>-->
                                                            <!--<a href="/users/delete/{!! $user->id !!}"> Delete </a>-->
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div><!--v-component-->
                        </div><!--v-component-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
