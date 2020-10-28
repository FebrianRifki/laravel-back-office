<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;
    protected $username = 'username';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    public function username(){
        return 'username';
    }
    
    public function getLogin(){
        return view('pages/adminLogin');
    }

    public function postLogin(Request $request){
        
        $credentials = $request->only('username', 'password'); 
        
        request()->validate([
            'username' => 'required',
            'password' => 'required',
            ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return  redirect('admin/login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function registration(){

    }

    public function postRegistration(){

    }

    public function index(){

    }

    public function logout(){
        
        Auth::logout();
        
        return redirect('admin/login')->with('status', 'You are now logout!');
    
    }
}
