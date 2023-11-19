<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginPost(Request $request)
    {
        // dd($request->all());
        $val = $request->validate([
            'email' => 'required',
            'password'=>'required|min:6'
        ]);
        if (Auth::attempt($val)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/portfilio');
        }else{
            return redirect('login');
        }
    }
    public function register()
    {
        return view('auth.register');
    }
    public function registerPost(Request $request)
    {
        $val = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'confirmed|required|min:6',
            'phone' => 'required'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
        ]);
        return redirect()->route('login');
    }
}
