<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use\App\Propertie;
use \App\Gen1;
use \App\Gen2;
use \App\Gen3;
use \App\Gen4;
use \App\Gen5;

class DashboardController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {       $pro = Propertie::get();
          $gen = Gen1::where('refid', '=',
              Auth::user()->username)->get();

          return view('user.home', compact( 'gen', 'pro'));

  }


  public function profile()
  {

        return View('user.profile');

  }

  public function myclient()
  {

        return View('user.myclient');
  }




  public function transactions()
  {

        return View('user.transaction');

  }

  public function faq()
  {

        return View('user.faq');

  }
}
