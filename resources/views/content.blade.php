@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->

    <section class="content-header">
      <div class="col-md-12 col-sm-12 col-xs-12 logo">
        <a href="/leads"><h3><b><</b>Content<br></h3></a>
        <img  src="{{$logo->logo}}" style="width: 200px;height: 50px">
      </div>
    </section>
@endsection

@section('content')
 
@foreach ($currentpage as $page)
<section>
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<h1 id="paddingbottom"><b>{{$page->PageName}}</b></h1>
			<h4 style="margin-top: -20px;padding-top: 0px">Posted: <b>{{$page->Date}}</b></h4>
		</div>
	</div>
</section>	


<section>
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<h2>Action Items</h2>	
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
			<div class="col-md-10">
				<div class="row" id="action_item_title">
					<div class="col-lg-11">
						<div>
							<p>Try differnt call to action</p>
						</div>		
					</div>
					<div class="col-lg-1">			
						<p><b>X</b></p>
					</div>
				</div>
				<div class="row" id="action_item_content">
					<div class="col-md-12">
						<div>
							<p></p>
							<span>Current CTA: <b> Click here for your trial</b> </span>
							<span>Target Click Rate: <b> 25%</b> </span>
							<span>Actual Click Rate: <b> {{round((($page->clickcount)/($content_value)*100))}} %</b></span>
							<p></p>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endforeach



<section>
 	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<h2>Performance</h2>
			<div class="col-md-10">
				<div style="float: right;  padding-bottom: 10px;">
    				<select id="seldays" style="border: none;" onchange="selectDays();">
      					<option>
        					<div style="font-size: 16px;">Last 28 days</div>
      					</option>
      					<option>
        					Last 07 days
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
    				</select>
  				</div>
  			</div>
  		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<div id="jqChart" style="margin-left:30px;width:98%; height: 60%;">
		</div>

	</div>
</section>	

<section>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <h2>Engagement</h2> 
    </div>
   

    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
      <div class="col-md-10">
        
        <div class="row" id="action_item_content" >
          <div class="col-md-12">
            
           

            <div class="col-md-4">
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6" align="center">
                    <!-- <img class="img-responsive" src="/img/cluster2.png" style="text-align: center;">  -->
                    <div id="bubble1" style="height: 200px;overflow: none;">

                    </div>
                    
                  </div>
              </div>
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <p style="font-size: 40px;text-align: center;">{{round($Aware)}}%</p>
                  <p style="font-size: 30px;text-align: center;">Aware</p>
                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6" align="center">
                    <div id="bubble2" style="height: 200px">

                    </div>
                    
                  </div>
              </div>
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <p style="font-size: 40px;text-align: center;">{{round($Engage)}}%</p>
                  <p style="font-size: 30px;text-align: center;">Engagement</p>
                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6" align="center">
                    <div id="bubble3"  style="height: 200px;margin:auto;">

                    </div>
                    
                  </div>
              </div>
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <p style="font-size: 40px;text-align: center;">{{round($Converted)}}%</p>
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


<section>
   
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<h2>Top Entry Points</h2>
			<div class="col-md-10">
				<!-- <div style="float: right;  padding-bottom: 10px;">
    				<select style="border: none;">
      					<option>
        					<div style="font-size: 16px;">Last 7 days</div>
      					</option>
      					<option>
        					Last 7 days
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
    				</select>
  				</div> -->
  			</div>
  		</div>
	</div>
	<div class="row" style="margin-left: 30px;">
		<!-- <div class="col-md-2">
			<h4><br><P>Social Media</P>
			<P>Search Engines</P>
			<P>Email Campaign</P>
			<P>PPC</P>
			<P>Referral Links</P></h4>
		</div>
		<div class="col-md-2">
			 <div id="donut-chart" style="height: 270px;"></div>
		</div> -->
		<div class="col-md-10">
			 <div id="jqChart_bar" style="width:100%; height: 100%;">
        </div>
		</div>

	</div>
</section>	

<script type="text/javascript">
	var lenXY=0;
	var xx=[];
	var yy=[];


</script>
@foreach ($clicks as $clk)
<script type="text/javascript">
	var coord=[{{$clk->Clicks}}];
	var lg=coord.length;
	if (lg>1){
		
		for (i=1;i<=lg/2;i++){
			xx[lenXY+i]=coord[2*(i-1)];
			yy[lenXY+i]=coord[2*(i-1)+1];
		}
		lenXY+=lg/2;
	}
</script>
@endforeach

