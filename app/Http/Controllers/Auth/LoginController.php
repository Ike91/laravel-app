<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        if(Auth::attempt(['email' => $email, 'password' => $pass, 'role' => 0])){

            Session::flash('success','Welcome '.Auth::user()->name);
            return redirect()->route('adminprofile');

        }elseif(Auth::attempt(['email' => $email, 'password' => $pass, 'role' => "Tutor"])){

            Session::flash('success','Welcome '.Auth::user()->name);
            return redirect()->route('teamprofile');

        }elseif(Auth::attempt(['email' => $email, 'password' => $pass, 'role' => "Varsity"])){

            Session::flash('success','Welcome '.Auth::user()->name);
            return redirect()->route('studentprofile');

        }elseif(Auth::attempt(['email' => $email, 'password' => $pass, 'role' => "High"])){

            Session::flash('success','Welcome '.Auth::user()->name);
            return redirect()->route('basicprofile');
            
        }else
        {
             Session::flash('error','Sorry! Try Again. It seems your login credential is not correct.');
             return redirect()->back();
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

     public function login(Request $request){
         $message = array(
             'required.email'    =>  'This is required',
             'required.password' =>  'This is required',
         );
         $this->validate($request,[
             'email' =>  'required',
             'password'  =>  'required',
             
         ],$message);
         $email = $request->email;
         $pass = $request->password;
         
         if(Auth::attempt(['email' => $email, 'password' => $pass, 'role' => "Admin"])){
             Session::flash('success','Welcome '.Auth::user()->name);
        
             return redirect()->route('adminprofile');
         }elseif(Auth::attempt(['email' => $email, 'password' => $pass, 'role' => "Tutor"])){
             Session::flash('success','Welcome '.Auth::user()->name);
       
             return redirect()->route('teamprofile');
         }elseif(Auth::attempt(['email' => $email, 'password' => $pass, 'role' => "Varsity"]))
         {
             Session::flash('success','Welcome '.Auth::user()->name);
        
             return redirect()->route('studentprofile');
         }elseif(Auth::attempt(['email' => $email, 'password' => $pass, 'role' => "High"])){

            Session::flash('success','Welcome '.Auth::user()->name);
            return redirect()->route('basicprofile');
            
        }else
        {
             Session::flash('error','Sorry! Try Again. It seems your login credential is not correct.');
             return redirect()->back();
         }

     }
}
