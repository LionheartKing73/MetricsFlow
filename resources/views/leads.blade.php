@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="col-md-12 col-sm-12 col-xs-12 logo">
        <img src="{{$logo->logo}}" alt="logo" style="width:380px;height: 100px ">
      </div>
    </section>
@endsection

@section('content')

<style type="text/css">
  .playout{
    height:100%;font-size: 16px;display: flex ;align-items: flex-end;
    float: none;border-bottom: 1px dashed black;
  }
  @media screen and (max-width: 1300px)
  {
  .playout{
    font-size: 12px;
  }
  @media screen and (max-width: 1000px)
  {
  .playout{
    display: none;
  }
}

</style>

<section id="topContents">
  <section>
  <h1 id="paddingbottom">Top Content</h1>
  <div style="float: right;  padding-bottom: 10px;">
    <select id="seldays" style="border: none;" onclick="selectDates();">
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

<section id="content">
  <div class="col-md-12">
  <?php $c=0; ?>
  @foreach($lead_detail as $lead)
   <?php $c=$c+1; ?> 
    <div class="col-md-4">
      <div class="box">
        <a href="/content?name={{$lead ->PageName}}"><div class="box-header with-border">
          <h3 class="box-title">{{ $lead->PageName}}</h3>              
        </div></a> 
        <div class="box-body">
          <div class="thumbnail_image">         
             <a href="/content?name={{$lead ->PageName}}">
                <div id="screenshot" style="display:inline-block;width: 90%;height: 500px;padding-bottom: 20px">
                     
                    <iframe sandbox="allow-pointer-lock" scrolling="no" src='{{$lead->PageURL}}' style="width: 100%;height: 95% ;border 1px solid gray">
                
                    </iframe> 
                 </div>
             </a>
          <!--   </div> -->
          </div>
          <div class="col-md-4 left">
            <h1 class="green"><strong>{{ number_format($lead->score, 1, '.', '')}}</strong></h1>
          </div>  
          <div class="col-md-8 content_1">
            <h4>Leads Generated : <strong>{{$lead->Value}}</strong></h4>
          </div>            
        </div>
      </div>
    </div>
  @endforeach
  </div>
</section>
</section>

<section>
  <section>
    <h1 id="paddingbottom">
      Lead Channel
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
  @foreach($channels as $chan)
    <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
             <h3 class="box-title">{{ ucfirst($chan->domainname)}}</h3>             
        </div>
        <div class="box-body">         
          <h3 class="boxtitle"> </h3>
          <div class="align col-md-12 col-sm-12">
            <i class="fa fa-arrow-up fa-3x green icon"></i>
            <h1 class="metrics"><strong>{{ round($chan->Value / $chan_sum * 100)}} %</strong></h1>
          </div>  
          <div class="col-md-12 col-sm-12 col-xs-12 content_1">
            <h4>Conversion Rate : <strong>{{ round($chan->Value / $chan_sum * 100)}} %</strong></h4>
            <h4>Leads Generated : <strong>{{ $chan->Value}}</strong></h4>
            <h4>Lead Conversions : <strong>{{ $chan->freq}}</strong></h4>
          </div>            
        </div>
      </div>
    </div>
    @endforeach
  </div>
 </section>
<section>
    <section>
      <h1 id="paddingbottom">
        Recent Leads
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              {{-- <li class="active"><a href="#tab_1" data-toggle="tab">Anonymous Leads that delete cookies</a></li> --}}
              <li class="active"><a href="#tab_1" data-toggle="tab">Total Leads in Awareness Stage</a></li>
              <li><a href="#tab_2" data-toggle="tab">Leads in Consideration Stage</a></li>
              <li><a href="#tab_3" data-toggle="tab">Leads in Deciding Stage</a></li>
              <li><a href="#tab_4" data-toggle="tab">Leads Converted</a></li>
              {{-- <li><a href="#tab_5" data-toggle="tab">Leads Converted with Cookies Blocker</a></li> --}}
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box">
                  <div class="box-body">
                    <table id="example3" class="table table-hover">
                      <thead>
                      <tr id="tablehead">
                        <th >User ID</th>
                        <th id="th_last">Last Seen</th>
                        <th id="th_last">Channel</th>
                        <th >Latest Content</th>
                        <th >Cookie Blocker</th>
                        <th >Lead Converted</th>
                        <th >Lead Status</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($sessions as $session) 
                      <?php $id = str_split($session->e_id, 8);
                      ?>              
                      <tr>
 
                        <td><a href="/detail?id={{ltrim($session->e_id, " ") }}">{{$id[1] }}<a></td>
                        <td>{{ date("d-m-Y", strtotime($session->Date)) }}</td>  
                        <td>{{ ucfirst($session->domainname)}}</td>         
                        <td><a href="/content?name={{ltrim($session->PageName, " ") }}"> {{ ltrim($session->PageName, " ") }}</a></td>                           
                      

                        @if($session -> has_cookies == 1)
                        <td>
                          Yes
                        </td>
                        @elseif( $session -> has_cookies == 0 || $session -> has_cookies == 'N/A')
                        <td>
                          No
                        </td>
                        @endif
                        @if($session -> conversion == 1)
                        <td>Converted</td>
                        @elseif($session->conversion == 0 || $session->conversion == ' ')
                        <td>Not Converted</td>
                        @endif
                        <td>{{ $session->Status}}</td> 
                        <td><i class="fa fa-info-circle red"></i></td>                   
                      </tr>
                      @endforeach
                     </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab_2">
                <div class="box">
                  <div class="box-body">
                    <table id="example4" class="table table-hover">
                      <thead>
                      <tr id="tablehead">
                        <th >User ID</th>
                        <th id="th_last">Last Seen</th>
                        <th id="th_last">Channel</th>
                        <th >Latest Content</th>
                        <th >Cookie Blocker</th>
                        <th >Lead Status</th>
                        <th >Lead Stage</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($consideration as $cons) 
                      <?php $id = str_split($cons->e_id, 8); ?>              
                      <tr>
                        <td><a href="/detail?id={{ ltrim($cons->e_id, " ") }}"> {{$id[1]}}<a></td>
                        <td>{{ date("d-m-Y", strtotime('+1 month', strtotime($cons->Date))) }}</td>             
                        <td>{{ ucfirst($cons->domainname)}}</td>
                        <td><a href="/content?name={{ $cons->PageName}}" target="_blank"> {{ ltrim($cons->PageName, " ") }}</a></td>
                        @if($cons ->has_cookies == 1)
                        <td>
                          Yes
                        </td>
                        @elseif( $cons ->has_cookies == 0 || $cons ->has_cookies == 'N/A')
                        <td>
                          No
                        </td>
                        @endif
                        <td>{{ $cons->Status}}</td>
                        <td>{{ $cons->Stage}}</td>
                        <td><i class="fa fa-search-plus blue"></td>
                      </tr>
                      @endforeach
                     </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab_3">
                <div class="box">
                  <div class="box-body">
                    <table id="example6" class="table table-hover">
                      <thead>
                      <tr id="tablehead">
                        <th >User ID</th>
                        <th id="th_last">Last Seen</th>
                        <th id="th_last">Channel</th>
                        <th >Latest Content</th>
                        <th >Cookie Blocker</th>
                        <th >Lead Status</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($deciding as $decide) 
                      <?php $id = str_split($decide->e_id, 8); ?>              
                      <tr>
                        <td><a href="/detail?id={{ ltrim($decide->e_id, " ") }}"> {{$id[1]}}<a></td>
                        <td>{{ date("d-m-Y", strtotime('+1 month', strtotime($decide->Date))) }}</td>             
                        <td>{{ ucfirst($decide->domainname)}}</td>
                        <td><a href="/content?name={{ $decide->PageName}}" target="_blank"> {{ ltrim($decide->PageName, " ") }}</a></td>
                        @if($decide ->has_cookies == 1)
                        <td>
                          Yes
                        </td>
                        @elseif( $decide ->has_cookies == 0 || $decide ->has_cookies == 'N/A')
                        <td>
                          No
                        </td>
                        @endif
                        <td>{{ $decide->Stage}}</td>
                        <td><i class="fa fa-question-circle orange"></i></td> 
                      </tr>
                      @endforeach
                     </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab_4">
                <div class="box">
                  <div class="box-body">
                    <table id="example5" class="table table-hover">
                      <thead>
                      <tr id="tablehead">
                        <th >User ID</th>
                        <th id="th_last">Last Seen</th>
                        <th id="th_last">Channel</th>
                        <th >Latest Content</th>                        
                        <th >Cookie Blocker</th>
                        <th>Email</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($converted as $conv) 
                      <?php $id = str_split($conv->e_id, 8); ?>              
                      <tr>
                        <td><a href="/detail?id={{ ltrim($conv->e_id, " ") }}"> {{$id[1]}}<a></td>
                        <td>{{ date("d-m-Y", strtotime('+1 month', strtotime($conv->Date))) }}</td>             
                        <td>{{ ucfirst($conv->domainname)}}</td>
                        <td><a href="/content?name={{ $conv->PageName}}" target="_blank"> {{ ltrim($conv->PageName, " ") }}</a></td>
                        @if($conv -> has_cookies == 1)
                        <td>
                          Yes
                        </td>
                        @elseif( $conv -> has_cookies == 0 || $conv -> has_cookies == 'N/A')
                        <td>
                          No
                        </td>
                        @endif
                        <td>{{ $conv->email }}</td>
                        <td><i class="fa fa-check-circle green"></i></td>
                      </tr>
                      @endforeach
                     </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    </section>
</section>
<section>

<section>
    <h1>
      Lead Funnel
    </h1>
  </section>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5" id="funnel_left">
      <h3>Overall Anonymous Leads</h3>
      <div class="row" >
         
        <div class="col-md-4" id="total">
          <p class="playout">Total Anonymous Sessions</p> 
          <p class="playout"> Total Anonymous Leads</p> 
          <p class="playout">Leads Revealed</p>
        </div>
        <div class="col-md-6" >
          <div id="funnel-container1" class="funnels">
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-5" id="funnel_left">
      <h3>Anonymous Leads that Delete Cookies</h3>
      <div class="row" >         
        <div class="col-md-4" id="total">
           <p class="playout">Total Anonymous Sessions</p> 
          <p class="playout"> Total Anonymous Leads</p> 
          <p class="playout">Leads Revealed</p>
        </div>
        <div class="col-md-6" >
          <div  id="funnel-container2" class="funnels">
          </div>
        </div>
        <div class="col-md-2">
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <section>
    <h1 id="paddingbottom">
      Cookies Breakdown
    </h1>
  </section>
  <section>
    <div class="col-md-8">
       <div class="box box-primary">
        <div class="box-body"> 
          <div id="bar-chart"></div>
          <div id="labels">
            <div class="col-md-12">
              <div class="float">
                <i class="fa fa-stop fa-2x red" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h5>Total Visitors</h5>
              </div>
            </div>
            <div class="col-md-12">
              <div class="float">
                <i class="fa fa-stop fa-2x labelbox" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h5 style="font-size: 16px !important;">Unique Leads</h5>
              </div>
            </div>
          </div>
        </div>
            <!-- /.box-body-->
      </div> 
    </div>
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-body">
          <div id="donut-chart"></div>
          <div class="col-md-9" id="labels" style="margin-top: 30px;">
            <div class="col-md-12">
              <div class="float">
                <i class="fa fa-stop fa-2x labelbox" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h5>Leads Without Cookie Blockers </h5>
              </div>
            </div>
            <div class="col-md-12">
              <div class="float">
                <i class="fa fa-stop fa-2x red" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h5>Leads that Block Cookies</h5>
              </div>
            </div>
            <div class="col-md-12">
              <div class="float">
                <i class="fa fa-stop fa-2x blue" aria-hidden="true"></i> 
              </div>
              <div class="labeltext">
                <h5>Leads that Delete Cookies</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
<?php $count = $anonymous_leads; ?>
<?php $cookies = $total_cookies->cookies; ?>
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<!-- FLOT CHARTS -->
<script src="/bower_components/AdminLTE/plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="/bower_components/AdminLTE/plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="/bower_components/AdminLTE/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="{{ asset ("/bower_components/AdminLTE/plugins/chartjs/jquery.funnel.js") }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/bower_components/AdminLTE/plugins/morris/morris.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/en-ie.js"></script>

<script>

      var donutData = [
      {label: " " , data: <?php echo $green_lead; ?>, color: "#23cc69"},
      {label: " ", data: <?php echo $red_lead; ?>, color: "#eb264d"},
      {label: " ", data: <?php echo $blue_lead; ?>, color: "#3480c2"} //#eb264d
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
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });
    /*
     * END DONUT CHART
     */
     function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
        + label
        + "<br>"
        + series.percent.toFixed(2) + "%</div>";
       
  }
  </script>  
  <script type="text/javascript">

