<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
class LoginAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin.adminlogin');
    }
    public function login(Request $request)
    {
       $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required'
       ]);
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

        return redirect()->intended(route('dashboard'));

    }
    return redirect()->back()->withInput($request->only('email','remember'));

    }


}
