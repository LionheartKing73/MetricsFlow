@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="col-md-12 col-sm-12 col-xs-12 logo">
        <a href="#"><h3><b></b>All Contents<br></h3></a>
        <img  src="{{$logo->logo}}" style="width: 200px;height: 50px">
      </div>
    </section>
@endsection

@section('content')
<div class="row"><p><br><br><br></p></div>
<section>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <h1>Current View</h1> 
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
      
      <div class="col-md-10">
        <div class="row" id="action_item_title" style="background-color: white;border: 1px solid #35395d;color:#35395d;">
          <div class="row"><p> </p></div>
          <div class="row" >
            <div class="col-md-4">
              <p>Date Range</p>
              <div class="form-group " style="margin-left: 40px;width: 70%;">
                <select class="form-control">
                    <option>Last 30 Days</option>
                    <option>Last 60 Days</option>
                    <option>Last 90 Days</option>
                    <option>Last 10 Days</option>
                    <option>Last 20 Days</option>
                </select>
              </div>
            </div>
          </div>
            
          <div class="row">
            <div class="col-md-4">
              <p>Campaigns</p>
              <input type="text" name="" placeholder="All Campaigns" style="padding-left:10px;margin-left: 40px;width: 70%;height: 35px">
            </div>
            <div class="col-md-4">
              <p>Channels</p>
              <input type="text" name="" placeholder="All Channels" style="padding-left:10px;margin-left: 40px;width: 70%;height: 35px">
            </div>
            <div class="col-md-4">
              <p>Content</p>
              <input type="text" name="" placeholder="All Content" style="padding-left:10px;margin-left: 40px;width: 62%;height: 35px">
            </div>
            
          </div>
          <div class="row"><p><br></p></div>
          
        </div>        
      </div>
    </div>
  </div>
</section>

<div class="row"><p><br></p></div>

<section>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <h1>Mounthly Conversion Report</h1>
    </div>  
  </div>
  <p style="font-size: 60px;margin-left: 30px;color: #2c699f"><b>8.6%</b></p>
  <div class="row">
    <div class="col-md-10">
      <div id="jqChart_report" style="margin-left:30px;width:98%; height: 60%;">

      </div>
  </div>
  
  
  <div class="row">
    <div class="col-md-10" style="margin-left: 40px;margin-top: 40px;">
      <div class="col-md-4">
          <div class="row" style="width: 90%;">
            <p style="font-size: 30px;background-color: #f5f7ff;padding-left: 20px">Lead Qualification</p>
           </div>
          <div class="row" style="width: 90%;">
             <div id="donut-chart" style="height: 270px;"></div>
          </div>
          <div class="row" style="width: 90%;">
             <div class="float">
                <i class="fa fa-stop fa-2x green" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h4><b>MCL's</b></h4>
              </div>
          </div>
          <div class="row" style="width: 90%;">
             <div class="float">
                <i class="fa fa-stop fa-2x blue" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h4><b>MQL's</b></h4>
              </div>
          </div>
          <div class="row" style="width: 90%;">
             <div class="float">
                <i class="fa fa-stop fa-2x red" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h4><b>SQL's</b></h4>
              </div>
          </div>
      </div>

      <div class="col-md-4">
        <div class="row" style="width: 90%;">
            <p style="font-size: 30px;background-color: #f5f7ff;padding-left: 20px">Source Breakdown</p>
           </div>
          <div class="row" style="width: 90%;">
             <div id="donut-chart1" style="height: 270px;"></div>
          </div>
          <div class="row" style="width: 90%;">
             <div class="float">
                <i class="fa fa-stop fa-2x blue" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h4><b>Organic Traffic</b></h4>
              </div>
          </div>
          <div class="row" style="width: 90%;">
             <div class="float">
                <i class="fa fa-stop fa-2x red" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h4><b>Referral Traffic </b></h4>
              </div>
          </div>
          <div class="row" style="width: 90%;">
             <div class="float">
                <i class="fa fa-stop fa-2x green" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h4><b>Direct URLs</b></h4>
              </div>
          </div>
      
      </div>
      <div class="col-md-4">
        <div class="row" style="width: 90%;">
            <p style="font-size: 30px;background-color: #f5f7ff;padding-left: 20px">Source Breakdown</p>
           </div>
          <div class="row" style="width: 90%;">
             <div id="jqChart_bar_report" style="height: 270px;"></div>
          </div>
          <div class="row" style="width: 90%;">
             <div class="float">
                <i class="fa fa-stop fa-2x blue" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h4><b>Total Visitors</b></h4>
              </div>
          </div>
          <div class="row" style="width: 90%;">
             <div class="float">
                <i class="fa fa-stop fa-2x red" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h4><b>Engaged </b></h4>
              </div>
          </div>
          <div class="row" style="width: 90%;">
             <div class="float">
                <i class="fa fa-stop fa-2x green" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h4><b>Called Action</b></h4>
              </div>
          </div>
          <div class="row" style="width: 90%;">
             <div class="float">
                <i class="fa fa-stop fa-2x green" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h4><b>Converted</b></h4>
              </div>
          </div>
      
      </div>


    </div>
  </div>


