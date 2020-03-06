
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('layouts.head')
  </head>

  <body class="nav-md">
  <form method="post" action="editprofile.aspx" id="ctl00" class="form-horizontal form-label-left" data-parsley-validate="" enctype="multipart/form-data">

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





            </div>


            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">



                      <p><!--Responses here <code>parsleyJS</code> check out in the <a href="form.html">form page</a>-->
                      </p>
                      <span class="section">Edit profile details</span> <p><span id="lresponse" style="color:Red;"></span></p>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Profile Picture <span class="required">*</span>
                        </label>
                        <div  style="margin:0 auto">
                        <div class="col-md-6 col-sm-6 col-xs-12" >

        <!--content/images/all/09/inetrnetradio4.jpg-->

        <div class="profile_pic" style="width:100%">
                  <img src="" class="img-circle profile_img" alt="avatar" name="blah" id="blah" width="10px" height ="Auto">
          </div>




          <input name="File2" type="file" id="File2" class="form-control" onchange="readURL(this);" />
                        </div>
                      </div></div></div>



<script>
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(200)
						.height(200)

                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>




                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="text" id="fullname" class="form-control col-md-7 col-xs-12"  name="fullname" value ="{{Auth::user()->fullname}}" required>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Mobile Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="mobileno" name="mobileno" required data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value ="{{Auth::user()->mobile}}">
                                                </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required class="form-control col-md-7 col-xs-12" value ="{{Auth::user()->email}}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">New password <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="password1" name="Password1" class="form-control col-md-7 col-xs-12" value =""  placeholder="type here only if you intend to change your password">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm password <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="password2" name="Password2" class="form-control col-md-7 col-xs-12" value ="" data-validate-words="5">
                        </div>
                      </div>






                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="dob"  name="dob" class="date-picker form-control col-md-7 col-xs-12" required type="text" value ="{{Auth::user()->birthday}}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Gender *:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                      <p>
                        Male:
                        <input type="radio" class="flat" name="gender" id="genderM" value="{{Auth::user()->gender}}" /> Female:
                        <input type="radio" class="flat" name="gender" id="genderF" value="{{Auth::user()->gender}}" />
                      </p>

                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Referer ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="referer" name="referer" required class="form-control col-md-7 col-xs-12" readonly value ="{{Auth::user()->refid}}">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="address" required name="address" class="form-control col-md-7 col-xs-12">{{Auth::user()->address}}</textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="city" class="form-control col-md-7 col-xs-12"  data-validate-words="2" name="city"  required type="text" value ="V{{Auth::user()->city}}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">State <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="state" class="form-control col-md-7 col-xs-12"  data-validate-words="" name="state" required type="text" value ="{{Auth::user()->state}}">
                        </div>
                      </div>


                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Country</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" data-validate-words="" value ="{{Auth::user()->country}}">
                        </div>
                        </div>
                      <!--<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Country</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="country" id="country">
                            <option value="Nigeria">Nigeria</option>
                            <option value ="Others">Others</option>

                          </select>
                        </div>
                      </div>-->


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Member's Level</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label class="form-control" id="level" value="1">Level 1</label>



                        </div>
                      </div>

                    

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Banker</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="Banker" name="Banker" value ="{{Auth::user()->bank}}" required class="form-control col-md-7 col-xs-12">
                        </div>                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="Accountname" name="accountname" value ="{{Auth::user()->bankname}}" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="Accountno" name="accountno"  value ="{{Auth::user()->banknumber}}" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tax Number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="taxno" name="taxno"  value ="" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>


                         <button type="Submit" name="SubmitBtn" id="SubmitBtn" class="btn btn-success">Submit</button>
                          <!--<asp:button id="sendit" CssClass="btn btn-success" onClick="register" Text="Submit"  />-->
                        </div>
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