var funnelData1 = [

    {
        value: 5000,
        color:"#00a19c",
        label:"{{$anonymous_leads}}"

    },
    {
        value: 4800,
        color: "#ffc000",
        label:"{{$total_cookies->cookies}}"
    },
    {
        value: 4100,
        color: "#54c051",
        label:"{{$deleted_cookies->deletedcookies}}"
    },
    {
        value: 3800,
        color: "#353e4b",
        label:""
    } 
  ];
var funnelData2 = [

     {
        value: 5000,
        color:"#00a19c",
        label:"{{$anonymous_leads_delcookie->count}}"

    },
    {
        value: 4800,
        color: "#ffc000",
        label:"{{$total_cookies_delcookie->cookies}}"
    },
    {
        value: 4100,
        color: "#54c051",
        label:"{{$deleted_cookies_delcookie->deletedcookies}}"
    },
    {
        value: 3800,
        color: "#353e4b",
        label:""
    } 
  ];


$( window ).load(function() {   
$('#funnel-container1').drawFunnel(funnelData1, {

  width: $(this).width()*.2,
  height: $(this).height()*.25,
 
  // Padding between segments, in pixels
  padding: 1,
  half: false, 
  minSegmentSize: 0, 
 // label: function () { return ['28','2343','324','323'];}  
 
});
$('#funnel-container2').drawFunnel(funnelData2, {

  width: $(this).width()*.2,
  height: $(this).height()*.25, 
 
  // Padding between segments, in pixels
  padding: 1,
  half: false, 
  minSegmentSize: 0, 
  
 
});
fun_height=Math.round(parseInt($('.funnels').css('height'))/4.3);
  $('.playout').css('height',fun_height+'px');
});
  
