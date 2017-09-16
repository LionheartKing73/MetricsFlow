@extends('layouts.template')

@section('scripts')
      <script src="/js/sparkline.js"></script>
      <script src="/js/content/content1.js"></script>
@endsection

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Content Performance
        <small>Version 1.0a</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Content</li>
      </ol>
    </section>
@endsection

@section('content')
    <!-- Content Performance Header -->
    <div class="row" style="margin-bottom: 10px">
        <!-- Content Image -->
        <div class="col-md-3">
            <img style="display: block; margin: auto" height="450" width="400" src="/img/blogpage.png">
        </div>
        <!-- /.col -->

        <!-- Content Heatmap -->
        <div class="col-md-3">
            <img style="display: block; margin: auto" height="450" width="400" src="/img/blogpage-heat.png">
        </div>
        <!-- /.col -->

        <!-- Performance Breakdown -->
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row">

                        
                        <div class="col-md-3" height="450">
                          <span class="info-box-number text-green text-center" style="font-size: 72pt; margin: 20px">8.8</span>
                        </div>

                        <div class="col-md-4">
                            <span style="margin: 100px; font-size: 16pt">
                                <span class="info-box-text"><b>Blog Post</b></span>
                                <span class="info-box-more">Posted: <b>24/1/2017</b></span>
                                <span class="info-box-more">Leads Generated: <b>83</b></span>
                                <span class="info-box-more"><span class="text-green"><i class="fa fa-caret-up" style="margin:0 2px 0 0"></i> Trending Up</span></span>
                            </span>
                        </div>

                        <div class="col-md-5">
                            <table class="table no-margin">
                                <tbody style="font-size: 12pt">
                                    <tr>
                                        <td>Age</td>
                                        <td><span class="label label-success">High</span></td>
                                    </tr>
                                    <tr>
                                        <td>Lead Generation</td>
                                        <td><span class="label label-warning">Med</span></td>
                                    </tr>
                                    <tr>
                                        <td>Traffic</td>
                                        <td><span class="label label-danger">Low</span></td>
                                    </tr>
                                    <tr>
                                        <td>Engagement</td>
                                        <td><span class="label label-success">High</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <canvas id="performance-trend" height="93"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Engagement -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Engagement</h3>
                </div>
                <div class="box-content">

                    <div class="row" style="margin-left: 100px">
                        <div class="col-md-2 text-center">
                            <h3 class="box-title">Interacted</h3>
                            <span class="info-box-number" style="font-size: 30pt">2385</span>
                            <span class="info-box-more text-green" style="font-size: 16pt"><i class="fa fa-caret-up" style="margin:0 2px 0 0"></i> Trending Up</span>
                        </div>
                        <div class="col-md-1 text-center" style="margin-top: 30px">
                            <i class="fa fa-chevron-circle-right" style="font-size: 60pt; color: rgb(38, 65, 127)"></i>
                        </div>

                        <div class="col-md-2 text-center">
                            <h3 class="box-title">Engaged</h3>
                            <span class="info-box-number" style="font-size: 30pt">1340</span>
                            <span class="info-box-more text-green" style="font-size: 16pt"><i class="fa fa-caret-up" style="margin:0 2px 0 0"></i> Trending Up</span>
                        </div>
                        <div class="col-md-1 text-center" style="margin-top: 30px">
                            <i class="fa fa-chevron-circle-right" style="font-size: 60pt; color: rgb(38, 65, 127)"></i>
                        </div>

                        <div class="col-md-2 text-center">
                            <h3 class="box-title">Called To Action</h3>
                            <span class="info-box-number" style="font-size: 30pt">245</span>
                            <span class="info-box-more text-green" style="font-size: 16pt"><i class="fa fa-caret-up" style="margin:0 2px 0 0"></i> Trending Up</span>
                        </div>
                        <div class="col-md-1 text-center" style="margin-top: 30px">
                            <i class="fa fa-chevron-circle-right" style="font-size: 60pt; color: rgb(38, 65, 127)"></i>
                        </div>

                        <div class="col-md-2 text-center">
                            <h3 class="box-title">Converted</h3>
                            <span class="info-box-number" style="font-size: 30pt">83</span>
                            <span class="info-box-more text-green" style="font-size: 16pt"><i class="fa fa-caret-up" style="margin:0 2px 0 0"></i> Trending Up</span>
                        </div> 
                    </div>

                    <div class="row">
                            <img src="/img/bar-chart-funnel.png" width="1000" style="margin-left: 350px; margin-top: 20px"></img>                        
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="box-header text-center" style="margin-top: 15px">Top Conversion Path</h3>
                            <img src="/img/conversion-path.png" height="80" width="550">
                        </div>

                        <div class="col-md-2">
                            <h2 class="box-header" style="margin-top: 15px">Avg. Path Time:</h3>
                        </div>

                        <div class="col-md-2 text-center" style="color: rgb(38, 65, 127)">
                            <span class="info-box-number" style="font-size: 60pt;">17.3</span>
                            <span class="info-box-text" style="font-size: 16pt"><b>Days</b></span>
                        </div>

                        <div class="col-md-2">
                            <h2 class="box-header" style="margin-top: 15px; margin-left: 10px">Avg. Path Length:</h3>
                        </div>
                        <div class="col-md-2 text-center" style="color: rgb(38, 65, 127)">
                            <span class="info-box-number text-center" style="font-size: 60pt">6.3</span>
                            <span class="info-box-text" style="font-size: 16pt"><b>Interactions</b></span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lead Generation -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Lead Generation</h3>
                </div>
                <div class="box-content">
                    <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>Lead ID</th>
                                        <th>Status</th>
                                        <th>Most Recent Action</th>
                                        <th>Most Recent Channel</th>
                                        <th>Origin Channel</th>
                                        <th>First Seen</th>
                                        <th>Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">L9842</a></td>
                                        <td><span class="label label-success">Conversion</span></td>
                                        <td>Converted</td>
                                        <td>Facebook</td>
                                        <td>Facebook</td>
                                        <td>November 7, 2016</td>
                                        <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">40,0,70,50,0,83,100</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">L1848</a></td>
                                        <td><span class="label label-warning">Engaged</span></td>
                                        <td>Return Without Conversion</td>
                                        <td>Direct</td>
                                        <td>Google Search</td>
                                        <td>December 13, 2016</td>
                                        <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">0,0,0,10,0,0,20</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">L7429</a></td>
                                        <td><span class="label label-danger">Bounced</span></td>
                                        <td>First Visit</td>
                                        <td>Facebook</td>
                                        <td>Facebook</td>
                                        <td>January 24, 2017</td>
                                        <td>
                                        <div class="sparkbar" data-color="#f56954" data-height="20">0,0,0,0,0,0,10</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">L9229</a></td>
                                        <td><span class="label label-info">Called to Action</span></td>
                                        <td>Visited Conversion Page</td>
                                        <td>Direct</td>
                                        <td>Referral</td>
                                        <td>December 15, 2016</td>
                                        <td>
                                        <div class="sparkbar" data-color="#00c0ef" data-height="20">10,20,0,0,60,0,80</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">L5287</a></td>    
                                        <td><span class="label label-success">Conversion</span></td>
                                        <td>Converted</td>
                                        <td>Facebook</td>
                                        <td>LinkedIn</td>
                                        <td>October 27, 2016</td>
                                        <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">30,60,0,70,60, 0,100</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">L7310</a></td>
                                        <td><span class="label label-warning">Engaged</span></td>
                                        <td>Return Without Conversion</td>
                                        <td>Google Search</td>
                                        <td>Facebook</td>
                                        <td>January 4, 2017</td>
                                        <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,0,90,70,0,83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">L4862</a></td>
                                        <td><span class="label label-success">Conversion</span></td>
                                        <td>Converted</td>
                                        <td>Direct</td>
                                        <td>Google Search</td>
                                        <td>November 30, 2016</td>
                                        <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">10,50,30,0,61,80,100</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <!-- /.row -->

    <!-- Traffic -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Traffic</h3>
                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="http://www.isev.co.uk/wp-content/uploads/2016/02/fancy-pie-chart-google-analytics.png">
                        </div>
                        <div class="col-md-8">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <a href="#"><th>Channel</th></a>
                                        <th>Traffic Driven</th>
                                        <th>First Clicked Conversions</th>
                                        <th>Assisted Conversions</th>
                                        <th>Closed Conversions</th>                                        
                                        <th>Assisted/Closed Ratio</th>
                                        <th>First/Closed Ratio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">Social Network</a></td>
                                        <td>1013</td>
                                        <td>37</td>
                                        <td>40</td>
                                        <td>5</td>
                                        <td>8.00</td>
                                        <td>7.40</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Organic Search</a></td>
                                        <td>350</td>
                                        <td>18</td>
                                        <td>70</td>
                                        <td>38</td>
                                        <td>1.84</td>
                                        <td>0.61</td>

                                    </tr>
                                    <tr>
                                        <td><a href="#">Direct</a></td>
                                        <td>16</td>
                                        <td>2</td>
                                        <td>65</td>
                                        <td>28</td>
                                        <td>2.32</td>
                                        <td>0.07</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Referral</a></td>
                                        <td>622</td>
                                        <td>20</td>
                                        <td>32</td>
                                        <td>7</td>
                                        <td>4.57</td>
                                        <td>2.86</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Paid Search</a></td>    
                                        <td>384</td>
                                        <td>3</td>
                                        <td>15</td>
                                        <td>2</td>
                                        <td>7.50</td>
                                        <td>1.50</td>
                                </tbody>
                            </table>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<canvas id="pie" class="hide"></canvas>
@endsection