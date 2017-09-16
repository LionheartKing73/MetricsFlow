  
// minimal heatmap instance configuration


// now generate some random data
var points = [];
var max = 0;
var width = 1920;
var height = 1080;
var len = lenXY;

for (i=1;i<=len;i++) {
var d = new Date();
var n = d.getSeconds();
 
  //var val = Math.floor(Math.random()*100);
  var val=0.5;
  // now also with custom radius
  //var radius = Math.floor(Math.random(n)*70);
  var radius = 70;

  max = Math.max(max, val);
  var point = {
    x: xx[i],//Math.floor(Math.random()*width)+180,
    y: yy[i],//Math.floor(Math.random()*height),
    value: val,
    // radius configuration on point basis
    radius: radius
  };
  points.push(point);
}
// heatmap data format
var data = { 
  max: max, 
  data: points 
};
// if you have a set of datapoints always use setData instead of addData
// for data initialization
 


var setedHeatmap=true;
var heatmapInstance = h337.create({container: document.querySelector('#heatmap_img')});

  function onheatmap(){
    if (setedHeatmap){
      $("#heat_btn").css({"background":"url('img/heatmap1.png')"});
      heatmapInstance.setData(data);
      setedHeatmap=false;
    } 
    else{
      $("#heat_btn").css({"background":"url('img/heatmap0.png')"});
      heatmapInstance.setData({data:[]});
      setedHeatmap=true;
    } 
  }