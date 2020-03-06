<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
     protected function validator(array $data)
       {
           return Validator::make($data, [
               'fullname' => 'required|string|max:255',
               'email' => 'required|string|email|max:255|unique:users',
               'mobile' => 'required|string',

           ]);
       }

       /**
        * Create a new user instance after a valid registration.
        *
        * @param  array  $data
        * @return \App\User
        */
       protected function create(array $data)
       {

         if(isset($data['refid']))
         {
             $refer = User::where('username', $data['refid'])->first();
             $refuser = $refer->username;


             if ($refer->refid === $refer->gen01)
              {
                $twogen = $refer->gen01;
             }

             if ($refer->refid === $refer->gen01 && $refer->gen02 === $refer->gen02)
             {
               $threegen = $refer->gen02;
             }


             if ($refer->refid === $refer->gen01 && $refer->gen03 === $refer->gen03)
              {
               $fourgen = $refer->gen03;
             }

             if ($refer->refid === $refer->gen01 && $refer->gen04 === $refer->gen04)
             {
               $fivegen = $refer->gen04;
             }




      $createuser =  User::create([
               'fullname' => $data['fullname'],
               'mobile' => $data['mobile'],
               'email' => $data['email'],
              'username' => $data['username'] = str_random(8),
               'password' => $data['password'] = str_random(12),
               'birthday' => $data['birthday'],
               'gender' => $data['gender'],
               'address' => $data['address'],
               'city' => $data['city'],
               'state' => $data['state'],
               'country' => $data['country'],
               'bank' => $data['bank'],
               'bankname' => $data['bankname'],
               'banknumber' => $data['banknumber'],
               'status' => 1,
               'refid' => $data['refid'],
               'gen01' => $refuser,
               'gen02' => $twogen,
               'gen03' => $threegen,
               'gen04' => $fourgen,
               'gen05' => $fivegen,


           ]);


Session::flash('success', 'Your Registration was successfully !. Please check your email for login details.');

Mail::to($data['email'])->send(new WelcomeMail($createuser));

return $createuser;
}
       }
}
