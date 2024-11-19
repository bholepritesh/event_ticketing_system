<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.rvmmedia.com/themeforest/admin-template/myadmin/form_advanced_components.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 13 Oct 2014 13:27:24 GMT -->

@include('element.head')

<body class="sticky-header">
   <!-- main content start-->
   <div class="main-content main-content-dashbard">
      @include('element.header')
      <!--logo and iconic logo start-->
      
      <!--logo and iconic logo end-->
      <!-- left side start-->
      @include('element.sidebar')
      <!-- left side end-->

      <!--body wrapper start-->
      <div class="wrapper">
         <div class="row">
            <div class="col-sm-12">
               <section class="panel">
                  <header class="panel-heading"> {{$event->event_name}} - Attendee Listing  </header>
                  <div class="panel-body">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>User Name</th>
                              <th>Early Bird Qnantity</th>
                              <th>Regular Qnantity</th>
                              <th>VIP Qnantity</th>
                              <th>Total Tickets</th>
                              <th>Total Price</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($eventUsers as $key=>$value)
                              <tr>
                                 <td>{{$key+1}}</td>
                                 <td>{{$value->name}}</td>
                                 <td>{{$value->early_bird_quantity}}</td>
                                 <td>{{$value->regular_quantity}}</td>
                                 <td>{{$value->vip_quantity}}</td>
                                 <td>{{$value->early_bird_quantity + $value->regular_quantity + $value->vip_quantity}}</td>
                                 <td>{{$value->request_price}}</td>
                              </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </section>
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
</body>

<!-- Mirrored from www.rvmmedia.com/themeforest/admin-template/myadmin/form_advanced_components.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 13 Oct 2014 13:27:49 GMT -->

</html>