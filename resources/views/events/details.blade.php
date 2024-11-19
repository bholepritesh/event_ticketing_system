<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.rvmmedia.com/themeforest/admin-template/myadmin/widgets.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 13 Oct 2014 13:27:00 GMT -->
@include('element.head')

<body class="sticky-header">
   <div class="main-content">
      @include('element.header')

      <!--body wrapper start-->
      <div class="wrapper">
         <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
               <div class="panel">
                  <div class="panel-body no-padding">
                     <div class="box-info full weather-widget">
                        <img src="{{ asset('storage/images/'.$event->event_image) }}" class="img-responsive detail_image" alt="Weather city" />
                        <div class="overlay-weather-info">
                           <div class="weather-info-city">
                              <h1><i class="fa fa-map-marker"></i>{{$event->event_name}}</h1>
                              <div class="row">
                                 <div class="col-xs-4">
                                    <canvas id="clear-day" width="85" height="85"></canvas>
                                 </div>
                                 <div class="col-xs-8" style="float: right !important;">
                                    <h5>{{$event->event_description}}</h5>
                                    <h3 style="float: right !important;">{{$event->organizer_name}}<br>- Organizer</h3>
                                 </div>
                              </div>
                              <!-- End div .row -->
                           </div>
                           <!-- End div .weather-info-city -->
                        </div>
                        <!-- End div .overlay-weather-info -->
                        <ul class="weather-widget">
                           <li>
                              <a href="#" class="clearfix">
                                 <i class="fa fa-clock-o"></i> Start Date Time <span class=" pull-right">{{ date('d M Y, h:i A', strtotime($event->start_time)) }}</span>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="clearfix">
                                 <i class="fa fa-clock-o"></i> End Date Time <span class=" pull-right">{{ date('d M Y, h:i A', strtotime($event->end_time)) }}</span>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="clearfix">
                                 <i class="fa fa-home"></i> Venue <span class=" pull-right">{{ $event->event_venue }}</span>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="clearfix">
                                 <i class="fa fa-user"></i> Organizer <span class=" pull-right">{{$event->organizer_name}}</span>
                              </a>
                           </li>
                           <li>
                              <a class="clearfix">
                                 <i class="fa fa-ticket"></i> Early Bird - <b>Price Rs. {{$event->early_bird_price}}</b>
                                 <span class=" pull-right">
                                    <div id="custspinner1">
                                       <div class="input-group" style="width:150px;">
                                          <input type="text" id="early_bird_qty" class="spinner-input form-control" maxlength="3" readonly style="margin-top:3px;" />
                                          <div class="spinner-buttons input-group-btn">
                                             <button type="button" onclick="return ticketQuantity('early_bird_qty');" class="btn btn-default spinner-up">
                                                <i class="fa fa-plus"></i>
                                             </button>
                                             <button type="button" onclick="return ticketQuantity('early_bird_qty');" class="btn btn-default spinner-down">
                                                <i class="fa fa-minus"></i>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </span>
                                 <span class=" pull-right" style="padding-right: 10px;">Remaining Tickets ({{$event->early_bird_quantity - $event->early_bird_purchased }}) </span>
                              </a>
                           </li>
                           <li>
                              <a class="clearfix">
                                 <i class="fa fa-ticket"></i> Regular - <b>Price Rs. {{$event->regular_price}}</b>
                                 <span class=" pull-right">
                                    <div id="custspinner2">
                                       <div class="input-group" style="width:150px;">
                                          <input type="text" id="regular_qty" class="spinner-input form-control" maxlength="3" readonly style="margin-top:3px;" />
                                          <div class="spinner-buttons input-group-btn">
                                             <button type="button" onclick="return ticketQuantity('regular_qty');" class="btn btn-default spinner-up">
                                                <i class="fa fa-plus"></i>
                                             </button>
                                             <button type="button" onclick="return ticketQuantity('regular_qty');" class="btn btn-default spinner-down">
                                                <i class="fa fa-minus"></i>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </span>
                                 <span class=" pull-right" style="padding-right: 10px;">Remaining Tickets ({{$event->regular_quantity - $event->regular_purchased }}) </span>
                              </a>
                           </li>
                           <li>
                              <a class="clearfix">
                                 <i class="fa fa-ticket"></i> VIP - <b>Price Rs. {{$event->vip_price}}</b>
                                 <span class=" pull-right">
                                    <div id="custspinner3">
                                       <div class="input-group" style="width:150px;">
                                          <input type="text" id="vip_qty" class="spinner-input form-control" maxlength="3" readonly style="margin-top:3px;" />
                                          <div class="spinner-buttons input-group-btn">
                                             <button type="button" onclick="return ticketQuantity('vip_qty');" class="btn btn-default spinner-up">
                                                <i class="fa fa-plus"></i>
                                             </button>
                                             <button type="button" onclick="return ticketQuantity('vip_qty');" class="btn btn-default spinner-down">
                                                <i class="fa fa-minus"></i>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </span>
                                 <span class=" pull-right" style="padding-right: 10px;">Remaining Tickets ({{$event->vip_quantity - $event->vip_purchased }}) </span>
                              </a>
                           </li>

                           <li>
                              <a href="#" class="clearfix" style="height:0px;">
                                 <input type="hidden" id="inp_ticket_price" readonly />
                                 <div class="spinner-buttons input-group-btn">
                                    <i class="fa fa-shopping-cart"></i> Checkout
                                    <span class=" pull-right">Total Price - Rs. <span id="total_ticket_price">0</span><button id="checkoutbtn" disabled onclick="window.location.href='{{ route('checkout') }}';" class="btn btn-primary btn-block" type="button"><i class="fa fa-shopping-cart"></i> Checkout</button></span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="panel">
                  <div class="panel-heading">Comments</div>
                  <div class="panel-body">
                     <div id="commentDiv">
                        @foreach ($eventComment as $key=>$val)
                        <hr>
                        <p class="text-left"> -<b>{{$val->commentBy}}</b>- </p>
                        <p class="text-left"> {{$val->comment}} </p>
                        @endforeach
                     </div>
                     <hr>
                     <div class="form-group col-lg-6">
                        <input type="text" id="commentBox" name="name" class="form-control textfield name" placeholder="Add Comment">
                     </div>
                     <div class="form-group col-lg-1">
                        <button onclick="return addComment()" type="button" class="btn btn-success"> Add Comment
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-1"></div>
         </div>
      </div>
      <!--body wrapper end-->
      <!--footer section start-->
      @include('element.footer')
      <!--footer section end-->
   </div>
   <!-- main content end-->
   @include('element.js')

   <script>
      var early_bird_price = "{{$event->early_bird_price}}";
      var regular_price = "{{$event->regular_price}}";
      var vip_price = "{{$event->vip_price}}";
      var event_id = "{{$event->id}}";
      var user_id = "{{isset($loggedUser->id) ? $loggedUser->id : null}}";
      var earlybird_available = "{{$event->early_bird_quantity - $event->early_bird_purchased }}";
      var regular_available = "{{$event->regular_quantity - $event->regular_purchased }}";
      var vip_available = "{{$event->vip_quantity - $event->vip_purchased }}";

      function ticketQuantity(byid) {
         var total_ticket_price = 0;
         if (parseInt(earlybird_available) >= parseInt($('#early_bird_qty').val()) && parseInt(regular_available) >= parseInt($('#regular_qty').val()) && parseInt(vip_available) >= parseInt($('#vip_qty').val())) {
            total_ticket_price = parseInt(early_bird_price) * parseInt($('#early_bird_qty').val());
            total_ticket_price = total_ticket_price + parseInt(regular_price) * parseInt($('#regular_qty').val());
            total_ticket_price = total_ticket_price + parseInt(vip_price) * parseInt($('#vip_qty').val());
            $('#total_ticket_price').text(total_ticket_price);
            $('#inp_ticket_price').val(total_ticket_price);

            var userData = {
               event_id: event_id,
               user_id: user_id,
               early_bird_qty: parseInt($('#early_bird_qty').val()),
               early_bird_qty: parseInt($('#early_bird_qty').val()),
               early_bird_price: parseInt(early_bird_price),
               regular_qty: parseInt($('#regular_qty').val()),
               regular_price: parseInt(vip_price),
               vip_qty: parseInt($('#vip_qty').val()),
               vip_price: parseInt(vip_price),
               total_ticket_price: total_ticket_price
            };
            localStorage.setItem('userData', JSON.stringify(userData));

            if (total_ticket_price > 0) {
               $('#checkoutbtn').attr('disabled', false);
            } else {
               $('#checkoutbtn').attr('disabled', true);
            }
         }else{
            alert('Tickets Are Not Available.')
            $('#checkoutbtn').attr('disabled', true);
            return false;
         }

         
      }

      function addComment() {

         var options = {
            "event_id": event_id,
            "comment": $('#commentBox').val()
         };

         $.ajax({
            url: '{{ route('addComment') }}', // URL for the AJAX request
            type: 'POST', // Request type
            data: {
               data: options, // Data to be sent
               _token: '{{ csrf_token() }}' // CSRF token for security
            },
            success: function(response) {
               // Handle success response
               console.log(response);
               if (response.success) {
                  $('#commentDiv').append('<hr><p class="text-left"> -<b>' + response.data.user_name + '</b>- </p><p class="text-left">' + response.data.comment + '</p>');
                  $('#commentBox').val('');
               }
            },
            error: function(xhr, status, error) {
               // Handle error response
               alert('An error occurred: ' + error);
            }
         });
      }
   </script>
</body>

</html>