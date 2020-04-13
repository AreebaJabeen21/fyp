<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = '/index';
        protected function redirectTo(){

        if(Auth::user()->role == 'Donor')
        {
            return 'index';
        }
        else if(Auth::user()->role == 'admin'){
            return 'admin';

        }
        else
        {
            return 'product';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {

        session()->put('previousUrl',url()->previous());
        return view('auth.login');
    }

    // public function redirectTo()
    // {
    //     return str_replace(url('/'), '',session()->get('previousUrl','/'));
    // }
}


