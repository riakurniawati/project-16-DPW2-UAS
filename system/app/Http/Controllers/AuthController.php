<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  function showLogin(){

    return view('login');

  }

  function loginProcess(){
    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])){
      return redirect('admin/dashboard')->with('success', 'login berhasil');
    }else{
      return back()->with('danger','login anda gagal');
    }

  }

  function logout(){
    Auth::logout();
    return redirect('login');

  }

  function registration(){

  }

  function forgotPassword(){

  }
}