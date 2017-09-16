@extends('layouts.template')

@section('content-header')
 <!-- Content Header (Page header) -->
 <style type="text/css">
   #new_content{
    float: left;
    height: 400px;
    border: 1px solid rgba(0,0,0,0.1) ;
    border-radius: 5px;
    overflow: hidden;
    padding-left: 0px;

   }
   #content_box{
    margin-left: 0;
    margin-top: 10px;
    width: 5000px;
   }
   #screenshot{
    display:inline-block;width: 370px;height: 380px;padding-bottom: 20px;
    margin-left: 13px;
  }
  iframe{
    width: 100%;height: 100% ;border:1px solid gray;
  }
  #left_btn{
    float: right;
    width: 50%;
    height: 400px;
    font-size: 100px;
    font-weight: bold;
    font-family: Consolas;
    display: flex;
    align-items: center;
  }
  #right_btn{
    float: left;
    width: 50%;
    height: 400px;
    font-size: 100px;
    font-weight: bold;
    font-family: Consolas;
    display: flex;
    align-items: center;
  }
  #left_btn:hover{
    cursor: pointer;
    color: gray;
  }

  #right_btn:hover{
    cursor: pointer;
    color: gray;
  }


 </style>

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
      <h1>New Content</h1> 
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
       <div class="col-md-1">
          <div id="left_btn" class="left_btn1">
          <p><b><</b></p> 
          </div>
       </div>
       <div class="col-md-10" id="new_content"> 
       <div id="content_box" class="content_box1"> 
        @foreach($contents_new as $content)
          <div class="box-body" style="float: left">
            <a href="/content?name={{$content ->PageName}}">
                <div id="screenshot">
                    <iframe sandbox="allow-pointer-lock" scrolling="no" src='{{$content->PageURL}}'>
                    </iframe> 
                 </div>
             </a>
          </div>
        @endforeach
        </div>
        </div>
        <div class="col-md-1">
          <div id="right_btn" class="right_btn1">
          <p><b>></b></p> 
          </div>
       </div>
      
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <h1>Content Driving Awareness</h1> 
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
       <div class="col-md-1">
          <div id="left_btn" class="left_btn2">
          <p><b><</b></p> 
          </div>
       </div>
       <div class="col-md-10" id="new_content"> 
       <div id="content_box" class="content_box2"> 
        @foreach($contents_aware as $content)
          <div class="box-body" style="float: left">
            <a href="/content?name={{$content ->PageName}}">
                <div id="screenshot">
                    <iframe sandbox="allow-pointer-lock" scrolling="no" src='{{$content->PageURL}}'>
                    </iframe> 
                 </div>
             </a>
          </div>
        @endforeach
        </div>
        </div>
        <div class="col-md-1">
          <div id="right_btn" class="right_btn2">
          <p><b>></b></p> 
          </div>
       </div>
      
    </div>
  </div>
</section>


<section>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <h1>Content Driving Engagement</h1> 
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
       <div class="col-md-1">
          <div id="left_btn" class="left_btn3">
          <p><b><</b></p> 
          </div>
       </div>
       <div class="col-md-10" id="new_content"> 
       <div id="content_box" class="content_box3"> 
        @foreach($contents_engaged as $content)
          <div class="box-body" style="float: left">
            <a href="/content?name={{$content ->PageName}}">
                <div id="screenshot">
                    <iframe sandbox="allow-pointer-lock" scrolling="no" src='{{$content->PageURL}}'>
                    </iframe> 
                 </div>
             </a>
          </div>
        @endforeach
        </div>
        </div>
        <div class="col-md-1">
          <div id="right_btn" class="right_btn3">
          <p><b>></b></p> 
          </div>
       </div>
      
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <h1>Content Driving Conversions</h1> 
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
       <div class="col-md-1">
          <div id="left_btn" class="left_btn4">
          <p><b><</b></p> 
          </div>
       </div>
       <div class="col-md-10" id="new_content"> 
       <div id="content_box" class="content_box4"> 
        @foreach($contents_conv as $content)
          <div class="box-body" style="float: left">
            <a href="/content?name={{$content ->PageName}}">
                <div id="screenshot">
                    <iframe sandbox="allow-pointer-lock" scrolling="no" src='{{$content->PageURL}}'>
                    </iframe> 
                 </div>
             </a>
          </div>
        @endforeach
        </div>
        </div>
        <div class="col-md-1">
          <div id="right_btn" class="right_btn4">
          <p><b>></b></p> 
          </div>
       </div>
      
    </div>
  </div>
</section>

<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.left_btn1').click(function() {

        $('.content_box1').animate({
        'marginLeft' : "-=400px" //moves left
        });
    });
    $('.right_btn1').click(function() {
      
        $('.content_box1').animate({
        'marginLeft' : "+=400px" //moves left
        });
    });

    $('.left_btn2').click(function() {

        $('.content_box2').animate({
        'marginLeft' : "-=400px" //moves left
        });
    });
    $('.right_btn2').click(function() {
      
        $('.content_box2').animate({
        'marginLeft' : "+=400px" //moves left
        });
    });

    $('.left_btn3').click(function() {

        $('.content_box3').animate({
        'marginLeft' : "-=400px" //moves left
        });
    });
    $('.right_btn3').click(function() {
      
        $('.content_box3').animate({
        'marginLeft' : "+=400px" //moves left
        });
    });

    $('.left_btn4').click(function() {

        $('.content_box4').animate({
        'marginLeft' : "-=400px" //moves left
        });
    });
    $('.right_btn4').click(function() {
      
        $('.content_box4').animate({
        'marginLeft' : "+=400px" //moves left
        });
    });


  });
</script>
@endsection



