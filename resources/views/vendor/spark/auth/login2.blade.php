@extends('spark::layouts.admin_template')

@section('content')
<div class="login-box">
@include('spark::shared.errors')
  <div class="login-logo">
    <a href="http://metricsflow.com/"><b>metrics</b>flow</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form role="form" action="/login" method="POST">
      {{ csrf_field() }}

      <!-- E-mail Address -->
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <!-- Password -->
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <!-- Remember Me -->
      <div class="row">
        <div class="form-group" >
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <!-- Login Button -->
        <div class="form-group">
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">
                    Login
                </button>

                
            </div>
        </div>
      </div>
    </form>

    <a href="{{ url('/password/reset') }}">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection

