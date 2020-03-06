@extends('layouts.app')

@section('content')

<form method="POST" action="{{ url('login') }}" id="loginform" class="form-horizontal" role="form">
{{ csrf_field() }}
    <div class="container">


        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                                <div style="font-size:26px" align="center"> <div class="profile_pic" style="width:100%">
                                <img alt="" src="" height="100" width="auto"  alt="avatar" name="blah" id="blah">
@include('layouts.messages')
          </div>
        Grandeur Gardens Realtors Group </div>
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color: #1D2547">
                        <div class="panel-title" style="color:#FFF">Consultants Log In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="forgotpassword.aspx"><span style="color:#FFF">Forgot password? </span></a></div>
                    </div>
<span style="padding-left:20px"><span id="lresponse" style="color:#CC9900;"></span></span>

                    <div style="padding-top:30px" class="panel-body" >


                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login" type="text"
                                               class="form-control{{ $errors->has('cid') || $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="login" value="{{ old('cid') ?: old('email') }}" placeholder="Enter CID number or Email address" required autofocus>
                                        @if ($errors->has('cid') || $errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('cid') ?: $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}"  placeholder="Enter Password"  required autofocus >

                                    </div>



                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">



                                     <input id="btn-canLogin" type="reset" value="    Cancel    " name="btn-canLogin"  class="btn btn-primary"    />



                                     <input name="sendNewSms" type="submit" id="sendNewSms" value="    LOGIN    " class="btn btn-success" style="background-color: &lt;% = themecolor %>" />
<br><br>


                                    </div>


                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
              <!--                          <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account!
                                        <a href="#" onClick="$('#loginbox').hide(); $('#prequest').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
              -->                      </div>
                                </div>




                        </div>
                    </div>
@endsection