<section>
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<h2>Visitor Engagement</h2>	
			<div class="col-md-6">
				<div class="col-md-2">
					<span>Heatmap</span>
					<input type="button" id="heat_btn" style="border: none;background: url('img/heatmap0.png');width: 31px;height: 18px;float: left;" onclick="onheatmap();">
				</div>
				<div class="col-md-2" style="float: left;  padding-bottom: 10px;">
    				<select style="border: none;">
      					<option>
        					<div style="font-size: 16px;">Map Type</div>
      					</option>
      					<option>
        					Click Map
      					</option>
      					<option>
        					Scroll Map
      					</option>
      					<option>
        					Bounce Map
      					</option>
      				</select>
  				</div>
			</div>
			<div class="col-md-4">
				<div style="float: right;  padding-bottom: 10px;">
    				<!-- <select style="border: none;">
      					<option>
        					<div style="font-size: 16px;">Last 30 days</div>
      					</option>
      					<option>
        					Last 40 days
      					</option>
      					<option>
        					Last 50 days
      					</option>
      					<option>
        					Last 60 days
      					</option>
      					<option>
        					Last 70 days
      					</option>
    				</select> -->
  				</div>
  			</div>
		</div>
		
	</div>



@foreach ($currentpage as $page)
<script type="text/javascript">
	var clickcount={{$page->clickcount}};
	 
</script>
	<div class="row" >
		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<div class="col-md-10"  style="background-color: #f5f7ff;">
			  	<div class="row"><h1><p></p><br></h1></div>
			  	<div class="row" id="heatmap_img" >
			  		
			  		<div class="col-md-12" style="height: 2000px" >
			  			 
			  			<iframe src='{{$page->PageURL}}' style="width: 100%;height: 100% ;border 1px solid gray">
			  				
			  			</iframe>
			  		 
			  			<!-- <div class="row"  id="flat_title">
			  				<div class="col-md-9">
			  					<img src="/img/flaticon.png" style="width: 30px;height: 30px;margin-top: -13px">
								<span>Flat</span>
							</div>
							<div class="col-md-1">
								<span>Blog</span>
							</div>
							<div class="col-md-2">							
								<span>About Us</span>
							</div>
						</div>
						<div class="row" id="flat_header">
							<p><b>Blog</b></p>
						</div>
						<div class="row" id="flat_content">
							<div class="col-lg-8">
								<br>
								<p><b>{{$page->PageName}}</b></p>
								<p style="font-size: 20px">Posted in News on {{$page->Date}}<br>
								We have seen multiple issues with the Marketplace payments where users from specific countries aren't able to busy plugin or theme. Paypal has limited support in some countries ,which affects both anothers and customers. Today We are released an important update which goal is to improve is the situation.
								</p>
								<br>
								<p><b>October Stable release</b></p>
								<p style="font-size: 20px;color: #525252">Posted in News on June 21,2016<br>
								We have seen multiple issues with the Marketplace payments where users from specific countries aren't able to busy plugin or theme. Paypal has limited support in some countries ,which affects both anothers and customers. Today We are released an important update which goal is to improve is the situation.
								</p>

							</div>
							<div class="col-lg-4">
								<div class="row" id="flat_search">
									<input type="text" name="search">
								</div>
								<div class="row" id="flat_cart">
									<p>13</p>
									<span>4</span>
								</div>
							</div>
							
						</div> -->


			  		</div>

			  	</div>
			  	<div class="row"><h1><br></h1></div>


			</div>			
		</div>

	</div>
</section>
@endforeach
<!--  ==================Top entry show======================   -->
<script type="text/javascript">

  var alldata=[];

</script>

@foreach ($topentrys as $topentry)
<script type="text/javascript">
	alldata.push(['{{substr($topentry->Date,5)}}', '{{$topentry->domainname}}',{{$topentry->Value}}]);
</script>
@endforeach

<script type="text/javascript">
	var entrydate=[];
</script>

@foreach ($dategroup as $dtgroup)
<script type="text/javascript">
   entrydate.push('{{substr($dtgroup->Date,5)}}');
</script>
@endforeach
<script type="text/javascript">
   entrydate.splice(0,entrydate.length-7);
   var i=alldata.length-1;
   while (alldata[i][0]>=entrydate[0])
   {
   	  	i--;
   }
   alldata.splice(0,i+1);
   
   var domain_len=0;
   var domains=[];
   for (i=0;i<alldata.length;i++)
   {
   		var re=0;
   		for (j=0;j<domain_len;j++)
   		{
   			if (alldata[i][1]==domains[j]) {re=1;break}
   		}		
   		if (re==0) {domains.push(alldata[i][1]);domain_len++;}
   
   }
   var series_data=[];
   for (i=0;i<domains.length;i++)
   {
   		var valuedata=[];
   		for (y=0;y<entrydate.length;y++)
   		{
   			var vlu=0;	
   			for (j=0;j<alldata.length;j++)
   			{
				if(entrydate[y]==alldata[j][0] && domains[i]==alldata[j][1])					
				{
					vlu=alldata[j][2];break;
				}	

   			}
   			valuedata.push(vlu);

   		}

   		series_data.push({
                        type: 'column',
                        title: domains[i],
                        data: valuedata
                    });

   }
   

   

   




