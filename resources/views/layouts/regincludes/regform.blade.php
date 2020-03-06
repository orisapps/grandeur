<form method="POST" action="{{ route('register') }}">
                   {{ csrf_field() }}
@if(isset($reference))
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_content">
                      <p><!--For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>--> </p>
                      <span class="section">Register New Consultant</span><p><span id="lresponse" style="color:Red;">You are being refered by
                        {{$refer->fullname}}</span></p>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fullname" class="form-control col-md-7 col-xs-12"  name="fullname" placeholder="Full name" required type="text"><!--onkeydown = "capitaliseName()"-->
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Mobile Number <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="mobileno" name="mobile" required  maxlength="11" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth (Optional)<span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="dob"  name="birthday" class="date-picker form-control col-md-7 col-xs-12"  required type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Gender *:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p> Male:
                            <input type="radio" class="flat" name="gender" id="genderM" value="Male" checked="" required />
                            Female:
                            <input type="radio" class="flat" name="gender" id="genderF" value="Female" />
                          </p>
                        </div>
                      </div>

                    @include('layouts.regincludes.country')

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">State <span class="required">*</span> </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="state" class="form-control col-md-7 col-xs-12"  name="state" required type="text" >
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City <span class="required">*</span> </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="city" class="form-control col-md-7 col-xs-12"  data-validate-words="2" name="city" required type="text">
                      </div>
                    </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Address <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="address" required name="address" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>




                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num">Referer ID <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="referer" name="refid" readonly required class="form-control col-md-7 col-xs-12" value="{{$reference}}">
                        </div>

@endif
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Banker</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="bank" name="bank" required class="form-control col-md-7 col-xs-12">
                        </div>                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="bankname" name="bankname" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>




                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="banknumber" name="banknumber" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                           <input name="submit" type="submit" value="Register Now!" class="btn btn-success" />
                          <!--<asp:button id="sendit" CssClass="btn btn-success" onClick="register" Text="Submit"  />-->
                        </div>
                      </div>
                    </div>
</form>
                  </div>
                </div>
