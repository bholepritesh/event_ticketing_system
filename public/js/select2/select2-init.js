	 $("#e1,#e2").select2();

    $("#e3").select2({
            minimumInputLength: 2
        });

    $("#e5").select2({
        minimumInputLength: 1,
        width: 'resolve',
        query: function (query) {
            var data = {results: []}, i, j, s;
            for (i = 1; i < 5; i++) {
                s = "";
                for (j = 0; j < i; j++) {s = s + query.term;}
                data.results.push({id: query.term + i, text: s});
            }
            query.callback(data);
        }
    });

    $("#e12").select2({width: "resolve", tags:["red", "white", "purple", "orange", "yellow"]});


    $("#e9").select2({width: 'resolve'});