</script>
<!--  ==========================================================   -->

<script type="text/javascript">
	var dt7=[];	var dt14=[];	var dt21=[];	var dt28=[];
</script>
@foreach ($current_contents as $current_content)
<script type="text/javascript">
	var cb=['{{substr($current_content->Date,5)}}',{{$current_content->Value}}];
	dt7.push(cb);
	dt14.push(cb);
	dt21.push(cb);
	dt28.push(cb);
	var pg='{{substr($current_content->PageName,-20)}}';
</script>
@endforeach
<script type="text/javascript">
	dt28.splice(0,dt28.length-28);
	var sum = 0;for (i=0;i<dt28.length;i++){sum+=dt28[i][1];}

	function selectDays(){
		 var dys=parseInt(($('#seldays').val()).substring(5,7));
		 dt7.splice(0,dt7.length-7);
		 dt14.splice(0,dt14.length-14);
		 dt21.splice(0,dt21.length-21);
		 dt28.splice(0,dt28.length-28);
		if (dys==7) dt=dt7;
		if (dys==14) dt=dt14;
		if (dys==21) dt=dt21;
		if (dys==28) dt=dt28;
		var sum = 0;
		for (i=0;i<dt.length;i++){sum+=dt[i][1];}
		$('#jqChart').jqChart({
                title: { text: 'Leads Generated:'+sum },
                animation: { duration: 1 },
                series: [
                    {
                        type: 'area',
                        title: pg,
                        color:'red',
                        fillStyle: '#1568b9',
                        data: dt
                    }
                   
                ]
            });

		 
	}
</script>
<script type="text/javascript" src="/bower_components/AdminLTE/plugins/chartjs/d3.min.js"></script>
<script type="text/javascript">
	
(function() {
  k={{$Aware}};
  var bubble_count={{round($Aware/10)}};if (bubble_count==0 && k>0) bubble_count=1;
  // Fake JSON data
  var json;
  if (bubble_count==1)  json={"countries_msg_vol": {
    "A": 9 }};
  if (bubble_count==2)  json={"countries_msg_vol": {
    "A": 9, "B": 4 }};
  if (bubble_count==3)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3  }};
  if (bubble_count==4)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2}};
  if (bubble_count==5)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1 }};
  if (bubble_count==6)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6}};
  if (bubble_count==7)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4}};
  if (bubble_count==8)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4, "H": 2   }};
  if (bubble_count==9)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4, "H": 2   }};
  if (bubble_count==10)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4, "H": 2   }};
  if (bubble_count==0)  json={"countries_msg_vol": {
    }};

  
    
  
	// D3 Bubble Chart 

	var diameter = 200/10*bubble_count;
		diameter=diameter.toFixed(0);

	var svg = d3.select('#bubble1').append('svg')
					.attr('id','sg1')
					.attr('width', diameter)
					.attr('height', diameter);

	var bubble = d3.layout.pack()
				.size([diameter, diameter])
				.value(function(d) {return d.size;})
         // .sort(function(a, b) {
				// 	return -(a.value - b.value)
				// }) 
				.padding(3);
  
  // generate data with calculated layout values
  var nodes = bubble.nodes(processData(json))
						.filter(function(d) { return !d.children; }); // filter out the outer bubble
 
  var vis = svg.selectAll('circle')
					.data(nodes);
  
  vis.enter().append('circle')
			.attr('transform', function(d) { return 'translate(' + d.x + ',' + d.y + ')'; })
			.attr('r', function(d) { return d.r; })
			.attr('class', function(d) { return d.className; });
  
  function processData(data) {
    var obj = data.countries_msg_vol;

    var newDataSet = [];

    for(var prop in obj) {
      newDataSet.push({name: prop, className: prop.toLowerCase(), size: obj[prop]});
    }
    return {children: newDataSet};
  }
  document.getElementById("sg1").style.marginTop  =(200-diameter)/2+'px' ; 
})();
</script>

<script type="text/javascript">
	
