<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class LoginController extends Controller
{
 function index()
 {
    return view('login.login');
 }
 function login(Request $request)
 {
    $request->validate([
        'username'=>'required',
        'password'=>'required'
    ],[
        'username.required'=> 'username wajib di isi',
        'password.required'=> 'password wajib di isi'
    ]);
if (Auth::attempt($request->only('username','password'))){
    return redirect('/home');
}
return redirect('/');


    // $infologin =[
    //     'username'=>$request->username,
    //     'password'=>$request->password,
    // ];
    // if(Auth::attempt($infologin)){
    //     if (Auth::user()->role=='admin'){
    //         return redirect('admin');
    //     }
    //     elseif(Auth::user()->role=='petugas'){
    //         return redirect('petugas');
    //     }
    //     elseif(Auth::user()->role=='peminjam'){
    //         return redirect('peminjam');
    //     }
    // }else{
    //     return redirect('')->withErrors('username dan password salah')->withInput();
    // }
 
 }
 function logout(){
    Auth::logout();
    return redirect('');
 }
}