$(window).resize(function(){

  $('#funnel-container1').empty();
  $('#funnel-container2').empty();
  $('#funnel-container1').drawFunnel(funnelData1, {

  width: $(this).width()*.2,
  height: $(this).height()*.25, 
 
  // Padding between segments, in pixels
  padding: 1,
  half: false, 
  minSegmentSize: 0, 
 // label: function () { return ['28','2343','324','323'];}  
 
});
  $('#funnel-container2').drawFunnel(funnelData2, {

  width: $(this).width()*.2,
  height: $(this).height()*.25, 
 
  // Padding between segments, in pixels
  padding: 1,
  half: false, 
  minSegmentSize: 0, 
  
 
}); 
  fun_height=Math.round(parseInt($('.funnels').css('height'))/4.3);
  $('.playout').css('height',fun_height+'px');
});
 


  </script> 

  <script type="text/javascript">
  var indy=7;
  selectDates();
  function selectDates(){
    var dys=parseInt(($('#seldays').val()).substring(5,7));
    if (indy==7) {dys=7;indy=0;}
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yy = today.getFullYear();
    dd=dd-dys;
    var dm=[31,28,31,30,31,30,31,31,30,31,30,31];

    if (dd<1){
      mm--;
      dd=dm[mm-1]+dd;
    }
    if (dd<1){
      mm--;
      dd=dm[mm-1]+dd;
    }

    var lastdate=yy+"-";
    if (mm<10) lastdate+="0"+mm; else lastdate+=mm;
    if (dd<10) lastdate+="-0"+dd; else lastdate+="-"+dd;
      
     
     
    $.ajax({
         method: "POST",
         url: "/leads_filtertopcontent",
         data: { filterdate: lastdate},

         })
        .done(function( msg ) {
            var topContents=JSON.parse(msg);
            $( "#content" ).remove();
             

           var child_sec='<section id="content"> <div class="col-md-12">';
           for (i=0;i<=2;i++){ 
            child_sec+='<div class="col-md-4"><div class="box"><div class="box-header with-border"><h3 class="box-title">'+topContents[i].PageName+'</h3></div><div class="box-body"><div class="thumbnail_image"><a href="/content?name='+ topContents[i].PageName+'"><div id="screenshot" style="display:inline-block;width: 90%;height: 500px;padding-bottom: 20px"><iframe scrolling="no" src="'+topContents[i].PageURL+'" style="width: 100%;height: 100% ;border 1px solid gray"> </iframe></div></a> </div><div class="col-md-4 left">  <h1 class="green"><strong>'+topContents[i].avgscore.toFixed(1)+'</strong></h1></div><div class="col-md-8 content_1"><h4>Leads Generated : <strong> '+topContents[i].sum+'</strong></h4></div></div></div></div>';}
          child_sec+='</div></section>';
        $( "#topContents" ).append(child_sec);          
           
        });
  }
</script>
<script type="text/javascript">
var months = new Array(12);
months[0] = "January";
months[1] = "February";
months[2] = "March";
months[3] = "April";
months[4] = "May";
months[5] = "June";
months[6] = "July";
months[7] = "August";
months[8] = "September";
months[9] = "October";
months[10] = "November";
months[11] = "December";
  
var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,      
      data: [

      @foreach($barchart as $bc)
        {y: '{{ date("d-m-Y",strtotime("+1 month", strtotime($bc->Date)))}}', a: {{$bc->visitors}}, b: {{ $bc->count}}},
      @endforeach
      ],      
      barColors: ['#00a65a', '#e34b56'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Unique Leads', 'Total Visitors'],
      hideHover: 'auto',
      stacked: true,
      axes: true,
      grid: false,
      barSize: 20,
      barGap: 0.05,
      barSizeRatio: 1,
      resize: true,
      width: true,
      xLabelMargin: 10
     
    });
</script>
@endsection