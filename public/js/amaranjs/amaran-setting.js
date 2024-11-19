        $.amaran({
            content:{
                message:'You have new mail!',
                size:'Limited Time: Save 25%',
                file:'sales@example.com',
                icon:'fa fa-envelope'
            },
            theme:'default warning',
            position:'top right',
            inEffect:'slideRight',
            outEffect:'slideRight',
            sticky:true,
			   closeButton:true
        });
        $.amaran({
            content:{
                img:'images/photos/user4.png',
                title:'New Chat Message',
                content: 'Hi, How are you ? please knock me when you arrived'
            },
            position:'bottom right',
            inEffect:'slideBottom',
            outEffect:'slideRight',
            theme:'readmore'
        });						   

    $('#example-1').on('click',function(){
        $.amaran({
            content:{
                message:'Your Download is Ready!',
                size:'1.4 GB',
                file:'my_birthday.mp4',
                icon:'fa fa-download'
            },
            theme:'default ok',
            position:'bottom right',
            inEffect:'slideBottom',
            outEffect:'slideTop',
            sticky:true,
			closeButton:true
        });
    });
    $('#example-2').on('click',function(){
        $.amaran({
            content:{
                message:'An error ocurred',
                size:'Please try again later.',
                file:'ERRORNO::3250',
                icon:'fa fa-times'
            },
            theme:'default error',
            position:'top right',
            inEffect:'slideRight',
            outEffect:'slideRight'
        });
    });
    $('#example-3').on('click',function(){
        $.amaran({
            content:{
                message:'New droplet created!',
                size:'Happy coding',
                file:'Ubuntu 12.04 4GB Memory',
                icon:'fa fa-tint'
            },
            theme:'default purple',
            position:'bottom left',
            inEffect:'slideTop',
            outEffect:'slideRight'
        });
    });
    $('#example-4').on('click',function(){
        $.amaran({
            content:{
                message:'You have new mail!',
                size:'Limited Time: Save 25%',
                file:'sales@example.com',
                icon:'fa fa-envelope'
            },
            theme:'default yellow',
            position:'top left',
            inEffect:'slideBottom',
            outEffect:'slideTop'
        });
    });
    $('#example-5').on('click',function(){
        $.amaran({
            content:{
                message:'You have new mail!',
                size:'Limited Time: Save 25%',
                file:'sales@example.com',
                icon:'fa fa-envelope'
            },
            theme:'default warning',
            position:'top right',
            inEffect:'fadeIn',
            outEffect:'fadeOut'
        });
    });
    $('#example-6').on('click',function(){
        $.amaran({
            content:{
                message:'You have new mail!',
                size:'Limited Time: Save 25%',
                file:'sales@example.com',
                icon:'fa fa-envelope'
            },
            theme:'default yellow',
            position:'top right',
            inEffect:'slideBottom',
            outEffect:'slideBottom'
        });
    });
    $('#example-7').on('click',function(){
        $.amaran({
            content:{
                message:'You have new mail!',
                size:'Limited Time: Save 25%',
                file:'sales@example.com',
                icon:'fa fa-envelope'
            },
            theme:'default warning',
            position:'top left',
            inEffect:'slideTop',
            outEffect:'fadeOut'
        });
    });
    $('#example-9').on('click',function(){
        $.amaran({
            content:{
                message:'You have new mail!',
                size:'Limited Time: Save 25%',
                file:'sales@example.com',
                icon:'fa fa-envelope'
            },
            theme:'default green',
            position:'top right',
            inEffect:'slideLeft',
            outEffect:'slideRight'
        });
    });
    $('#example-12').on('click',function(){
        $.amaran({
            content:{
                message:'Your Download is Ready!',
                size:'1.4 GB',
                file:'my_birthday.mp4',
                icon:'fa fa-download'
            },
            theme:'default green',
            position:'top left',
            inEffect:'fadeIn',
            outEffect:'slideBottom'
        });
    });
    $('#example-13').on('click',function(){
        $.amaran({
            content:{
                message:'Your Download is Ready!',
                size:'1.4 GB',
                file:'my_birthday.mp4',
                icon:'fa fa-download'
            },
            theme:'default green',
            position:'top left',
            inEffect:'fadeIn',
            outEffect:'slideTop'
        });
    });
    $('#example-14').on('click',function(){
        $.amaran({
            content:{
                message:'Your Download is Ready!',
                size:'1.4 GB',
                file:'my_birthday.mp4',
                icon:'fa fa-download'
            },
            theme:'default green',
            position:'top left',
            inEffect:'fadeIn',
            outEffect:'slideRight'
        });
    });
    $('#example-15').on('click',function(){
        $.amaran({
            content:{
                message:'Your Download is Ready!',
                size:'1.4 GB',
                file:'my_birthday.mp4',
                icon:'fa fa-download'
            },
            theme:'default green',
            position:'top left',
            inEffect:'fadeIn',
            outEffect:'slideLeft'
        });
    });
    $('#example-16').on('click',function(){
        $.amaran({
            content:{
                message:'This is "default theme"!',
                size:'With fontawesome icons',
                file:'This third line',
                icon:'fa fa-bug'
            },
            theme:'default green',
            position:'top left',
            inEffect:'fadeIn',
            outEffect:'slideLeft'
        });
    });
    $('#example-17').on('click',function(){
        $.amaran({
          content:{
                img:'http://api.randomuser.me/0.2/portraits/men/23.jpg',
                user:'Gabriel Richardson',
                message:'Images and info from randomuser.me'
               },
          position:'top right',
          inEffect:'slideBottom',
          outEffect:'slideRight',
          theme:'user',
          closeButton:true
        });
    });
    $('#example-19').on('click',function(){
        $.amaran({
            content:{

                message:'<h2>Updates are avalaible for your PC</h2><p>Go to Windows Update to install updates!</p>',
                buttons:'<a href="http://google.com">Install</a><a href="#" class="amaran-close-all" onclick="$.amaran.close()">Close</a>',
                background:'#8C0095'
            },
            position:'center center',
            inEffect:'fadeIn',
            outEffect:'slideTop',
            theme:'metro',
            sticky:true,
            clearAll:true
        });
    });
    $('#example-20').on('click',function(){
        $.amaran({
            content:{
                img:'http://api.randomuser.me/0.2/portraits/men/21.jpg'
            },
            position:'bottom right',
            inEffect:'slideBottom',
            outEffect:'slideTop',
            theme:'rounded',
            clearAll:true
        });
    });
    $('#example-21').on('click',function(){
        $.amaran({
            content:{
                img:'http://api.randomuser.me/0.2/portraits/men/21.jpg',
                title:'Do you like this post ?',
                content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, quisquam!'
            },
            position:'bottom right',
            inEffect:'slideBottom',
            outEffect:'slideRight',
            theme:'readmore'
        });
    });
    $('#example-22').on('click',function(){
        $.amaran({
          content:{
                img:'http://api.randomuser.me/0.2/portraits/men/23.jpg',
                user:'Gabriel Richardson',
                message:'Images and info from randomuser.me'
               },
          position:'top left',
          inEffect:'slideBottom',
          outEffect:'slideLeft',
          theme:'user green',
          delay:10000
        });
    });
    $('#example-23').on('click',function(){
        $.amaran({
          content:{
                img:'http://api.randomuser.me/0.2/portraits/men/23.jpg',
                user:'Gabriel Richardson',
                message:'Hey this is a sticky notification.'
               },
          position:'top left',
          inEffect:'slideBottom',
          outEffect:'slideLeft',
          theme:'user green',
          sticky:true
        });
    });
    $('#example-24').on('click',function(){
        $.amaran({
            content:{
                message:'Your Download is Ready!',
                size:'1.4 GB',
                file:'my_birthday.mp4',
                icon:'fa fa-download'
            },
            theme:'default ok',
            position:'top left',
            inEffect:'slideBottom',
            outEffect:'slideTop',
            sticky:true
        });
    });
    $('#example-25').on('click',function(){
        $.amaran({
            content:{
                message:'Your Download is Ready!',
                size:'1.4 GB',
                file:'my_birthday.mp4',
                icon:'fa fa-download'
            },
            theme:'default ok',
            position:'top left',
            inEffect:'slideBottom',
            outEffect:'slideTop',
            sticky:true,
            closeOnClick:false
        });
    });
    $('#example-26').on('click',function(){
        $.amaran({
            content:{
                message:'Your Download is Ready!',
                size:'1.4 GB',
                file:'my_birthday.mp4',
                icon:'fa fa-download'
            },
            theme:'default ok',
            position:'top left',
            inEffect:'slideBottom',
            outEffect:'slideTop',
            sticky:true,
            closeOnClick:false,
            closeButton:true,
            clearAll:true
        });
    });
    $('#example-27').on('click',function(){
        $( "#example-26" ).trigger( "click" );
        $( "#example-25" ).trigger( "click" );
        $( "#example-24" ).trigger( "click" );
        $( "#example-23" ).trigger( "click" );
        $( "#example-22" ).trigger( "click" );
    });
    $('#example-28').on('click',function(){
        $.amaran({
            content:{
                message:'An error ocurred',
                size:'Please try again later.',
                file:'ERRORNO::3250',
                icon:'fa fa-times'
            },
            theme:'default error',
            position:'top left',
            inEffect:'slideRight',
            outEffect:'slideTop',
            clearAll:true
        });
    });
    $('#example-29').on('click',function(){
        $.amaran({
            content:{
                message:'An error ocurred',
                size:'Please try again later.',
                file:'ERRORNO::3250',
                icon:'fa fa-times'
            },
            theme:'default error',
            position:'top left',
            inEffect:'slideRight',
            outEffect:'slideTop',
            beforeStart:function(){
                alert("Hey!");
            }
        });
    });
    $('#example-30').on('click',function(){
        $.amaran({
            content:{
                message:'An error ocurred',
                size:'Please try again later.',
                file:'ERRORNO::3250',
                icon:'fa fa-times'
            },
            theme:'default error',
            position:'top left',
            inEffect:'slideRight',
            outEffect:'slideTop',
            afterEnd:function(){
                alert("Hey!");
            }
        });
    });
     
