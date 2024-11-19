   var ww = $(window).width()
   $(window).resize(function(){
       if (ww < 800){
           $(body).removeClass('left-side-collapsed');
       }

   });
