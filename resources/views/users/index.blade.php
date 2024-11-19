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
                  <header class="panel-heading"> My Events
                     <span class="pull-right">
                        <a href="/event-add" type="button" class="btn btn-success btn-xs"> Create New Event
                        </a>
                     </span><br>
                  </header>
                  <div class="panel-body">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>Sr.No.</th>
                              <th>Event Title</th>
                              <th>Event Time</th>
                              <th>Event Venue</th>
                              <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($events as $key => $value)
                           <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$value->event_name}}</td>
                              <td>{{$value->start_time}}</td>
                              <td>{{$value->event_venue}}</td>
                              <td>
                                 <a href="event-edit/{{base64_encode($value->id)}}" type="button" class="btn btn-default btn-circle btn-outline"><i class="fa fa-edit"></i></a>
                                 <a href="event-status/{{base64_encode($value->id)}}" type="button" class="btn btn-default btn-circle btn-outline"><i class="fa fa-check"></i></a>
                                 <a href="event-attendees/{{base64_encode($value->id)}}" type="button" class="btn btn-default btn-circle btn-outline"><i class="fa fa-user"></i></a>
                              </td>
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