/******************* Easy Pie ****************/
 
$('.easypiecharts').easyPieChart({
  animate: 1000,
  lineWidth: 4,
  onStep: function(value) {
    this.$el.find('span').text(Math.round(value));
  }
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
    element: 'widget-bar',
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
    element: 'widget-area',
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

/******************* Owl Carousel Slider ****************/

  var owl = $("#owl-demo");
 
  owl.owlCarousel({
 
      slideSpeed : 300,
      paginationSpeed : 400,
	   pagination: false,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })


/******************* Skycons Weather icon ****************/

var icons = new Skycons({"color":"red"}),
    list = [
      "partly-cloudy-day",
      "partly-cloudy-night",
      "cloudy",
      "rain",
      "sleet",
      "snow",
      "wind",
     ],
    i;

for(i = list.length; i--;)
  icons.set(list[i], list[i]);

icons.play();


var icons = new Skycons({"color":"white"}),
    list = [
	  "clear-day"
     ],
    i;

for(i = list.length; i--;)
  icons.set(list[i], list[i]);

icons.play();


/******************* Activity Feeds ****************/

    // Activity feed
		$('.activity-feeds').vTicker({
        speed: 500,
        pause: 3000,
        animation: 'slide',
        height: 400,
        mousePause: true,
        showItems: 5,
        isPaused:false,
        direction:"up"
		
    });

/******************* New User Selection ****************/

    $('.list-group-item > .show-menu').on('click', function(event) {
		event.preventDefault();
		$(this).closest('li').toggleClass('open');
	});

