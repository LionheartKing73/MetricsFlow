var donutData = [
      {label: '' , data: <?php echo $NoAdBlock ?>, color: "#23cc69"},
      {label: " ", data: <?php echo $AddBlock ?>, color: "#3480c2"},
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
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });
    function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
        + label
        + "<br>"
        + Math.round(series.percent) + "%</div>";
    }

  //    var donutData1 = [
  //     {label: '' , data:1010, color: "#23cc69"},
  //     {label: " ", data:120, color: "#3480c2"},
  //      {label: " ", data:150, color: "#eb264d"}];
  //    $.plot("#donut-chart1", donutData1, {
  //     series: {
  //       pie: {
  //         show: true,
  //         radius: 1,
  //         innerRadius: 0.5,
  //         label: {
  //           show: true,
  //           radius: 2 / 3,
  //           formatter: labelFormatter1,
  //           threshold: 0.1
  //         }

  //       }
  //     },
  //     legend: {
  //       show: false
  //     }
  //   });  

  //   /*
  //    * END DONUT CHART
  //    */
  
  //   function labelFormatter1(label, series) {
  //   return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
  //       + label
  //       + "<br>"
  //       + Math.round(series.percent) + "%</div>";
  // }

 