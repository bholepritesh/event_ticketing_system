
$(function() {

    var d1 = [[1,50],[2,53],[3,40],[4,55],[5,47],[6,39],[7,44],[8,55],[9,43],[10,61],[11,52],[12,57],[13,64],[14,54],[15,49],[16,55],[17,53],[18,57],[19,68],[20,71],[21,84],[22,72],[23,88],[24,74],[25,87],[26,83],[27,76],[28,86],[29,93],[30,95]]; 
    var d2 = [[1,13],[2,18],[3,14],[4,25],[5,23],[6,17],[7,20],[8,26],[9,24],[10,27],[11,32],[12,37],[13,32],[14,28],[15,25],[16,21],[17,25],[18,33],[19,30],[20,27],[21,35],[22,28],[23,29],[24,28],[25,34],[26,27],[27,40],[28,29],[29,33],[30,45]];
	 
    var data = ([{
        label: "New Visitors",
        data: d1,
        lines: {
            show: true,
            fill: true,
            fillColor: {
						  colors: ["rgba(255,255,255,.0)", "rgba(183,236,240,.8)"]
            }
        }
    },
        {
            label: "Unique Visitors",
            data: d2,
            lines: {
                show: true,
                fill: true,
                fillColor: {
                    colors: ["rgba(255,255,255,.4)", "rgba(253,96,91,.8)"]
                }
            }
        }
    ]);

    var options = {
        grid: {
            backgroundColor:
            {
                colors: ["#ffffff", "#f4f4f6"]
            },
            hoverable: true,
            clickable: true,
            tickColor: "#eeeeee",
            borderWidth: 1,
            borderColor: "#eeeeee"
        },
        // Tooltip
        tooltip: true,
        tooltipOpts: {
            content: "%s X: %x Y: %y",
            shifts: {
                x: -60,
                y: 25
            },
            defaultTheme: false
        },
        legend: {
            labelBoxBorderColor: "#000000",
            container: $("#main-chart-legend"), //remove to show in the chart
            noColumns: 0
        },
        series: {
            stack: true,
            shadowSize: 0,
            highlightColor: 'rgba(000,000,000,.2)'
        },
        points: {
            show: true,
            radius: 3,
            symbol: "circle"
        },
        colors: ["rgb(183,236,240)", "rgb(253,96,91)"]
    };
    var plot = $.plot($("#main-chart #main-chart-container"), data, options);

});


/******************* Morris Line Chart ****************/

    new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'widget-line',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { y: '2006', a: 50, b: 0, c: 25 },
            { y: '2007', a: 60,  b: 25, c: 40 },
            { y: '2008', a: 45,  b: 30, c: 38 },
            { y: '2009', a: 40,  b: 20, c: 30 },
            { y: '2010', a: 50,  b: 35, c: 20 },
            { y: '2011', a: 60,  b: 50, c: 40 },
            { y: '2012', a: 65, b: 55, c: 45 }
        ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Series A', 'Series B', 'Series C'],
    gridTextColor: '#000',
    lineColors: ['rgb(165,209,108)', 'rgb(252,179,34)', 'rgb(237,84,102)'],
    lineWidth: '1px',
    hideHover: 'auto',
    smooth: true,
    grid: true
    });    
  
/******************* Morris Bar Chart ****************/

Morris.Bar({
    element: 'big-widget-bar',
    data: [
       { y: '2006', a: 100, b: 90, c: 80 },
       { y: '2007', a: 75,  b: 65, c: 55 },
       { y: '2008', a: 50,  b: 40, c: 30 },
       { y: '2009', a: 75,  b: 65, c: 55 },
       { y: '2010', a: 50,  b: 40, c: 30 },
       { y: '2011', a: 75,  b: 65, c: 55 },
       { y: '2012', a: 100, b: 90, c: 80 }
   ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Series A', 'Series B', 'Series C'],
    gridTextColor: '#000',
    barColors: ['rgb(165,209,108)', 'rgb(252,179,34)', 'rgb(237,84,102)'],
    barWidth: '1px',
    hideHover: 'auto',
    smooth: true,
    grid: true

});

/******************* Morris Area Chart ****************/

Morris.Area({
    element: 'big-widget-area',
    behaveLikeLine: true,
    gridEnabled: true,
    gridLineColor: '#dddddd',
	 gridTextColor: '#fff',
    axes: true,
    fillOpacity:.8,
        
	 data: [
            { y: '2006', a: 50, b: 0, c: 25 },
            { y: '2007', a: 60,  b: 35, c: 20 },
            { y: '2008', a: 45,  b: 25, c: 35 },
            { y: '2009', a: 40,  b: 35, c: 30 },
            { y: '2010', a: 50,  b: 35, c: 20 },
            { y: '2011', a: 60,  b: 50, c: 40 },
            { y: '2012', a: 65, b: 55, c: 45 }
      ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Series A', 'Series B', 'Series C'],
    gridTextColor: '#000',
    lineColors: ['rgb(165,209,108)', 'rgb(252,179,34)', 'rgb(237,84,102)'],
    lineWidth: '1px',
    hideHover: 'auto',
    smooth: true,
    grid: true

   });
	


(function($, window, document){
  'use strict';
  
  var Selector = 'th.check-all';

  $(Selector).on('change', function() {
    var $this = $(this),
        index= $this.index() + 1,
        checkbox = $this.find('input[type="checkbox"]'),
        table = $this.parents('table');
    // Make sure to affect only the correct checkbox column
    table.find('tbody > tr > td:nth-child('+index+') input[type="checkbox"]')
      .prop('checked', checkbox[0].checked);

  });

}(jQuery, window, document));


/************************* Date Range Picker Start **********************************/

                //Date range as a button
                $('#daterange-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'Last 7 Days': [moment().subtract('days', 6), moment()],
                                'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                });

/************************* Date Range Picker End  **********************************/

/*************************** Real time Chart Start *************************************/

        var data1 = [];
        var totalPoints = 300;
        function GetData() {
        data1.shift();
        while (data1.length < totalPoints) {
        var prev = data1.length > 0 ? data1[data1.length - 1] : 50;
        var y = prev + Math.random() * 10 - 5;
        y = y < 0 ? 0 : (y > 100 ? 100 : y);
        data1.push(y);
        }
    var result = [];
    for (var i = 0; i < data1.length; ++i) {
        result.push([i, data1[i]])
        }
    return result;
    }
    var updateInterval = 100;
    var plot = $.plot($("#reatltime-chart #reatltime-chartContainer"), [
            GetData()], {
            series: {
                lines: {
                    show: true,
                    fill: true
                },
                shadowSize: 0
            },
            yaxis: {
                min: 0,
                max: 100,
                ticks: 10
            },
            xaxis: {
                show: true
            },
            grid: {
                hoverable: true,
                clickable: true,
                tickColor: "#eeeeee",
                borderWidth: 1,
                borderColor: "#eeeeee"
            },
            colors: ["#5abcdf", "#ff8673"],
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false
            }
        });
        function update() {
            plot.setData([GetData()]);
            plot.draw();
            setTimeout(update, updateInterval);
        }
        update();

/*************************** Real time Chart End *************************************/

/***************************  World Vector Map   *************************************/

jQuery('#vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: 'null',
		    color: '#ffffff',
		    hoverOpacity: 0.7,
		    selectedColor: '#666666',
		    enableZoom: false,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
    });

