







<!DOCTYPE html>
<html lang="en">
  <head>
  @include('layouts.head')

  </head>

  <body class="nav-md">

<form method="post" action="./viewpaymentscons.aspx" id="contactForm" novalidate="">



<header class="header-basic-light">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            @include('layouts.dashboardinc.menubar')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><span id="oustanding"></span></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="clearfix"></div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Recent payments  </h2>
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

                    <p>      </p>


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">

                            <th class="column-title">Date registered </th>
                            <th class="column-title">Client Name </th>
                            <th class="column-title">Mobile No </th>
                            <th class="column-title">Property</th>
                            <th class="column-title">Referer CID </th>
                            <th class="column-title">Referer Name </th>
                            <th class="column-title">Total Cost </th>
                            <th class="column-title">Amount paid </th>
                            <th class="column-title">Balance </th>

                          </tr>
                        </thead>

            <div id="pnlResult">





</div>

                      </table>









                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      @include('layouts.dashboardinc.footerscript')
    </form>
  </body>
</html>