</section>  

<div class="row"><p><br></p></div>

<section>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <h2>Lead Progression</h2> 
    </div>
    <div class="col-md-10">
        <div style="float: right;  padding-bottom: 10px;">
            <select style="border: none;">
                <option>
                  <div style="font-size: 16px;">Last 7 days</div>
                </option>
                <option>
                  Last 14 days
                </option>
                <option>
                  Last 21 days
                </option>
                <option>
                  Last 28 days
                </option>
                <option>
                  Last 35 days
                </option>
            </select>
        </div>
    </div>

    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
      <div class="col-md-10">
        <div class="row" id="action_item_title" style="background-color: #f5f7ff">
          <div class="col-lg-10">
            <div style="padding-top: 5px;padding-bottom: 5px;">
             <span style="font-size: 23px;margin-left: 10px;color:black;" ></span>
            </div>    
          </div>
          <div class="col-lg-2">
            <div style="float: right;padding-top: 4px;"> 
              <input type="button" value="View Details" style="background-color:#ababab;color: black;margin-right: 8px; border: 1px solid  #dddddd;border-radius: 3px" />      
              
            </div>
          </div>
        </div>
        <div class="row" id="action_item_content" >
          <div class="col-md-12">
            
            <div class="col-md-3">
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <img class="img-responsive" src="/img/cluster1.png" style="text-align: center;"> 

                  </div>
              </div>
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <p style="font-size: 40px;text-align: center;">80%</p>
                  <p style="font-size: 30px;text-align: center;">Aware</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <img class="img-responsive" src="/img/cluster2.png" style="text-align: center;"> 
                    
                  </div>
              </div>
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <p style="font-size: 40px;text-align: center;">9%</p>
                  <p style="font-size: 30px;text-align: center;">Considering</p>
                </div>
              </div>

            </div>
            <div class="col-md-3">
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <img class="img-responsive" src="/img/cluster3.png" style="text-align: center;"> 
                    
                  </div>
              </div>
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <p style="font-size: 40px;text-align: center;">7%</p>
                  <p style="font-size: 30px;text-align: center;">Deciding</p>
                </div>
              </div>

            </div>
            <div class="col-md-3">
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <img class="img-responsive" src="/img/cluster4.png" style="text-align: center;"> 
                    
                  </div>
              </div>
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <p style="font-size: 40px;text-align: center;">4%</p>
                  <p style="font-size: 30px;text-align: center;">Converted</p>
                </div>
              </div>

            </div>

          

          </div>

        </div>
        
      </div>
    </div>
  </div>
</section>

<div class="row"><p><br></p></div>

<section>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <h2>Visitors Report</h2> 
    </div>
    <div class="col-md-10" style="margin-left: 40px">
      <img src="img/world.png" class="img-responsive" style="width: 100%">
    </div>
    <div class="col-md-10" style="margin-left:150px;margin-top: -50.5%;font-size: 100px">
      <p><b>8%</b></p>
      <div  style="font-size: 20px;float: left;margin-left: 150px;margin-top: -8%">
        <b><p>Visits: 48,390</p>
        <p>Refferals: 15,678</p>
        <p>Organic: 32,712</p></b>

      </div>
    </div>

  </div>
</section>
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<script type="text/javascript">
 $( window ).load(function() {
  var donutData = [
      {label: '' , data: 500, color: "#23cc69"},
      {label: " ", data: 750, color: "#3480c2"},
       {label: " ", data: 1100, color: "#eb264d"}
    ];
    $.plot("#donut-chart", donutData, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2 / 3,
            formatter: 1,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });
    


   
  });
  $( document ).ready(function() {
    var donutData1 = [
      {label: '' , data: 300, color: "#23cc69"},
      {label: " ", data: 1200, color: "#3480c2"},
       {label: " ", data: 600, color: "#eb264d"}
    ];
    $.plot("#donut-chart1", donutData1, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2 / 3,
            formatter: 1,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });
  });
</script>



@endsection