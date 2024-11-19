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
            <div class="col-md-12">
               <div class="panel">
                  <header class="panel-heading"> Event Details </header>
                  <div class="panel-body">
                     <form action="{{route('eventupdate',base64_encode($event->id))}}" method="POST" id="add_form" enctype="multipart/form-data" data-bvalidator-validate class="form-horizontal row-border">
                     {{csrf_field()}}
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Event Title</label>
                           <div class="col-sm-6">
                              <input type="text" name="event_name" value="{{ $event->event_name }}" class="form-control" required />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Event Image</label>
                           <div class="col-sm-6">
                              <input type="file" name="new_event_image" value="{{ $event->event_image }}" class="form-control" />

                              <img src="{{ asset('storage/images/'.$event->event_image) }}" height="70" width="100" alt="Profile Picture">

                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Event Venue</label>
                           <div class="col-sm-6">
                              <input type="text" name="event_venue" value="{{ $event->event_venue }}" class="form-control" required />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Start Time</label>
                           <div class="col-sm-6">
                              <input size="16" name="start_time" value="{{ date('Y-m-d H:i', strtotime($event->start_time)) }}" type="text" readonly class="form_datetime form-control" required />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">End Time</label>
                           <div class="col-sm-6">
                           <input size="16" name="end_time" value="{{ date('Y-m-d H:i', strtotime($event->end_time)) }}" type="text" readonly class="form_datetime form-control" required />
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-sm-3 control-label">Early Bird Price</label>
                           <div class="col-sm-6">
                              <input type="number" name="early_bird_price" value="{{ $event->early_bird_price }}" class="form-control" required />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Early Bird Qty</label>
                           <div class="col-sm-6">
                              <input type="number" name="early_bird_quantity" value="{{ $event->early_bird_quantity }}" min="{{ $event->vip_quantity }}" class="form-control" required />
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-sm-3 control-label">Regular Ticket Price</label>
                           <div class="col-sm-6">
                              <input type="number" name="regular_price" value="{{ $event->regular_price }}" class="form-control" required />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Regular Ticket Qty</label>
                           <div class="col-sm-6">
                              <input type="number" name="regular_quantity" value="{{ $event->regular_quantity }}" min="{{ $event->vip_quantity }}" class="form-control" required />
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-sm-3 control-label">VIP Ticket Price</label>
                           <div class="col-sm-6">
                              <input type="number" name="vip_price" value="{{ $event->vip_price }}" class="form-control" required />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">VIP Ticket Qty</label>
                           <div class="col-sm-6">
                              <input type="number" name="vip_quantity" value="{{ $event->vip_quantity }}" min="{{ $event->vip_quantity }}" class="form-control" required />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Event Description</label>
                           <div class="col-sm-6">
                              <textarea name="event_description" class="form-control" required>{{ $event->event_description }}</textarea>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label"></label>
                           <div class="col-sm-6">
                              <button class="btn btn-success btn-sm" type="submit">Save</button>
                              <button class="btn btn-default btn-sm" type="button">Cancel</button>
                           </div>
                        </div>
                     </form>
                  </div>
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
</body>

<!-- Mirrored from www.rvmmedia.com/themeforest/admin-template/myadmin/form_advanced_components.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 13 Oct 2014 13:27:49 GMT -->

</html>