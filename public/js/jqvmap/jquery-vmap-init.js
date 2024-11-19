/*=========================================================================*/

 /* Vector Map Page */
 
/*=========================================================================*/

jQuery('#world-vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: 'null',
		    color: '#C8EEFF',
		    hoverOpacity: 0.7,
		    selectedColor: '#fff',
		    enableZoom: false,
		    showTooltip: false,
		    values: sample_data,
		    scaleColors: ['#5ccdde', '#C8EEFF'],
		    normalizeFunction: 'polynomial'
 });


jQuery('#usa-vmap').vectorMap({
          map: 'usa_en',
		    backgroundColor: 'null',
		    color: '#C8EEFF',
		    selectedColor: '#fff',
		    enableZoom: false,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#5ccdde', '#C8EEFF'],
		    normalizeFunction: 'polynomial'
});