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
                        Menu
                    </div>
                    <div class="panel-body">
                        <div class="spark-settings-tabs">
                            <ul class="nav spark-settings-stacked-tabs" role="tablist">
                                <!-- Profile Link -->
                                @if (Auth::user()->role_id == 1)
                                    <li role="presentation" class="active">
                                        <a href="/users">
                                            <i class="fa fa-fw fa-btn fa-edit"></i>User List
                                        </a>
                                    </li>
                                @endif
                                <!-- Teams Link -->
                                @if (Spark::usesTeams())
                                    <li role="presentation">
                                        <a href="#teams" aria-controls="teams" role="tab" data-toggle="tab">
                                            <i class="fa fa-fw fa-btn fa-users"></i>Portfolios
                                        </a>
                                    </li>
                                @endif
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
                                        Add User
                                    </div>
                                    <div class="panel-body">
                                        <form action="/users/store" method="post">
                                            @include('spark::users.form')
                                        </form>
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
