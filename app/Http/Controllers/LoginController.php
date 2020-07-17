<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            Session::put('variableName', $request->get('email'));
            return view('home');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }

    function logout()
    {
        Auth::logout();
        return redirect('main');
    }

}
