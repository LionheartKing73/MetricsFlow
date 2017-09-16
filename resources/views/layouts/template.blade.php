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
  <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css")}}">


    <link rel="stylesheet" type="text/css" href="/bower_components/AdminLTE/plugins/chartjs/areachart/jquery.jqChart.css" />
    <link rel="stylesheet" type="text/css" href="/bower_components/AdminLTE/plugins/chartjs/areachart/jquery.jqRangeSlider.css" />
    <link rel="stylesheet" type="text/css" href="/bower_components/AdminLTE/plugins/chartjs/areachart/jquery-ui-1.10.4.css" />  


  <link href="{{ asset("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}" rel="stylesheet" type="text/css" /> 
        
  <!-- Theme style -->
  <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
  <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset("/bower_components/AdminLTE/plugins/iCheck/all.css")}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/morris/morris.css">

  <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.css")}}">
      
  <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.css")}}" rel="stylesheet" type="text/css" />

  <link href="{{ asset("/css/style.css")}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset("/css/leadstyle.css")}}" rel="stylesheet" type="text/css" />



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
<body class="hold-transition skin-blue sidebar-mini">
  <div id="spark-app" class="wrapper">

    <!-- Display only if user is logged in -->
    @if (Auth::check())
    <!-- Top Navigation -->
        @include('nav.header')
    <!-- Sidebar Navigation -->
      @include('nav.sidebar')
    @endif
 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style=" min-height: 1200px !important">
   
    <!-- Content Header --> 
    @yield('content-header')

    <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>
    <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->

    @include('nav.footer')

  </div>
  <!-- ./wrapper -->
   <!-- Ignite UI Required Combined CSS Files -->
     

   <!--   <script src="{{ asset ("/bower_components/AdminLTE/plugins/chartjs/areachart/jquery-1.11.1.min.js")}}" type="text/javascript"></script>
    <script src="{{ asset ("bower_components/AdminLTE/plugins/chartjs/areachart/jquery.jqChart.min.js")}}" type="text/javascript"></script> -->
    
    <!-- JavaScript -->
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/chartjs/areachart/jquery.jqChart.min.js")}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset ("/bower_components/AdminLTE/plugins/chartjs/protovis.js")}}"></script>
    <script type="text/javascript" src="{{ asset ("/bower_components/AdminLTE/plugins/chartjs/flare.js")}}"></script>
   

       <script src="/bower_components/AdminLTE/plugins/chartjs/areachart/jquery.mousewheel.js" type="text/javascript"></script>
    <script src="/bower_components/AdminLTE/plugins/chartjs/areachart/jquery.jqRangeSlider.min.js" type="text/javascript"></script>
 
    <!-- JavaScript -->
    <script src="/js/sweetalert.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
    <!-- SlimScroll   -->
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
    <!-- FastClick -->
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/fastclick/fastclick.js") }}"></script>
    <!-- iCheck -->
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/iCheck/icheck.min.js") }}"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js") }}"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/chartjs/Chart.min.js") }}"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/chartjs/jquery.funnel.js") }}"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js") }}"></script>
    <!-- DataTables -->
    <script src="/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.js"></script>
    <!-- SlimScroll -->
    <script src="/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
    <!-- FLOT CHARTS -->
    <script src="/bower_components/AdminLTE/plugins//flot/jquery.flot.min.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="/bower_components/AdminLTE/plugins/flot/jquery.flot.resize.min.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="/bower_components/AdminLTE/plugins/flot/jquery.flot.pie.min.js"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="/bower_components/AdminLTE/plugins/flot/jquery.flot.categories.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="/bower_components/AdminLTE/plugins/morris/morris.min.js"></script>
    <script src="/js/widgets/widgets.js"></script>
    <script src="/js/widgets/datatable.js"></script>
     <!-- <script src="/js/widgets/barchart.js"></script>  -->
    {{-- <script src="/js/widgets/funnelchart.js"></script> --}}
    <script src="/js/widgets/jqchart.js"></script>
    <script src="/js/widgets/heatmap.js"></script>
    <script src="/js/widgets/heatmap_user.js"></script>   
  @yield('scripts')
</body>
</html>
