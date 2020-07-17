<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'email' => 'required|email',
            'name' => 'required|min:3|max:50',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ));

        $user = new User([
            'name'      =>  $request->get('name'),
            'email'     =>  $request->get('email'),
            'password'  =>  bcrypt($request->get('password')),
        ]);
        $user->save();
        return view('login');
    }

}
