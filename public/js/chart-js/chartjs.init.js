
(function(){
    var t;
    function size(animate){
        if (animate == undefined){
            animate = false;
        }
        clearTimeout(t);
        t = setTimeout(function(){
            $("canvas").each(function(i,el){
                $(el).attr({
                    "width":$(el).parent().width(),
                    "height":$(el).parent().outerHeight()
                });
            });
            redraw(animate);
            var m = 0;
            $(".chartJS").height("");
            $(".chartJS").each(function(i,el){ m = Math.max(m,$(el).height()); });
            $(".chartJS").height(m);
        }, 30);
    }
    $(window).on('resize', function(){ size(false); });


    function redraw(animation){
        var options = {};
        if (!animation){
            options.animation = false;
        } else {
            options.animation = true;
        }

/*******************************  Chart js Bar Chart  ********************************/

        var barChartData = {
            labels : ["January","February","March","April","May","June","July"],
            datasets : [
                {
                    fillColor : "#F7464A",
                    strokeColor : "#F7464A",
                    data : [70,65,55,65,60,75,60]
                },
                {
                    fillColor : "#46BFBD",
                    strokeColor : "#46BFBD",
                    data : [60,75,65,70,65,65,70]
                },
                {
                    fillColor : "#FDB45C",
                    strokeColor : "#FDB45C",
                    data : [55,60,75,60,70,60,75]
                }
            ]

        }

        var myBar = new Chart(document.getElementById("bar-chart-js").getContext("2d")).Bar(barChartData);	

/*******************************  Chart js Line Chart  ********************************/

        var Linedata = {
            labels : ["January","February","March","April","May","June","July"],
            datasets : [
                {
                    fillColor : "#F7464A",
                    strokeColor : "#F7464A",
                    pointColor : "#F7464A",
                    pointStrokeColor : "#fff",
                    data : [100,159,190,281,156,155,140]
                },
                {
                    fillColor : "#46BFBD",
                    strokeColor : "#46BFBD",
                    pointColor : "#46BFBD",
                    pointStrokeColor : "#fff",
                    data : [65,59,90,181,56,55,40]
                },
                {
                    fillColor : "#FDB45C",
                    strokeColor : "#FDB45C",
                    pointColor : "#FDB45C",
                    pointStrokeColor : "#fff",
                    data : [28,48,40,19,96,27,100]
                }

            ]
        }
        var myLineChart = new Chart(document.getElementById("line-chart-js").getContext("2d")).Line(Linedata);

/*******************************  Pie Chart  ********************************/

        var pieData = [
            {
                value: 100,
                color:"#F7464A",
					 highlight: "#F7464A",
					 label: "Red"
            },
            {
                value : 30,
                color: "#46BFBD",
					 highlight: "#46BFBD",
					 label: "Green"
            },
            {
                value : 50,
                color: "#FDB45C",
					 highlight: "#FDB45C",
					 label: "Yellow"
            }

        ];

        var myPie = new Chart(document.getElementById("pie-chart-js").getContext("2d")).Pie(pieData);

/*******************************  Donut Chart  ********************************/

        var donutData = [
            {
                value: 30,
                color:"#F7464A",
					 highlight: "#F7464A",
					 label: "Red"
            },
            {
                value : 50,
                color: "#46BFBD",
					 highlight: "#46BFBD",
					 label: "Green"
            },
            {
                value : 30,
                color: "#5ccdde",
					 highlight: "#5ccdde",
					 label: "Soft cyan"
            },
            {
                value : 40,
                color: "#FDB45C",
					 highlight: "#FDB45C",
					 label: "Yellow"
            },
            {
                value : 120,
                color : "#b8d3f5",
					 highlight: "#b8d3f5",
            }

        ]
        var myDonut = new Chart(document.getElementById("donut-chart-js").getContext("2d")).Doughnut(donutData);

/*******************************  Polar Area Chart  ********************************/
       var PolarAreaData = [
           {
                value: 300,
                color:"#F7464A",
                highlight: "#F7464A"
           },
           {
                value: 260,
                color: "#5ccdde",
                highlight: "#5ccdde"
           },
           {
                value: 220,
                color: "#FDB45C",
                highlight: "#FDB45C"
           },
           {
                value: 160,
                color: "#46BFBD",
                highlight: "#46BFBD"
           },
           {
                value: 120,
                color: "#4D5360",
                highlight: "#4D5360"
           },
           {
                value: 80,
                color: "#949FB1",
                highlight: "#949FB1"
           }

        ];
        
		  var myPolarArea = new Chart(document.getElementById("polar-area-js").getContext("2d")).PolarArea(PolarAreaData);
		  
/*******************************  Radar Graph Chart  ********************************/

var data = {
    labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(247,70,74, 0.2)",
            strokeColor: "rgba(247,70,74,1)",
            pointColor: "rgba(247,70,74,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(247,70,74,1)",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            fillColor: "rgba(70,191,189, 0.2)",
            strokeColor: "rgba(70,191,189,1)",
            pointColor: "rgba(70,191,189,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(70,191,189,1)",
            data: [28, 48, 40, 19, 96, 27, 100]
        }
    ]
};

   var canvas = document.getElementById("departments");
 	var ctx = canvas.getContext("2d");
	var myRadarChart = new Chart(ctx).Radar(data, options);

    }

    size(true);

}());
