
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
                    colors: ["rgba(255,255,255,.4)", "rgba(253,96,91,.8)"]
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
						  colors: ["rgba(255,255,255,.0)", "rgba(183,236,240,.8)"]						  
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
        colors: ["rgb(253,96,91)", "rgb(183,236,240)"]
    };
    var plot = $.plot($("#main-chart #main-chart-container"), data, options);

});

$(function() {
        var data = [{
            label: "Premium Member",
            data: 10
        }, {
            label: "Gold Member",
            data: 20
        }, {
            label: "Platinum Member",
            data: 10
        }, {
            label: "Silver Member",
            data: 10
        },{
            label: "Platinum Member",
            data: 20
        },{
            label: "Platinum Member",
            data: 30
        }];
        var options = {
            series: {
                pie: {
                    show: true,
                    innerRadius: 0.4,
                    show: true
                }
            },
            legend: {
                show: false
            },
            grid: {
                hoverable: true,
                clickable: true
            },
            colors: ["#91C854", "#00B1E1", "#63D3E9","#FFD66A", "#ED5466", "#6BCCB4"],
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false
            }
        };
        $.plot($("#pie-chart-donut #pie-donutContainer"), data, options);
    });



    $(function() {
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
    });

/******************** Flot Bar Chart Start *******************/

		// bar chart
		if ($('#flotbar').length) {
			var db1 = [];
			for (var i = 0; i <= 10; i += 1) {
				db1.push([i, parseInt(Math.random() * 30)]);
			}

			var db2 = [];
			for (var i = 0; i <= 10; i += 1) {
				db2.push([i, parseInt(Math.random() * 30)]);
			}

			var db3 = [];
			for (var i = 0; i <= 10; i += 1) {
				db3.push([i, parseInt(Math.random() * 30)]);
			}
			
			var series = new Array();

			series.push({
				data : db1,
				bars : {
					show : true,
					barWidth : 0.2,
					order : 1,
					lineWidth: 1,
					fill: 1
				}
			});
			series.push({
				data : db2,
				bars : {
					show : true,
					barWidth : 0.2,
					order : 2,
					lineWidth: 1,
					fill: 1
				}
			});
			series.push({
				data : db3,
				bars : {
					show : true,
					barWidth : 0.2,
					order : 3,
					lineWidth: 1,
					fill: 1
				}
			}); 

			$.plot("#flotbar", series, {
				colors: ['#e74c3c', '#f1c40f', '#2ecc71'],
				grid: {
					tickColor: "#ddd",
					borderWidth: 0
				},
				shadowSize: 0
			});
		}

/******************** Flot Bar Chart End *******************/

/******************** User Profile Show / Hide Menu Start ******************/

    $('.list-group-item > .show-menu').on('click', function(event) {
		event.preventDefault();
		$(this).closest('li').toggleClass('open');
	});

/******************** User Profile Show / Hide Menu End ********************/

/******************** Index Page ********************/

    jQuery('#vmap').vectorMap({
         map: 'world_en',
         backgroundColor: 'nil',
         color: '#eee',
         hoverColor: '#7266ba',
         selectedColor: '#dddddd',
         enableZoom: true,
         showTooltip: true
    });
