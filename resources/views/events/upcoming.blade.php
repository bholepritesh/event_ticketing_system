<!DOCTYPE html>
<html lang="en">
@include('element.head')

<body class="sticky-header">
   <!-- main content start-->
   <div class="main-content">
      @include('element.header')
      <!--logo and iconic logo start-->

      <!--logo and iconic logo end-->
      <!-- left side start-->
      <!-- left side end-->
      <!-- page heading start-->
      <div class="pageheader">
         <h2>LIVE EVENTS <span>Ready To Shine...</span></h2>
         <div class="breadcrumb-wrapper">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
               <li>
                  <a href="/homepage">Home</a>
               </li>
               <li class="active">Upcoming</li>
            </ol>
         </div>
      </div>
      <!-- page heading end-->
      <!--body wrapper start-->
      <div class="wrapper">
         <div class="row">
            @foreach($events as $key => $value)
            <div class="col-md-3">
               <div class="panel">
                  <a href="details/{{ base64_encode($value->id) }}">
                     <div class="panel-body no-padding">
                        <div class="box-info full weather-widget">
                           <img src="{{ asset('storage/images/'.$value->event_image) }}" class="img-responsive" alt="Weather city" />
                           <div class="overlay-weather-info">
                              <div class="weather-info-city">
                                 <h1><i class="fa fa-map-marker"></i>{{$value->event_name}}</h1>
                                 <div class="row">
                                    <div class="col-xs-3">
                                       <canvas id="clear-day" width="85" height="85"></canvas>
                                    </div>
                                    <div class="col-xs-9">
                                       <h5>{{ substr($value->event_description,0,50)}}</h5>
                                       <h3>{{$value->organizer_name}}</h3> - Organizer
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
                                    <i class="wi wi-day-sunny"></i> Start Date Time <span class=" pull-right">{{ date('d M Y, h:i A', strtotime($value->start_time)) }}</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="clearfix">
                                    <i class="wi wi-day-cloudy-windy"></i> End Date Time <span class=" pull-right">{{ date('d M Y, h:i A', strtotime($value->end_time)) }}</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="clearfix">
                                    <i class="wi wi-cloudy-windy"></i> Venue <span class=" pull-right">{{$value->event_venue}}</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="clearfix">
                                    <i class="wi wi-night-alt-rain-mix"></i> Organizer <span class=" pull-right">{{$value->organizer_name}}</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="clearfix">
                                    <i class="wi wi-day-storm-showers"></i> Full Info <span class=" pull-right">{{$value->event_description}}</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <!--body wrapper end-->
   <!--footer section start-->
   @include('element.footer')
   <!--footer section end-->
   </div>
   <!-- main content end-->
   <!-- Placed js at the end of the document so the pages load faster -->
   @include('element.js')
</body>

<!-- Mirrored from www.rvmmedia.com/themeforest/admin-template/myadmin/widgets.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 13 Oct 2014 13:27:07 GMT -->

</html>