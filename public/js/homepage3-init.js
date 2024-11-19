
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
