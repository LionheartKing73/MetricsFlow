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
                                <li role="presentation" class="active">
                                    <a href="/users">
                                        <i class="fa fa-fw fa-btn fa-edit"></i>User List
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
                                        Activate User
                                    </div>
                                    <div class="panel-body">
                                        @if(!isset($user->token))
                                            Your are Invalid
                                        @else
                                            <form action="/users/activate/{!! isset($user->token)?$user->token:"" !!}" method="post">
                                        <!-- Name -->
                                        <div class="form-group clearfix" :class="{'has-error': registerForm.errors.has('name')}">
                                            <label class="col-md-4 control-label">Name</label>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="name" value="{!! isset($user->name)?$user->name:"" !!}" v-model="registerForm.name" autofocus>
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="token" value="{!! isset($user->token)?$user->token:"" !!}">
                                                <span class="help-block" v-show="registerForm.errors.has('name')">
                                                    @{{ registerForm.errors.get('name') }}
                                                </span>
                                            </div>
                                        </div>

                                        <!-- E-Mail Address -->
                                        <div class="form-group clearfix" :class="{'has-error': registerForm.errors.has('email')}">
                                            <label class="col-md-4 control-label">E-Mail Address</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="email" value="{!! isset($user->email)?$user->email:"" !!}" v-model="registerForm.email" disabled>
                                                <span class="help-block" v-show="registerForm.errors.has('email')">
                                                    @{{ registerForm.errors.get('email') }}
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group clearfix" :class="{'has-error': registerForm.errors.has('password')}">
                                            <label class="col-md-4 control-label">Password</label>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="password" v-model="registerForm.password">
                                                <span class="help-block" v-show="registerForm.errors.has('password')">
                                                    @{{ registerForm.errors.get('password') }}
                                                    {!! $errors->first('password') !!}
                                                </span>
                                                <span>
                                                     {!! $errors->first('password') !!}
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Password Confirmation -->
                                        <div class="form-group clearfix" :class="{'has-error': registerForm.errors.has('password_confirmation')}">
                                            <label class="col-md-4 control-label">Confirm Password</label>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="password_confirmation" v-model="registerForm.password_confirmation">
                                                <span class="help-block" v-show="registerForm.errors.has('password_confirmation')">
                                                    @{{ registerForm.errors.get('password_confirmation') }}
                                                </span>
                                                 <span>
                                                     {!! $errors->first('password_confirmation') !!}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-md-4 control-label"> </label>
                                            <div class="col-md-6">
                                                <input type="submit" class="btn btn-info" name="submit" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                        @endif
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
