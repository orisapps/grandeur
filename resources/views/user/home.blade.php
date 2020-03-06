

<!DOCTYPE html>
<html lang="en">
  <head>
@include('layouts.head')
  </head>

  <body class="nav-md">
   <form method="post" action="./conspage.aspx" id="ctl00" class="form-horizontal form-label-left" data-parsley-validate="">


    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

          @include('layouts.dashboardinc.menubar')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
             <a href="viewstage.aspx?stage=1"> <span class="count_top"><i class="fa fa-user"></i> Direct transactions</span>
              <div class="count">0</div></a>
              <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>-->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <a href="viewstage.aspx?stage=2"><span class="count_top"><i class="fa fa-user"></i> Indirect transactions </span>
              <div class="count green">0</div></a>
              <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <a href="viewstage.aspx?stage=3"><span class="count_top"><i class="fa fa-user"></i> Commissions on indirect transactions</span>
              <div class="count">0</div></a>
            <!--  <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>-->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <a href="viewstage.aspx?stage=4"><span class="count_top"><i class="fa fa-user"></i> Commissions on direct sales </span>
              <div class="count">0</div></a>

              </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <a href=""><span class="count_top"><i class="fa fa-user"></i>  1st gen team mates </span>

              <div class="count"> </div>
            </a>


              <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <a href="tteammates.aspx"><span class="count_top"><i class="fa fa-user"></i> Total team mates</span>
              <div class="count">0</div></a>
             <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <!--<h4> <small>Upline name:<span style="color:#F90">TREASURE CHARLES</span> Upline ID:<span style="color:#EE7600">443059 <br></span></small></h4>-->
                  <h4> <small>Invitation link:<span style="color:#F90">{{url('/')}}/register/{{Auth::user()->username}} <br></span></small></h4>
                  </div>
                  <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                  <form method="post">
                    <input type="text" class="form-control" name="searchkey" id="searchkey" placeholder="Search for...">
                    <span class="input-group-btn">

                               <button onclick="__doPostBack('ctl01','')" class="btn btn-default" type="button">Go!</button>


                          </span>
                          </form>
                  </div>
                </div>
              </div>


                </div>
             <div class="row">
              <div class="clearfix"></div>

                <div class="clearfix"></div>



                <span id="lresponse"></span>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Properties and Details </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>                       </p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Photo</th>
                            <th class="column-title" style="display:none">Property ID </th>
                            <th class="column-title">Property Name </th>
                            <th class="column-title">Description </th>
                            <th class="column-title">Documents </th>
                            <th class="column-title">Location </th>
                            <th class="column-title">State </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Price </th>


                          </tr>
                        </thead>

            <div id="pnlResult">



                        <tbody>
@foreach ($pro as $pros)
                          <tr class="even pointer">
                            <td class=" "><a href="senddetails.aspx?propid=P443">
                        <img alt="" src="{{asset('uploads')}}/{{$pros->image}}" height="60" width="60"></a>
                    </td>
                            <td class=" " style="display:none">P443</td>
                            <td class=" ">{{$pros->name}}</td>
                            <td class=" ">{{$pros->description}}</td>
                            <td class=" "><a href="documents.aspx">{{$pros->document}}</a></td>
                            <td class=" ">{{$pros->location}}</td>

                            <td class=" ">{{$pros->state}}</td>
                            <td class=" ">{{$pros->status}}</td>
                            <td class=" ">{{$pros->price}}</td>

                          </tr>
@endforeach


                        </tbody>






</div>

                      </table>









                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

                  </div>
                </div>
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

        <!-- footer content -->
@include('layouts.dashboardinc.footerscript')
    </form>
  </body>
  </html>
