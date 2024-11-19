<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.rvmmedia.com/themeforest/admin-template/myadmin/form_advanced_components.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 13 Oct 2014 13:27:24 GMT -->

@include('element.head')

<body class="sticky-header">
   <!-- main content start-->
   <div class="main-content main-content-dashbard">
      @include('element.header')
      <!--logo and iconic logo start-->


      <!--body wrapper start-->
      <div class="wrapper">
         <div class="row">
            <div class="col-md-12">
               <div class="panel">
                  <header class="panel-heading"> User Details </header>
                  <div class="panel-body">
                     <form action="{{route('userstore')}}" method="POST" id="add_form" enctype="multipart/form-data" data-bvalidator-validate class="form-horizontal row-border">
                        {{csrf_field()}}
                        <div class="form-group">
                           <label class="col-sm-3 control-label">User Name</label>
                           <div class="col-sm-6">
                              <input type="text" name="name" class="form-control" required />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Email</label>
                           <div class="col-sm-6">
                              <input type="text" name="email" class="form-control" required />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Password</label>
                           <div class="col-sm-6">
                              <input type="text" name="password" class="form-control" required />
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Retype Password</label>
                           <div class="col-sm-6">
                              <input id="retypeInputPassword" name="password_confirmation" type="password" class="form-control lock-input" required="required" />
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