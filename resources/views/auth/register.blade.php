@include('layouts.regincludes.head')
  <body class="nav-md">
   <div  id="ctl00" class="form-horizontal form-label-left" data-parsley-validate="">


    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/')}}" class="site_title"><i class="fa fa-paw"></i> <span>Grandeur Gardens Realtors Group
							</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!-- menu profile quick info -->
@include('layouts.regincludes.navmenu')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">

          <!-- /top tiles -->


                <div class="clearfix"></div>

                  @include('layouts.regincludes.regform')

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          <div class="row"></div>


          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">



              <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12"></div>

              </div>
              <div class="row">


                <!-- Start to do list -->
                <!-- End to do list -->

                <!-- start of weather widget -->
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->



  @include('layouts.regincludes.footerscript')
</div>
  </body>
</html>
