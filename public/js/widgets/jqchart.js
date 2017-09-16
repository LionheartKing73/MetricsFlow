        $(document).ready(function () {

 
           

            $('#jqChart_report').jqChart({
                title: { text: 'Avg Monthly Conversions: 825' },
                animation: { duration: 1 },
                series: [
                    {
                        type: 'area',
                        title: 'Total Visitors',
                        color:'red',
                        fillStyle: '#1568b9',
                        data: [['Oct', 0], ['Nov', 30], ['Dec', 70],
                               ['Jan', 60], ['Feb', 65], ['Mar', 80], ['Apr', 90]]
                    },
                   
                    {
                        type: 'area',
                        title: 'Total Conversions',
                        fillStyle: '#262a51',
                        data: [['Oct', 0], ['Nov', 10], ['Dec', 20],
                               ['Jan', 15], ['Feb', 40], ['Mar', 33], ['Apr', 50]]
                    }
                ]
            });

            $('#jqChart_bar_report').jqChart({
                title: { text: ' ' },
                animation: { duration: 1 },
                shadows: {
                    enabled: true
                },
                series: [
                    {
                        type: 'bar',
                        title: ' ',
                        fillStyles: ['#418CF0', '#FCB441', '#E0400A', '#056492', '#BFBFBF', '#1A3B69', '#FFE382'],
                        data: [['A', 33], ['B', 27], ['C', 23],
                               ['D', 12]]
                    }
                ]
            });
        });




$( window ).load(function() {

         $('#jqChart').jqChart({
                title: { text: 'Leads Generated: '+sum },
                animation: { duration: 1 },
                series: [
                    {
                        type: 'area',
                        title: pg,
                        color:'red',
                        fillStyle: '#1568b9',
                        data: dt28
                    }
                   
                ]
            });


         $('#jqChart_bar').jqChart({
                title: { text: 'Legend Location' },
                legend: { location: 'top' },
                animation: { duration: 1 },
                axes: [
                    {
                        type: 'category',
                        location: 'bottom',
                        categories: entrydate
                    }
                ],
                series: series_data
            });

     });