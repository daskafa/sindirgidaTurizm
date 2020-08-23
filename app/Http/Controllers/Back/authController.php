<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class authController extends Controller
{
    public function login(){
      return view('back.auth.login');
    }

    public function loginPost(Request $request){
      if (Auth::attempt([
        'username' => $request->username,
        'password' => $request->password
        ])) {
        return redirect()->route('dashboard');
      }
      return redirect()->route('login')->withErrors('Email veya Şifre Hatalı!');
    }

    public function logout(){
      Auth::logout();
      return redirect()->route('homepage');
    }

}//
