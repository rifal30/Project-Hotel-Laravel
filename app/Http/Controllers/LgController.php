<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LgController extends Controller
{

    // public function index(){
    //     return view('login.lgTampil');
    // }

    // public function authenticate(Request $request){

    //     $credentials = $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     if(Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('/tampil');
    //     }

    //     return back()->with('loginError', 'Login Gagal');
    // }

    public function __construct(){
        $this->middleware('guest')->except('logOut');
    }

    public function halamanLogin(){
        return view('login.lgTampil');
    }

    public function Login(Request $request){
        $credentials=$request->only(['email','password']);
        if(Auth::attempt($credentials)){
            return redirect('/');
        }
        return redirect('/lgTampil')->with('sukses','Login Gagal!');
    }

    public function halamanRegister(){
        return view('register.rgTambah');
    }
}
