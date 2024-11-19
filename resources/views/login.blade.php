<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.rvmmedia.com/themeforest/admin-template/myadmin/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 13 Oct 2014 13:29:45 GMT -->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="RVM Media" />
<link rel="shortcut icon" href="#" type="image/png" />
<title>Login Page</title>
{!! Html::style('css/style.css')!!}
{!! Html::style('css/style-responsive.css')!!}

<link href="js/iCheck/skins/square/blue.html" rel="stylesheet" />

</head>
<body>
<div class="lock-wrapper">
   <div class="panel lock-box">
      <h1> Event Ticketing System</h1><img alt="lock avatar" src="images/photos/user1.png" class="img-thumbnail"><br>
      @include('element.flash')
      <p class="text-center">Please login to Access your Account</p><br>
      <div class="row">
         <form action="{{url('loginpost')}}" method="POST" class="form-inline" role="form">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group col-md-12 col-sm-12 col-xs-12">
               <div class="iconic-input right">
                  <label for="signupInputEmail" class="text-muted">Username</label>
                  <input id="signupInputEmail1" name="email" type="email" placeholder="Enter Username or Email id" class="form-control padding-horizontal-15" required="required" />
                  <i class="fa fa-envelope"></i>
               </div>
               <div class="iconic-input right">
                  <label for="signupInputPassword" class="text-muted">Password</label>
                  <input id="signupInputPassword"  name="password" type="password" placeholder="Password" class="form-control lock-input" required="required" />
                  <i class="fa fa-lock"></i>
               </div>
               
               <button type="submit" class="btn btn-block btn-primary">Sign In</button>
            </div>
         </form>
      </div>
   </div>
   <div class="registration"> Don't have an account!
      <a href="/registration">
         Sign Up Here
      </a>
   </div>
</div>
<!-- Placed js at the end of the document so the pages load faster -->

{!! Html::script('js/jquery-1.10.2.min.js')!!}
{!! Html::script('js/bootstrap.min.js')!!}
{!! Html::script('js/modernizr.min.js')!!}


<!--icheck -->
<script src="js/iCheck/jquery.icheck.html"></script>
{!! Html::script('js/icheck-init.js')!!}

</body>

<!-- Mirrored from www.rvmmedia.com/themeforest/admin-template/myadmin/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 13 Oct 2014 13:29:45 GMT -->
</html>
