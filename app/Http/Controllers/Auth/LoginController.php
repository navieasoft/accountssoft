<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Carbon\Carbon;

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

    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);
        $email=$request->email;
        $password=$request->password;
        $validData=User::where('email',$email)->first();
        $password_check=password_verify($password,@$validData->password);
        
        if($password_check==false){
            return redirect()->back()->with('message','Email or password does not match');
        }
        if($validData->status==0){
            return redirect()->back()->with('message','Sorry! You are deactive');
        }
        if(Auth::attempt(['email'=>$email,'password'=>$password])){           

            return redirect()->route('login');
        }
    } 

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
