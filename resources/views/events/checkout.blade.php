<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.rvmmedia.com/themeforest/admin-template/myadmin/widgets.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 13 Oct 2014 13:27:00 GMT -->
@include('element.head')

<body class="sticky-header">
   <div class="main-content">
      @include('element.header')

      <!--body wrapper start-->
      <div class="wrapper">
         <div class="panel">
            <div class="panel-body invoice">
               <div class="row">
                  <div class="col-md-5 col-sm-8 col-xs-8">

                  </div>
                  <div class="col-md-5 col-sm-4 col-xs-4">
                     <input name="id" id="eventId" type="hidden">
                     <div class="inv-col text-bold" id="eventName">EventName</div>
                     <div class="inv-col text-bold"  id="eventDate">25 March 2014</div>
                     <p  id="venue">Venue</p>
                     <div class="inv-col"><span id="eventStart">Start Date of Event : 25th Sept 2014 </span></div>
                     <div class="inv-col"><span id="eventEnd">End Date of Event : 25th Oct 2014 </span></div>
                  </div>
               </div>

               <table class="table">
                  <thead>
                     <tr>
                        <th>Ticket</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td><span id="">EarlyBird</span></td>
                        <td id="earlibirdPrice"> 0.00 </td>
                        <td id="earlibirdQty"> 1 </td>
                        <td id="earlibirdFinalPrice"> 0.00 </td>
                     </tr>
                     <tr>
                        <td>Regular</td>
                        <td id="regularPrice"> 0.00 </td>
                        <td id="regularQty"> 1 </td>
                        <td id="regularFinalPrice"> 0.00 </td>
                     </tr>
                     <tr>
                        <td>VIP</td>
                        <td id="vipPrice"> 0.00 </td>
                        <td id="vipQty"> 1 </td>
                        <td  id="vipFinalPrice"> 0.00 </td>
                     </tr>
                     <tr>
                        <td colspan="3" class="text-right"><b>Tax</b></td>
                        <td class="text-left">00.00</td>
                     </tr>
                     <tr>
                        <td colspan="3" class="text-right no-border"><b>Total</b>
                        </td>
                        <td id="totalPrice">0.00</td>
                     </tr>
                  </tbody>
               </table>
               <div class="text-right">
                  <a onclick="return confirmCheckout();" class="btn btn-success btn-md">
                     <i class="fa fa-check"></i> Confirm Payment
                  </a>
               </div>
            </div>
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
      retrievedData = localStorage.getItem('userData');
      console.log(JSON.parse(retrievedData));
      var getlocalData = JSON.parse(retrievedData);
      $.ajax({
         url: '{{ route('geteventdetails') }}', // URL for the AJAX request
         type: 'POST', // Request type
         data: {
            data: getlocalData.event_id, // Data to be sent
            _token: '{{ csrf_token() }}' // CSRF token for security
         },
         success: function(response) {
            // Handle success response
            console.log(response);
            if (response.success) {
               $('#eventId').val(response.data.id);
               $('#eventName').html(response.data.event_name);
               $('#venue').html(response.data.event_venue);
               $('#eventStart').html('Start Date of Event : '+response.data.start_time);
               $('#eventEnd').html('End Date of Event : '+response.data.end_time);

               const ebFinalPrice =parseInt(response.data.early_bird_price) *parseInt(getlocalData.early_bird_qty);
               const rgFinalPrice =parseInt(response.data.regular_price) *parseInt(getlocalData.regular_qty);
               const vpFinalPrice =parseInt(response.data.vip_price) *parseInt(getlocalData.vip_qty);
               const lastTotal = ebFinalPrice + rgFinalPrice + vpFinalPrice;

               $('#earlibirdPrice').html(response.data.early_bird_price);
               $('#earlibirdQty').html(getlocalData.early_bird_qty);
               $('#earlibirdFinalPrice').html(ebFinalPrice);
               $('#regularPrice').html(response.data.regular_price);
               $('#regularQty').html(getlocalData.regular_qty);
               $('#regularFinalPrice').html(rgFinalPrice);
               $('#vipPrice').html(response.data.vip_price);
               $('#vipQty').html(getlocalData.vip_qty);
               $('#vipFinalPrice').html(vpFinalPrice);
               $('#totalPrice').html(lastTotal);
            }
         },
         error: function(xhr, status, error) {
            // Handle error response
            alert('An error occurred: ' + error);
         }
      });

      function confirmCheckout(){
         var options = {
            "event_id": $('#eventId').val(),
            "early_bird_qty": getlocalData.early_bird_qty,
            "regular_qty": getlocalData.regular_qty,
            "vip_qty": getlocalData.vip_qty,
         };

         $.ajax({
         url: '{{ route('confirmCheckout') }}', // URL for the AJAX request
         type: 'POST', // Request type
         data: {
            data: options, // Data to be sent
            _token: '{{ csrf_token() }}' // CSRF token for security
         },
         success: function(response) {
            // Handle success response
            console.log(response);
            if (response.success) {
               //Initiate Payment Gateway
                  //successful then upate data in transactions
                  var userData = {};
                  localStorage.setItem('userData',JSON.stringify(userData));
                  alert('Payment Done Successfully, Tour transaction_id is Txhtrfg2546-7516');
                  window.location.href = '{{ route('homepage') }}';
                  //fail then upate data in transactions
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

</html>d