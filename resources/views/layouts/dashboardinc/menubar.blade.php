<div class="navbar nav_title" style="border: 0;">
  <a href="{{ url('/home') }}" class="site_title"><i class="fa fa-tachometer" aria-hidden="true"></i>
<span>Grandeur <br> Gardens </span></a>
</div>

<div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile">
  <div class="profile_pic">
    <img src="../uploads/gravatar.jpg" alt="{{ Auth::user()->fullname }}" class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>{{ Auth::user()->fullname }}</h2>
  </div>
</div>
<!-- /menu profile quick info -->

<br />
﻿            <br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
    <li><a href="{{ url('/home') }}" ><i class="fa fa-home"></i> Dashboard </a>
      </li>

      <li><a href="{{ url('/home') }}"><i class="fa fa-adjust"></i> Properties </a></li>


      <li><a ><i class="fa fa-sitemap"></i> Team mates <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ url('/home/generation1') }}">1st Generation</a></li>
          <li><a href="{{ url('/home/generation2') }}">2nd Generation</a></li>
          <li><a href="{{ url('/home/generation3') }}">3rd Generation</a></li>
          <li><a href="{{ url('/home/generation4') }}">4th Generation</a></li>
          <li><a href="{{ url('/home/generation5') }}">5th Generation</a></li>

        </ul>
      </li>
      <li><a href="{{url('/home/myclient')}}"><i class="fa fa-adjust"></i> My client </a></li>

            <li><a href="{{url('/home/transactions')}}"><i class="fa fa-table"></i> Transactions </a></li>

              <li><a ><i class="fa fa-sitemap"></i> Commissions <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
              <li><a href="viewcomspaidcons.aspx"><i class="fa fa-table"></i> Paid Commissions </a></li>
    <li><a href="viewcomspendingcons.aspx"><i class="fa fa-table"></i> Pending Commissions </a></li>
    </ul>
    </li>
    <li><a href="sendsmscons.aspx"><i class="fa fa-envelope"></i>Send BulkSMS</a>

      </li>
      <li><a href="{{url('/home/profile')}}"><i class="fa fa-envelope"></i>My Profile</a>

      </li>

<li><a href="{{url('/home/faq')}}"><i class="fa fa-phone"></i>Frequently Asked Questions</a>
      </li>


      <li><a href="documents.aspx"><i class="fa fa-envelope"></i>Land Documents</a>

      </li>
           <li><a href="support.aspx" >Contact support </a></li>





        </ul>
      </li>
                      </ul>
  </div>

</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
  <a href="settings.aspx" data-toggle="tooltip" data-placement="top" title="Settings">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Lock">
    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
  </a>
  <a href="{{ url('logout') }}" data-toggle="tooltip" data-placement="top" title="Logout">
    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
  </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>
<!-- top navigation -->
<div class="top_nav">
<div class="nav_menu">
<nav>
  <div class="nav toggle">
    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
  </div>

  <ul class="nav navbar-nav navbar-right">
    <li class="">
      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <img src="" alt="">{{ Auth::user()->fullname }}<span id="memberid"></span>
        <span class=" fa fa-angle-down"></span>
      </a>
      <ul class="dropdown-menu dropdown-usermenu pull-right">
        <li><a href="{{url('/home/profile')}}"> Profile</a></li>
        <li>
          <a href="settings.aspx">
            <!--<span class="badge bg-red pull-right">50%</span>-->
            <span>Settings</span>
          </a>
        </li>
        <li><a href="javascript:;">Help</a></li>
        <li>
          <a href="{{ url('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
        </li>
      </ul>
    </li>

    <li role="presentation" class="dropdown">
     <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
      <!--  <i class="fa fa-envelope-o"></i>-->
        <span class="badge bg-green">{{ Auth::user()->cid }}</span>
      </a><!--
      <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
        <li>
          <a>
            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
            <span>
              <span>John Smith</span>
              <span class="time">3 mins ago</span>
            </span>
            <span class="message">
              Film festivals used to be do-or-die moments for movie makers. They were where...
            </span>
          </a>
        </li>
        <li>
          <a>
            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
            <span>
              <span>John Smith</span>
              <span class="time">3 mins ago</span>
            </span>
            <span class="message">
              Film festivals used to be do-or-die moments for movie makers. They were where...
            </span>
          </a>
        </li>
        <li>
          <a>
            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
            <span>
              <span>John Smith</span>
              <span class="time">3 mins ago</span>
            </span>
            <span class="message">
              Film festivals used to be do-or-die moments for movie makers. They were where...
            </span>
          </a>
        </li>
        <li>
          <a>
            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
            <span>
              <span>John Smith</span>
              <span class="time">3 mins ago</span>
            </span>
            <span class="message">
              Film festivals used to be do-or-die moments for movie makers. They were where...
            </span>
          </a>
        </li>
        <li>
          <div class="text-center">
            <a>
              <strong>See All Alerts</strong>
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </li>
      </ul>
    </li>
-->              </ul>
</nav>
</div>
</div>
