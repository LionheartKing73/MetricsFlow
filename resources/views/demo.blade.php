@extends('layouts.template')

@section('scripts')
  <script src="{{ asset ("/bower_components/AdminLTE/dist/js/pages/dashboard2.js") }}"></script>
  <script src="/js/sparkline.js"></script>
@endsection

@section('content-header')
 <!-- Content Header (Page header) -->
  <section>
      <div class="col-md-12 col-sm-12 col-xs-12 logo">
        <h2><b><</b>All Accounts<br></h2>
        <img  src="{{$logo->logo}}" style="width: 200px;height: 50px">
      </div>
    </section>
@endsection

@section('content')
<div class="row"><p><br><br></p></div>

<section>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <h2>Action Items</h2> 
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
      <div class="col-md-10">
        <div class="row" id="action_item_title" style="background-color: #327aba">
          <div class="col-lg-10">
            <div style="padding-top: 5px;padding-bottom: 5px;">
              <img src="/img/heart1.png" style="width: 30px;height: 30px;margin-top: -8px"><span style="font-size: 23px;margin-left: 10px;" >New Load Converted!</span>
            </div>    
          </div>
          <div class="col-lg-2">
            <div style="float: right;padding-top: 4px;"> 
              <input type="button" value="View Details" style="color: black;margin-right: 8px; border: 1px solid  #dddddd;border-radius: 3px" />      
              <span style="font-size: 20px"><b>X</b></span>
            </div>
          </div>
        </div>
        <div class="row" id="action_item_content">
          <div class="col-md-12">
            <div>
              <p></p>
              <span>Date Converted: <b> April 7, 2017</b> </span>
              <span>Campaign: <b> Campaign 02</b> </span>
              <span>Engagement: <b> HIGH </b></span>
              <span>Total Sessions: <b> 26 </b></span>
              <p></p>
            </div>    
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row"><p><br><br><br></p></div>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
      <div class="col-md-10">
        <div class="row" id="action_item_title" style="background-color: #e70047">
          <div class="col-lg-10">
            <div style="padding-top: 5px;padding-bottom: 5px;">
              <img src="/img/heart2.png" style="width: 30px;height: 30px;margin-top: -8px"><span style="font-size: 23px;margin-left: 10px;" >404 Error Detected in Campaign 03!</span>
            </div>    
          </div>
          <div class="col-lg-2">
            <div style="float: right;padding-top: 4px;"> 
                  
              <span style="font-size: 20px"><b>X</b></span>
            </div>
          </div>
        </div>
        <div class="row" id="action_item_content">
          <div class="col-md-12">
            <div>
              <p></p>
              <span>Date Detected: <b> April 7, 2017</b> </span>
              <span>Unquipe Visitors Affected: <b> 124 </b> </span>
              <span>Total Sessions Affected: <b> 178 </b></span>
              <p><span>URL: <b> http://www.companyname.com/b/sales/marketing/sales/marketing_content/landingpage_09123431.html </b></span></p>
              <p></p>
            </div>    
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row"><p><br><br><br></p></div>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
      <div class="col-md-10">
        <div class="row" id="action_item_title" style="background-color: #e70047">
          <div class="col-lg-10">
            <div style="padding-top: 5px;padding-bottom: 5px;">
              <img src="/img/heart2.png" style="width: 30px;height: 30px;margin-top: -8px"><span style="font-size: 23px;margin-left: 10px;" >82% Bounce rate in Campaign 07!</span>
            </div>    
          </div>
          <div class="col-lg-2">
            <div style="float: right;padding-top: 4px;"> 
                  
              <span style="font-size: 20px"><b>X</b></span>
            </div>
          </div>
        </div>
        <div class="row" id="action_item_content">
          <div class="col-md-12">
            <div>
              <p></p>
              <span>Date Detected: <b> April 5, 2017</b> </span>
              <span>Unquipe Visitors Affected: <b> 2,124 </b> </span>
              <span>Total Sessions Affected: <b> 545 </b></span>
              <p><span>URL: <b> http://www.companyname.com/b/sales/marketing_content/landingpage_09123431.html </b></span></p>
              <p></p>
            </div>    
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="row"><p><br><br></p></div>

