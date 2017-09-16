$(function () {
  // Get context with jQuery - using jQuery's .get() method.
  var salesChartCanvas = $("#performance-trend").get(0).getContext("2d");
  // This will get the first returned node in the jQuery collection.
  var salesChart = new Chart(salesChartCanvas);

  var salesChartData = {
    labels: ["Jan 22", "Jan 23", "Jan 24", "Jan 25", "Jan 26", "Jan 27", "Jan 28"],
    datasets: [
      {
        label: "Performance Score",
        // pointColor: "#00e68a",
        strokeColor: "rgb(27, 46, 91)",
        fillColor: "rgba(38, 65, 127, 0.9)",
        // pointStrokeColor: "#00a65a",
        // pointHighlightFill: "#fff",
        // pointHighlightStroke: "rgb(220,220,220)",
        data: [0.0, 0.0, 2.8, 6.8, 7.5, 8.2, 8.8]
      }
    ]
  };

  var salesChartOptions = {
    scaleOverride: true,
    scaleSteps: 10,
    scaleStartValue: 0,
    scaleStepWidth: 1,
    //Boolean - If we should show the scale at all
    showScale: true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines: false,
    //String - Colour of the grid lines
    scaleGridLineColor: "rgba(0,0,0,.05)",
    //Number - Width of the grid lines
    scaleGridLineWidth: 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,
    //Boolean - Whether the line is curved between points
    bezierCurve: true,
    //Number - Tension of the bezier curve between points
    bezierCurveTension: 0.3,
    //Boolean - Whether to show a dot for each point
    pointDot: false,
    //Number - Radius of each point dot in pixels
    pointDotRadius: 5,
    //Number - Pixel width of point dot stroke
    pointDotStrokeWidth: 1,
    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius: 20,
    //Boolean - Whether to show a stroke for datasets
    datasetStroke: true,
    //Number - Pixel width of dataset stroke
    datasetStrokeWidth: 2,
    //Boolean - Whether to fill the dataset with a color
    datasetFill: true,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: true,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true
  };

  //Create the line chart
  salesChart.Line(salesChartData, salesChartOptions);


  //-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $("#pie").get(0).getContext("2d");
  var pieChart = new Chart(pieChartCanvas);
  var PieData = [
    {
      value: 700,
      color: "#f56954",
      highlight: "#f56954",
      label: "Chrome"
    },
    {
      value: 500,
      color: "#00a65a",
      highlight: "#00a65a",
      label: "IE"
    },
    {
      value: 400,
      color: "#f39c12",
      highlight: "#f39c12",
      label: "FireFox"
    },
    {
      value: 600,
      color: "#00c0ef",
      highlight: "#00c0ef",
      label: "Safari"
    },
    {
      value: 300,
      color: "#3c8dbc",
      highlight: "#3c8dbc",
      label: "Opera"
    },
    {
      value: 100,
      color: "#b2dd45",
      highlight: "#d2d6de",
      label: "Navigator"
    }
  ];
  var pieOptions = {
    //Boolean - Whether we should show a stroke on each segment
    segmentShowStroke: true,
    //String - The colour of each segment stroke
    segmentStrokeColor: "#fff",
    //Number - The width of each segment stroke
    segmentStrokeWidth: 1,
    //Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 0, // This is 0 for Pie charts
    //Number - Amount of animation steps
    animationSteps: 100,
    //String - Animation easing effect
    animationEasing: "easeOutBounce",
    //Boolean - Whether we animate the rotation of the Doughnut
    animateRotate: true,
    //Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale: false,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: false,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
    //String - A tooltip template
    tooltipTemplate: "<%=value %> <%=label%> users"
  };
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  pieChart.Pie(PieData, pieOptions);

var ctx = $("#myChart").get(0).getContext("2d");
var myChart = new Chart(ctx);

var chartData =  {
    labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
    datasets: [{
      label: 'Facebook (Converted Leads)',
      data: [80, 100, 10, 25, 30, 10, 5],
      fillColor: 'rgba(0, 115, 183, 0.8)',
      borderColor: 'rgba(0, 115, 183,1)',
      borderWidth: 4
    }, {
      label: 'Google (Converted Leads)',
      data: [27, 44, 32, 33, 28, 25, 10],
      fillColor: 'rgba(221, 75, 57, 0.8)',
      borderColor: 'rgba(221, 75, 57, 1)',
      borderWidth: 4
    },{
      label: 'LinkedIn (Converted Leads)',
      data: [27, 44, 32, 33, 28, 25, 10],
      fillColor: 'rgba(0, 166, 90, 0.8)',
      borderColor: 'rgba(0, 166, 90, 1)',
      borderWidth: 4
    },{
      label: 'Twitter (Converted Leads)',
      data: [27, 44, 32, 33, 28, 25, 10],
      fillColor: 'rgba(243, 156, 18, 0.8)',
      borderColor: 'rgba(243, 156, 18, 1)',
    }]
  };

  var chartOptions =  {
    scales: {
      // xAxes: [{
        stacked: true
      // }],
      // yAxes: [{
      //   stacked: true
      // }]
    },
  };

myChart.Bar(chartData, chartOptions);

});