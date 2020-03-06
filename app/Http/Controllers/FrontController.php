<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Package;
use Carbon\Carbon;


class FrontController extends Controller
{
    public function index()
    {

    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'walletid' => 'required'
        ]);

        $walletid = $request->walletid;

        return view('auth.register',compact('walletid'));
    }

    public function referRegister($reference)
    {
      $refer = User::where('username', $reference)->first();
      if(isset($reference) && $refer )
        {
              return view('auth.register',compact('reference', 'refer'));
        }
        else {
            return redirect(url('/login'));
        }

    }

    public function authorization()
    {
    	if(Auth::user()->tfver == '1' && Auth::user()->status == '1' && Auth::user()->emailv == 1 && Auth::user()->smsv == 1)
            {
                return redirect('home');
            }
            else
            {
              return view('auth.notauthor');
          }
      }

      public function sendemailver()
      {
        $user = User::find(Auth::id());
        $chktm = $user->vsent+1000;
        if ($chktm >time())
        {
            $delay = $chktm-time();
            return back()->with('alert', 'Please Try after '.$delay.' Seconds');
        }
        else
        {
            $code = str_random(8);
            $msg = 'Your Verification code is: '.$code;
            $user['vercode'] = $code ;
            $user['vsent'] = time();
            $user->save();
            send_email($user->email, $user->username, 'Verification Code', $msg);
            return back()->with('success', 'Email verification code sent succesfully');
        }

    }
    public function sendsmsver()
    {
        $user = User::find(Auth::id());
        $chktm = $user->vsent+1000;
        if ($chktm >time())
        {
            $delay = $chktm-time();
            return back()->with('alert', 'Please Try after '.$delay.' Seconds');
        }
        else
        {
            $code = str_random(8);
            $sms =  'Your Verification code is: '.$code;
            $user['vercode'] = $code;
            $user['vsent'] = time();
            $user->save();

            send_sms($user->mobile, $sms);
            return back()->with('success', 'SMS verification code sent succesfully');
        }


    }

    public function emailverify(Request $request)
    {

        $this->validate($request, [
            'code' => 'required'
        ]);
        $user = User::find(Auth::id());

        $code = $request->code;
        if ($user->vercode == $code)
        {
         $user['emailv'] = 1;
         $user['vercode'] = str_random(10);
         $user['vsent'] = 0;
         $user->save();

         return redirect('home')->with('success', 'Email Verified');
     }
     else
     {
       return back()->with('alert', 'Wrong Verification Code');
   }

}

public function smsverify(Request $request)
{

    $this->validate($request, [
        'code' => 'required'
    ]);
    $user = User::find(Auth::id());

    $code = $request->code;
    if ($user->vercode == $code)
    {
     $user['smsv'] = 1;
     $user['vercode'] = str_random(10);
     $user['vsent'] = 0;
     $user->save();

     return redirect('home')->with('success', 'SMS Verified');
 }
 else
 {
   return back()->with('alert', 'Wrong Verification Code');
}

}


public function forgotPass(Request $request)
{
    $this->validate($request,
        [
            'email' => 'required',
        ]);
    $user = User::where('email', $request->email)->first();

    if ($user == null)
    {
        return back()->with('alert', 'Email Not Available');
    }
    else
    {
        $to =$user->email;
        $name = $user->name;
        $subject = 'Password Reset';
        $code = str_random(30);
        $message = 'Use This Link to Reset Password: '.url('/').'/reset/'.$code;

        DB::table('password_resets')->insert(
            ['email' => $to, 'token' => $code, 'created_at' => date("Y-m-d h:i:s")]
        );

        send_email($to, $name, $subject, $message);

        return back()->with('success', 'Password Reset Email Sent Succesfully');
    }

}

public function resetLink($code)
{
    $reset = DB::table('password_resets')->where('token', $code)->orderBy('created_at', 'desc')->first();
    if ( $reset->status == 1)
    {
        return redirect()->route('login')->with('alert', 'Invalid Reset Link');
    }
    {
        return view('auth.passwords.reset', compact('reset'));
    }

}

public function passwordReset(Request $request)
{
    $this->validate($request,
        [
            'email' => 'required',
            'token' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

    $reset = DB::table('password_resets')->where('token', $request->token)->orderBy('created_at', 'desc')->first();
    $user = User::where('email', $reset->email)->first();
    if ( $reset->status == 1)
    {
        return redirect()->route('login')->with('alert', 'Invalid Reset Link');
    }
    else
    {
        if($request->password == $request->password_confirmation)
        {
            $user->password = bcrypt($request->password);
            $user->save();

            DB::table('password_resets')->where('email', $user->email)->update(['status' => 1]);

            $msg =  'Password Changed Successfully';
            send_email($user->email, $user->username, 'Password Changed', $msg);
            $sms =  'Password Changed Successfully';
            send_sms($user->mobile, $sms);

            return redirect()->route('login')->with('success', 'Password Changed');
        }
        else
        {
          return back()->with('alert', 'Password Not Matched');
      }
  }
}



}
