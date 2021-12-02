<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
  function showlogin(){
    return view('template.admin.login');
  }

  function loginprocess(){
    if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
      return redirect('admin/dashboard')->with('success', 'Login Berhasil');
    }else{
      return back()->with('danger', 'Login gagal, Silahkan cek email dan password anda');
    }
  }

  function logout(){
    Auth::logout();
    return redirect('login');
  }

}