<section>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <h2>Live Leads</h2> 
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
      <div class="col-md-10">
        <div class="row" id="action_item_title" style="background-color: #e5e1e1">
          <div class="col-lg-10">
            <div style="padding-top: 5px;padding-bottom: 5px;">
             <span style="font-size: 23px;margin-left: 10px;color:black;" >52 active leads through 3 campaigns</span>
            </div>    
          </div>
          <div class="col-lg-2">
            <div style="float: right;padding-top: 4px;"> 
              <input type="button" value="View now in real-time" style="background-color:#ababab;color: black;margin-right: 8px; border: 1px solid  #dddddd;border-radius: 3px" />      
              <span style="font-size: 20px;color: #2e2e2e"><b>X</b></span>
            </div>
          </div>
        </div>
        <div class="row" id="action_item_content">
          <div class="col-md-12">
            <div>
              <p></p>
              <h4 class="box-display">
                18 viewing page : <strong>People</strong>
              </h4> 
              <h4 class="box-display box-padding">
                8 watching video : <strong>How to save money</strong>
              </h4> 
              <h4 class="box-display box-padding">
                7 viewing page : <strong>Blog Post 12</strong>
              </h4> 
              <h4 class="box-display box-padding">
                6 viewing page : <strong>Request a Quote</strong>
              </h4> 
              <h4 class="box-display box-padding">
                5 viewing page : <strong>Communication</strong>
              </h4> 
              <br>
              <h4 class="box-display">
                4 viewing page : <strong>About</strong>
              </h4> 
              <h4 class="box-display box-padding">
                3 viewing page : <strong>Services</strong>
              </h4>                 
              <p></p>
            </div>    
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="row"><p><br><br></p></div>

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

  


























<!-- <section>
<div class="row">
  <section>
      <h1> 
        Live Leads
      </h1>
  </section>
  <div class="col-md-11">
    <div class="box">
        <div class="box-header with-border">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <h3 class="box-title">52 active leads through 3 campaigns</h3>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="box-tools pull-right">
               <button type="button" class="btn btn-default">View Now in real time</button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times fa-2x" style="padding-top: 5px;"></i></button>
              </div>
            </div>
        </div>
        <div class="box-body">
          <h5 class="box-display">
            18 viewing page : <strong>People</strong>
          </h5> 
          <h5 class="box-display box-padding">
            8 watching video : <strong>How to save money</strong>
          </h5> 
          <h5 class="box-display box-padding">
            7 viewing page : <strong>Blog Post 12</strong>
          </h5> 
          <h5 class="box-display box-padding">
            6 viewing page : <strong>Request a Quote</strong>
          </h5> 
          <h5 class="box-display box-padding">
            5 viewing page : <strong>Communication</strong>
          </h5> 
          <br>
          <h5 class="box-display">
            4 viewing page : <strong>About</strong>
          </h5> 
          <h5 class="box-display box-padding">
            3 viewing page : <strong>Services</strong>
          </h5>                 
      </div>
    </div>
  </div>
</div>
</section>


