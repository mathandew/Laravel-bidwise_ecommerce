<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class AuthBController extends Controller
{
    public function index(){
        return view('backend.auth.login');
    }

    // public function register(){
    //     return view('backend.auth.register');
    // }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required|unique:users|email',
    //         'password' => 'required',
    //     ]);

    //     $user = new User;
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = bcrypt($request->password);
    //     $user->save();

    //     // for signUp porcess
    //     if (Auth::attempt($request->only('email', 'password'))) {
    //         return redirect('admin/dashboard');
    //     }
    //     return redirect('admin')->with('status', 'Error');

    // }


    public function login(Request $request)
    {
        // dd($request->all());
        // validation code
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // login code

        if (\Auth::attempt($request->only('email', 'password'))) {
            return redirect('admin/dashboard');
        }
        return redirect('admin')->with('status', 'email or password is invalid');
    }


    public function logout(){
        Auth()->logout();
        return redirect('admin');
    }

}
