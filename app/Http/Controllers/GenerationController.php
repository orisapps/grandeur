<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\User;


class GenerationController extends Controller
{
    //

public function __construct()
    {
        $this->middleware('auth');
    }

    public function generationone()
            {
              $gen = User::where('gen01',  Auth::user()->username)->get();
                    return view('user.teammate01')->with(array(
                        'gen'=> $gen,

                          ));
        }

        public function generationtwo()
        {
          $gen = User::where('gen02',  Auth::user()->username)->get();
                return view('user.teammate02')->with(array(
                    'gen'=> $gen,

                      ));
        }

        public function generationthree()
        {

              $gen = User::where('gen03',  Auth::user()->username)->get();
                return view('user.teammate03')->with(array(
                    'gen'=> $gen,
                      ));
        }

        public function generationfour()
        {

              $gen = User::where('gen04', Auth::user()->username)->get();

                return view('user.teammate04')->with(array(
                    'gen'=> $gen,

                      ));
        }

        public function generationfive()
        {

              $gen = User::where('gen05', Auth::user()->username)->get();
                return view('user.teammate05')->with(array(
                    'gen'=> $gen,

                      ));
        }
}
