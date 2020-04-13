<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
//    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');


    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {

        $this->validate($request,[

            'email'=> 'required|email',
            'password'=>'required',
            $messages = [
                'email.exists' => 'These credentials do not match our records.',
            ]
        ]);

        if (Auth::guard('admin')->attempt($request->only('email','password'),$request->filled('remember')));
        {
            return redirect()->route('home')->with('success','You are Logged in as Admin!');
        }

        return $this->loginFailed();
    }

    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }

    public function logout()
    {

        Auth::guard('admin')->logout();
        return redirect()
            ->route('login')
            ->with('success','Admin has been logged out!');
    }

}
