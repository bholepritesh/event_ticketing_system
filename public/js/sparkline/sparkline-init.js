var Script = function () {
    $(".sparkline").each(function(){
        var $data = $(this).data();

        $data.valueSpots = {'0:': $data.spotColor};

        $(this).sparkline( $data.data || "html", $data,
            {
                tooltipFormat: '<span style="display:block; padding:0px 10px 12px 0px;">' +
                    '<span style="color: {{color}}">&#9679;</span> {{offset:names}} ({{percent.1}}%)</span>'
            });
    });

    //income expense progress bar

    $("#income").sparkline([5,6,7,8,9,6,8,9], {
        type: 'bar',
        height: '35',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#fc8675'
    });

    $("#expense").sparkline([3,2,5,8,4,7,5,8], {
        type: 'bar',
        height: '35',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#65cea7'
    });


    $("#expense2").sparkline([3,2,5,8,4,7,5,8], {
        type: 'bar',
        height: '35',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#65cea7'
    });
	
    $("#expense3").sparkline([3,2,5,8,4,7,5,8], {
        type: 'bar',
        height: '35',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#65cea7'
    });

    $("#pro-refund").sparkline([3,2,5,8,4,7,5,8], {
        type: 'bar',
        height: '35',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#65cea7'
    });
	
    $("#vmap-chart").sparkline([3,4,5,6,5,4,6,5,6,4,5,6,5,4,6,4,5,6], {
        type: 'bar',
        height: '20',
        barWidth: 3,
        barSpacing: 2,
        barColor: '#dd5a82'
    });

    $("#vmap-chart2").sparkline([2,4,5,6,4,7,9,4,5,6,5,4,6,4,5,6,5], {
        type: 'bar',
        height: '20',
        barWidth: 3,
        barSpacing: 2,
        barColor: '#dd5a82'
    });

    $("#vmap-chart3").sparkline([5,4,3,2,3,4,5,3,3,4,5,6,5,4,6,5,6.4], {
        type: 'bar',
        height: '20',
        barWidth: 3,
        barSpacing: 2,
        barColor: '#dd5a82'
    });

    $("#vmap-chart4").sparkline([3,4,5,6,5,4,6,5,6,4,5,6,3,4,5,6,5,4], {
        type: 'bar',
        height: '20',
        barWidth: 3,
        barSpacing: 2,
        barColor: '#dd5a82'
    });

    $("#vmap-chart5").sparkline([2,3,4,5,3,3,6,3,4,5,6,5,4,5,6,5,4,5], {
        type: 'bar',
        height: '20',
        barWidth: 3,
        barSpacing: 2,
        barColor: '#dd5a82'
    });

    $("#vmap-chart6").sparkline([3,4,5,6,5,4,6,5,6,4,6,5,4,5,6,5,4,5], {
        type: 'bar',
        height: '20',
        barWidth: 3,
        barSpacing: 2,
        barColor: '#dd5a82'
    });

	$("#vmap-piechart").sparkline([2.5,3,2], {
	    type: 'pie',
	    width: '20',
	    height: '20',
	    sliceColors: ['#dd5a82','#e5e5e5','#d8d8d8']
	});

	$("#vmap-piechart2").sparkline([2.5,3,2], {
	    type: 'pie',
	    width: '20',
	    height: '20',
	    sliceColors: ['#dd5a82','#e5e5e5','#d8d8d8']
	});

	$("#vmap-piechart3").sparkline([2.5,3,2], {
	    type: 'pie',
	    width: '20',
	    height: '20',
	    sliceColors: ['#dd5a82','#e5e5e5','#d8d8d8']
	});

	$("#vmap-piechart4").sparkline([2.5,3,2], {
	    type: 'pie',
	    width: '20',
	    height: '20',
	    sliceColors: ['#dd5a82','#e5e5e5','#d8d8d8']
	});

	$("#vmap-piechart5").sparkline([2.5,3,2], {
	    type: 'pie',
	    width: '20',
	    height: '20',
	    sliceColors: ['#dd5a82','#e5e5e5','#d8d8d8']
	});

	$("#vmap-piechart6").sparkline([2.5,3,2], {
	    type: 'pie',
	    width: '20',
	    height: '20',
	    sliceColors: ['#dd5a82','#e5e5e5','#d8d8d8']
	});

    $(".custom-box").sparkline([7,5,9,6,4,9,8,5,6,7], {
        type: 'bar',
        height: '50',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#fff'
    });

    $(".custom-box2").sparkline([2,4,5,8,4,7,9,8,4,6], {
        type: 'bar',
        height: '50',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#fff'
    });

    $(".custom-box3").sparkline([6,4,8,6,8,3,5,7,5,6], {
        type: 'bar',
        height: '50',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#fff'
    });

    $(".custom-box4").sparkline([9,8,8,6,9,10,6,5,6,3], {
        type: 'bar',
        height: '50',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#fff'
    });

    $("#custom-box5").sparkline([3,2,5,8,4,7,5,8,4,6], {
        type: 'bar',
        height: '30',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#F0AD4E'
    });

    $("#custom-box6").sparkline([9,8,8,6,9,10,6,5,6,3], {
        type: 'bar',
        height: '30',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#5ab5de'
    });
	
    $("#custom-bar").sparkline([5,8,7,6,9,8,6,8], {
        type: 'bar',
        height: '30',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#5ab5de'
    });

    $("#average-sales").sparkline([3,4,5,6,5,4,6,5,6,4,5,6,5,4], {
        type: 'bar',
        height: '45',
        barWidth: 8,
        barSpacing: 2,
        barColor: '#ffffff'
    });

    $("#average-sales-barchart").sparkline([3,4,5,6,5,4,6,5,6,4,5,6,5,4], {
        type: 'bar',
        height: '45',
        barWidth: 8,
        barSpacing: 2,
        barColor: '#dd5a82'
    });

    $("#average-sales-barchart2").sparkline([3,4,5,6,5,4,6,5,6,4,5,6,5,4], {
        type: 'bar',
        height: '45',
        barWidth: 8,
        barSpacing: 2,
        barColor: '#ffffff'
    });
	
    $("#average-sales-barchart3").sparkline([3,4,5,6,5,4,6,5,6,4,5,6,5,4], {
        type: 'bar',
        height: '45',
        barWidth: 8,
        barSpacing: 2,
        barColor: '#ffffff'
    });
		 
	$("#boxline-chart").sparkline([1,5,6,7,10,12,16,11,9,8.9,8,6,9,5,7,6,5.6,5,7,6,16,9,6,8,6,9,8], {
	    type: 'line',
	    width: '90%',
	    height: '80',
	    lineColor: '#fff',
	    fillColor: '',
	    lineWidth: 2,
	    spotColor: '#e66b6b',
	    minSpotColor: '#e66b6b',
	    maxSpotColor: '#e66b6b',
	    highlightSpotColor: '#e66b6b',
	    highlightLineColor: '#e66b6b',
	    spotRadius: 3,
	    drawNormalOnTop: true
	 });

	$("#custom-box8").sparkline([1,5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6,5.6,5,7], {
	    type: 'line',
	    width: '100%',
	    height: '65',
	    lineColor: '#fff',
	    fillColor: '',
	    lineWidth: 2,
	    spotColor: '#65CEA7',
	    minSpotColor: '#65CEA7',
	    maxSpotColor: '#65CEA7',
	    highlightSpotColor: '#65CEA7',
	    highlightLineColor: '#f4c3c4',
	    spotRadius: 2,
	    drawNormalOnTop: true
	 });

	$("#custom-widget").sparkline([5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6,5.6], {
	    type: 'bar',
		width: '100%',
	    height: '80',
        barWidth: 10,
        barSpacing: 5,
        barColor: '#ffffff'
	 });

	$("#custom-widget2").sparkline([14,11,8.7,7,8,7,6,8,5,8,7,10,12,9,12], {
	    type: 'bar',
		width: '100%',
	    height: '80',
        barWidth: 10,
        barSpacing: 5,
        barColor: '#ffffff'
	 });

	$("#custom-widget3").sparkline([9,10,8.7,8,10,8,9,7,8,9,8,10,10,11], {
	    type: 'bar',
		width: '100%',
	    height: '80',
        barWidth: 10,
        barSpacing: 5,
        barColor: '#ffffff'
	 });

	$("#custom-widget4").sparkline([5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6,5.6], {
	    type: 'bar',
		width: '100%',
	    height: '80',
        barWidth: 10,
        barSpacing:5,
        barColor: '#ffffff'
	 });

	$("#widget").sparkline([5,6,7,10,12,16,11,9,8.9,8.7,7,8,7], {
	    type: 'bar',
		width: '100%',
	    height: '80',
        barWidth: 10,
        barSpacing: 5,
        barColor: '#f58a5c'
	 });

	$("#widget2").sparkline([14,11,8.7,7,8,7,6,8,5,8,7,10,12], {
	    type: 'bar',
		width: '100%',
	    height: '80',
        barWidth: 10,
        barSpacing: 5,
        barColor: '#6bccb4'
	 });

	$("#widget3").sparkline([14,11,8.7,7,8,7,6,8,5,8,7,10,12], {
	     type: 'bar',
		  width: '100%',
	     height: '80',
        barWidth: 10,
        barSpacing: 5,
        barColor: '#00d5e6'
	 });

	$("#widget4").sparkline([5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6], {
	     type: 'bar',
		  width: '100%',
	     height: '80',
        barWidth: 10,
        barSpacing:5,
        barColor: '#dd5a82'
	 });

	$("#ecommerce-widget").sparkline([6,7,10,12,16,11,9,8.9,8.7,7,8], {
	    type: 'bar',
		width: '100%',
	    height: '80',
        barWidth: 6,
        barSpacing: 5,
        barColor: '#f58a5c'
	 });

	$("#ecommerce-widget2").sparkline([11,8.7,7,8,7,6,8,5,8,7,10], {
	    type: 'bar',
		width: '100%',
	    height: '80',
        barWidth: 6,
        barSpacing: 5,
        barColor: '#6bccb4'
	 });

	$("#ecommerce-widget3").sparkline([11,8.7,7,8,7,6,8,5,8,7,10], {
	     type: 'bar',
		  width: '100%',
	     height: '80',
        barWidth: 6,
        barSpacing: 5,
        barColor: '#00d5e6'
	 });

	$("#ecommerce-widget4").sparkline([6,7,10,12,16,11,9,8.9,8.7,7,8,7], {
	     type: 'bar',
		  width: '100%',
	     height: '80',
        barWidth: 6,
        barSpacing:5,
        barColor: '#dd5a82'
	 });

    $("#minibarchart").sparkline([7,5,9,6,4,8,8,5,6,7,7,5,6,5,6,7], {
        type: 'bar',
        height: '90',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#fff'
    });

	$("#boxpie-chart").sparkline([2.5,3,2], {
	    type: 'pie',
	    width: '75',
	    height: '75',
	    sliceColors: ['#af616d','#bb7984','#894550']
	});
	
    $("#p-lead-1").sparkline([7,6,9,6,7,9,8,5], {
        type: 'bar',
        height: '35',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#65cea7'
    });

    $("#p-lead-2").sparkline([3,2,5,8,4,7,5,8], {
        type: 'bar',
        height: '35',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#fc8675'
    });

    $("#p-lead-3").sparkline([3,2,5,8,4,7,5,8], {
        type: 'bar',
        height: '35',
        barWidth: 5,
        barSpacing: 2,
        barColor: '#5ab5de'
    });

    $("#visit-1").sparkline([5,6,7,9,9,5,3,2,4,6,7,5,6,8,7,9,5 ], {
        type: 'line',
        width: '100',
        height: '25',
        lineColor: '#55accc',
        fillColor: '#edf7f9'});

    $("#visit-2").sparkline([5,6,7,7,9,5,8,5,4,6,7,8,6,8,7,9,5 ], {
        type: 'line',
        width: '100',
        height: '25',
        lineColor: '#55accc',
        fillColor: '#edf7f9'});

    $("#livestats-chart").sparkline([5,6,7,7,9,5,8,5,4,6,7,8,6,8,7,9,5 ], {
        type: 'line',
        width: '100',
        height: '25',
        lineColor: '#55accc',
        fillColor: '#edf7f9'});

}();