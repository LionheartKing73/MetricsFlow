<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>metricsflow| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
 <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <link href="{{ asset("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}" rel="stylesheet" type="text/css" />
        
        <!-- Theme style -->
       <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("/bower_components/AdminLTE/plugins/iCheck/all.css")}}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.css")}}">
      
        <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.css")}}" rel="stylesheet" type="text/css" />


         <!-- jvectormap -->
         
       
        <!-- Fonts -->
       <!--  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'> -->

        <!-- CSS -->
      <!--   <link href="/css/sweetalert.css" rel="stylesheet"> -->
        <!-- <link href="/css/app.css" rel="stylesheet">  -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

  <div class="login-box">
    @include('spark::shared.errors')
    <div class="login-logo">
      <a href="http://metricsflow.com/"><b>metrics</b>flow</a>
    </div>

    <div class="login-box-body">
      <p class="login-box-msg">Create your account</p>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="/test" method="POST">
                  {{ csrf_field() }}
                  
                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" name = "name" placeholder="Name e.g. John Doe">
                    <input type="hidden" class="form-control" name = "token" value="{{$token}}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  
                  <div class="form-group has-feedback">            
                      <input type="email" class="form-control" name = "email" placeholder="Email">                    
                      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>

                  <div class="form-group has-feedback">                                        
                      <input type="password" class="form-control" name="password"  placeholder="Password">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>                   
                  </div>
                  <input type="hidden" class="form-control" name = "role_id" value="3">
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign up</button>
                </div>
                <!-- /.box-footer -->
              </form>
      </div>
    </div>