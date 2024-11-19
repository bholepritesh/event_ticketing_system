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

Morris.Line({
        element: 'widget-line',
        data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 },
            { y: '2009', a: 75,  b: 65 },
            { y: '2010', a: 50,  b: 40 },
            { y: '2011', a: 75,  b: 65 },
            { y: '2012', a: 100, b: 90 }
        ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    gridTextColor: '#000',
    lineColors: ['rgb(165,209,108)', 'rgb(252,179,34)'],
    lineWidth: '5px',
    hideHover: 'auto',
    smooth: true,
    grid: true
});

Morris.Area({
        element: 'widget-area',
        data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 },
            { y: '2009', a: 75,  b: 65 },
            { y: '2010', a: 50,  b: 40 },
            { y: '2011', a: 75,  b: 65 },
            { y: '2012', a: 100, b: 90 }
        ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    gridTextColor: '#000',
    lineColors: ['rgb(237,84,102)', 'rgb(165,209,108)'],
    lineWidth: '3px',
    hideHover: 'auto',
    smooth: true,
    grid: true
});


Morris.Donut({
    element: 'donut-chart',
    data: [
        {value: 45, label: 'Product 1', formatted: '45%' },
        {value: 20, label: 'Product 2', formatted: '20%' },
        {value: 10, label: 'Product 3', formatted: '10%' },
        {value: 15, label: 'Product 4', formatted: '15%' },
        {value: 10, label: 'Product 5', formatted: '10%' }
    ],
    backgroundColor: '#fff',
    labelColor: '#6dc5a3',
    colors: [
        '#ed5466','#FCB322','#8dc545','#633e9e','#b49cd8'
    ],
    formatter: function (x, data) { return data.formatted; }
});