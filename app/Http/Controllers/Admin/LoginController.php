<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;



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
    protected $redirectTo = RouteServiceProvider::ADMIN_HOME; // 変更

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout'); //変更
    }

    public function showLoginForm()
    {
        return view('admin.login');  //変更
    }
 
    protected function guard()
    {
        return Auth::guard('admin');  //変更
    }
    
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();  //変更
        $request->session()->flush();
        $request->session()->regenerate();
 
        return redirect('/admin/login');  //変更
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($credentials)) {
            // ログインしたら管理画面トップにリダイレクト
            return redirect()->route('admin.home');
        }
    }
}