(function() {

  // Fake JSON data
  k={{$Engage}};
  var bubble_count={{round($Engage/10)}};if (bubble_count==0 && k>0) bubble_count=1;
  // Fake JSON data
  var json;
  if (bubble_count==1)  json={"countries_msg_vol": {
    "A": 9 }};
  if (bubble_count==2)  json={"countries_msg_vol": {
    "A": 9, "B": 4 }};
  if (bubble_count==3)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3  }};
  if (bubble_count==4)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2}};
  if (bubble_count==5)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1 }};
  if (bubble_count==6)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6}};
  if (bubble_count==7)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4}};
  if (bubble_count==8)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4, "H": 2   }};
  if (bubble_count==9)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4, "H": 2   }};
  if (bubble_count==10)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4, "H": 2   }};
  if (bubble_count==0)  json={"countries_msg_vol": {
    }};
  
	// D3 Bubble Chart 

	var diameter = 200/10*bubble_count;
		diameter=diameter.toFixed(0);

	var svg = d3.select('#bubble2').append('svg')
					.attr('id','sg2')
					.attr('width', diameter)
					.attr('height', diameter);

	var bubble = d3.layout.pack()
				.size([diameter, diameter])
				.value(function(d) {return d.size;})
         // .sort(function(a, b) {
				// 	return -(a.value - b.value)
				// }) 
				.padding(3);
  
  // generate data with calculated layout values
  var nodes = bubble.nodes(processData(json))
						.filter(function(d) { return !d.children; }); // filter out the outer bubble
 
  var vis = svg.selectAll('circle')
					.data(nodes);
  
  vis.enter().append('circle')
			.attr('transform', function(d) { return 'translate(' + d.x + ',' + d.y + ')'; })
			.attr('r', function(d) { return d.r; })
			.attr('class', function(d) { return d.className; });
  
  function processData(data) {
    var obj = data.countries_msg_vol;

    var newDataSet = [];

    for(var prop in obj) {
      newDataSet.push({name: prop, className: prop.toLowerCase(), size: obj[prop]});
    }
    return {children: newDataSet};
  }
  document.getElementById("sg2").style.marginTop  =(200-diameter)/2+'px' ; 
})();
</script>

<script type="text/javascript">
	
(function() {

  // Fake JSON data
 k={{$Converted}};
  var bubble_count={{round($Converted/10)}};if (bubble_count==0 && k>0) bubble_count=1;
  // Fake JSON data
  var json;
  if (bubble_count==1)  json={"countries_msg_vol": {
    "A": 9 }};
  if (bubble_count==2)  json={"countries_msg_vol": {
    "A": 9, "B": 4 }};
  if (bubble_count==3)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3  }};
  if (bubble_count==4)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2}};
  if (bubble_count==5)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1 }};
  if (bubble_count==6)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6}};
  if (bubble_count==7)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4}};
  if (bubble_count==8)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4, "H": 2   }};
  if (bubble_count==9)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4, "H": 2   }};
  if (bubble_count==10)  json={"countries_msg_vol": {
    "A": 9, "B": 4, "C": 3, "D": 2, "E": 1, "F": 6, "G": 4, "H": 2   }};
  if (bubble_count==0)  json={"countries_msg_vol": {
    }};


  
	// D3 Bubble Chart 

	var diameter = 200/10*bubble_count;
		diameter=diameter.toFixed(0);

	var svg = d3.select('#bubble3').append('svg')
					.attr('id','sg3')	
					.attr('width', diameter)
					.attr('height', diameter+'px');

	var bubble = d3.layout.pack()
				.size([diameter, diameter])
				.value(function(d) {return d.size;})
         // .sort(function(a, b) {
				// 	return -(a.value - b.value)
				// }) 
				.padding(3);
  
  // generate data with calculated layout values
  var nodes = bubble.nodes(processData(json))
						.filter(function(d) { return !d.children; }); // filter out the outer bubble
 
  var vis = svg.selectAll('circle')
					.data(nodes);
  
  vis.enter().append('circle')
			.attr('transform', function(d) { return 'translate(' + d.x + ',' + d.y + ')'; })
			.attr('r', function(d) { return d.r; })
			.attr('class', function(d) { return d.className; });
  
  function processData(data) {
    var obj = data.countries_msg_vol;

    var newDataSet = [];

    for(var prop in obj) {
      newDataSet.push({name: prop, className: prop.toLowerCase(), size: obj[prop]});
    }
    return {children: newDataSet};
  }
  
   document.getElementById("sg3").style.marginTop  =(200-diameter)/2+'px' ;
  

})();


</script>

@endsection



