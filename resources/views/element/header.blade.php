<div class="header-section">
   <!--toggle button start-->

   <!--toggle button end-->
   <!--notification menu start -->
   <!--notification menu end -->
   <!--notification menu start -->
   <div class="nav navbar-nav">
      <form action="{{url('search')}}" method="GET" class="form-inline" role="form">
         <ul class="notification-menu">
            <li>
               <input type="search_event" name="search_box" class="form-control" value="{{ isset($searchtext) ? $searchtext : '' }}" id="searchEvent" placeholder="Search Event">
            </li>
            <li>
               <button type="submit" id="searchEventBtn" class="btn btn-default btn-circle btn-outline"><i class="fa fa-search"></i></button>
            </li>
         </ul>
      </form>
   </div>

   <?php $loggedUser = Session::get('user'); ?>
   <div class="menu-right">
      <ul class="header-nav nav navbar-nav navbar-right">

         <li>
            <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

               @if(Session::has('user'))
               {{$loggedUser->name}}
               @else
               <a href="/login">Login</a>
               @endif </span>

            </a>
            @if(Session::has('user'))
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
               <li>
                  <a href="profile.html">
                     <i class="fa fa-user"></i> Edit Profile
                  </a>
               </li>

               <li class="divider"></li>
               <li>
                  <a href="/logout">
                     <i class="fa fa-sign-out"></i> Log Out
                  </a>
               </li>
            </ul>
            @endif
         </li>

      </ul>

   </div>

   <!--notification menu end -->
</div>
<div class="logo">
   <a href="/homepage">
      <img src="../images/logo_icon.png" alt="" />
   </a>
</div>
<div class="logo-icon text-center">
   <a href="index.html">
      <img src="../images/logo_icon.png" alt="" />
   </a>
</div>