<div class="row">
  <section class="content-header" style="padding-bottom: 20px;">
      <h1>
        Lead Progression
      </h1>
      <div style="float: right">
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
            Last 30 days
          </option>
          <option>
            Last 60 days
          </option>
        </select>
      </div>
    </section>
  <div class="col-md-12">
    <div class="box lead-box">
      <div class="box-header">
        <div class="def-btn">
            <button type="button" class="btn btn-default">Close Details</button>
          </div>
      </div>
        <div class="box-body">          
          <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-5x circle-darkblue" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-darkblue padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-darkblue padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-darkblue padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-darkblue padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>              
            </div>
          </div>
          <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-5x circle-blue" id="icon"></i>
              <h5 id="icon_style">Landing Page : 180</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-blue padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-blue padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-blue padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-blue padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>              
            </div>
          </div>
          <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-5x circle-red" id="icon"></i>
              <h5 id="icon_style">Landing Page : 87</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-red padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-red padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-red padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-red padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>              
            </div>
          </div>
          <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-5x circle-green" id="icon"></i>
              <h5 id="icon_style">Landing Page : 87</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-green padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-green padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-green padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <i class="fa fa-circle fa-4x circle-green padding-left" id="icon"></i>
              <h5 id="icon_style">Facebook : 432</h5>              
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="margin-top: 40px;">
            <div class="col-md-3 col-sm-3">
              <h3 style="text-align: center;">80% <br> Aware</h3>
            </div>
            <div class="col-md-3 col-sm-3">
              <h3 style="text-align: center;">9% <br> Considering</h3>
            </div>
            <div class="col-md-3 col-sm-3">
              <h3 style="text-align: center;">7% <br> Deciding</h3>
            </div>
            <div class="col-md-3 col-sm-3">
              <h3 style="text-align: center;">4% <br> Converted</h3>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <section class="content-header">
      <h1 id="paddingbottom">
        Top Content
      </h1>
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
            Last 30 days
          </option>
          <option>
            Last 60 days
          </option>
        </select>
      </div>
    </section>
  <div class="col-md-12">
    <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">Landing Page 1</h3>                
        </div>
        <div class="box-body">
            <div class="thumbnail_image">         
              <img src="http://placehold.it/250x200">
            </div>
            <div class="col-md-4 left">
              <h1 class="green"><strong>9.2</strong></h1>
            </div>  
            <div class="col-md-8 content_1">
              <h4>Leads Generated : <strong>83</strong></h4>
              <h4>Posted : <strong>Mar 27, 2017</strong></h4>
            </div>            
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">Blog Post 8</h3>                
        </div>
        <div class="box-body">
            <div class="thumbnail_image">         
              <img src="http://placehold.it/250x200">
            </div>
            <div class="col-md-4 left">
              <h1 class="green"><strong>8.6</strong></h1>
            </div>  
            <div class="col-md-8 content_1">
              <h4>Leads Generated : <strong>57</strong></h4>
              <h4>Posted : <strong>Mar 15, 2017</strong></h4>
            </div>            
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">Video "How to Increase Sales"</h3>                
        </div>
         <div class="box-body">
            <div class="thumbnail_image">         
              <img src="http://placehold.it/250x200">
            </div>
            <div class="col-md-4 left">
              <h1 class="blue"><strong>7.9</strong></h1>
            </div>  
            <div class="col-md-8 content_1">
              <h4>Leads Generated : <strong>48</strong></h4>
              <h4>Posted : <strong>Mar 25, 2017</strong></h4>
            </div>            
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <section class="content-header">
      <h1 id="paddingbottom">
        Top Campaigns
      </h1>
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
            Last 30 days
          </option>
          <option>
            Last 60 days
          </option>
        </select>
      </div>
    </section>
  <div class="col-md-12">
    <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">Campaign 1</h3>                
        </div>
        <div class="box-body">         
              <div class="align col-md-12 col-xs-12 col-sm-12">
                <h1 class="metrics green top"><strong>8.9</strong></h1>
              </div>  
              <div class="col-md-12 content_1">
                <h4>Content Interactions : 1,263</h4>
                <h4>Content Engagements : <strong>730</strong></h4>
                <h4>Call to Action : <strong>230</strong></h4>
                <h4>Lead Conversions : <strong>78</strong></h4>
              </div>            
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">Campaign 12</h3>                
        </div>
        <div class="box-body"> 
              <div class="align col-md-12 col-xs-12 col-sm-12">
                <h1 class="metrics green"><strong>8.7</strong></h1>
              </div>  
              <div class="col-md-12 content_1">
                <h4>Content Interactions : 1,053</h4>
                <h4>Content Engagements : <strong>691</strong></h4>
                <h4>Call to Action : <strong>745</strong></h4>
                <h4>Lead Conversions : <strong>598</strong></h4>
              </div>            
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">Campaign 15</h3>                
        </div>
        <div class="box-body">         
              <div class="align col-md-12 col-xs-12 col-sm-12">
                <h1 class="metrics green"><strong>8.2</strong></h1>
              </div>  
              <div class="col-md-12 content_1">
                 <h4>Content Interactions : 987</h4>
                <h4>Content Engagements : <strong>587</strong></h4>
                <h4>Call to Action : <strong>556</strong></h4>
                <h4>Lead Conversions : <strong>376</strong></h4>
              </div>            
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <section class="content-header">
      <h1 id="paddingbottom">
        Top Channels
      </h1>
      <div style="float: right; padding-bottom: 10px;">
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
            Last 30 days
          </option>
          <option>
            Last 60 days
          </option>
        </select>
      </div>
    </section>
  <div class="col-md-12">
    <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">Facebook</h3>                
        </div>
        <div class="box-body">         
              <h3 class="boxtitle">Change in Users</h3>
              <div class="align col-md-12 col-sm-12">
                <i class="fa fa-arrow-up fa-3x green icon"></i>
                <h1 class="metrics"><strong>15%</strong></h1>
              </div>  
              <div class="col-md-12 col-sm-12 col-xs-12 content_1">
                <h4>Conversion Rate : <strong>12%</strong></h4>
                <h4>Leads Generated : <strong>12,135</strong></h4>
                <h4>Lead Conversions : <strong>1,481</strong></h4>
              </div>            
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">Facebook</h3>                
        </div>
        <div class="box-body">         
              <h3 class="boxtitle">Change in Users</h3>
              <div class="align col-md-12 col-xs-12 col-sm-12">
                <i class="fa fa-arrow-up fa-3x green icon"></i>
                <h1 class="metrics"><strong>12%</strong></h1>
              </div>  
              <div class="col-md-12 col-sm-12 col-xs-12 content_1">
                <h4>Conversion Rate : <strong>10%</strong></h4>
                <h4>Leads Generated : <strong>7,232</strong></h4>
                <h4>Lead Conversions : <strong>723</strong></h4>
              </div>            
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
                <h3 class="box-title">Facebook</h3>                
        </div>
        <div class="box-body">         
              <h3 class="boxtitle">Change in Users</h3>
              <div class="align col-md-12 col-xs-12 col-sm-12">
                <i class="fa fa-arrow-up fa-3x green icon"></i>
                <h1 class="metrics"><strong>8%</strong></h1>
              </div>  
              <div class="col-md-12 col-sm-12 col-xs-12 content_1">
                <h4>Conversion Rate : <strong>5%</strong></h4>
                <h4>Leads Generated : <strong>16,345</strong></h4>
                <h4>Lead Conversions : <strong>817</strong></h4>
              </div>            
        </div>
      </div>
    </div>
  </div>
</div> -->
@endsection