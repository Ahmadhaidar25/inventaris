<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function register()
    // {
    //     return view('auth.register');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function post_register(Request $request)
    // {
    //     $register = new User;
    //     $register->name = $request->name;
    //     $register->username = $request->username;
    //     $register->password = Hash::make($request->password);
    //     $register->gander = $request->gander;
    //     $register->level = $request->level;

    //     alert()->success('Berhasil');
    //     $register->save();
    //     return redirect('/');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post_login(Request $request)
    {
     $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',

    ],[

      'username.required' => 'Username wajib di isi',
      'password.required' => 'Password wajib di isi'
    ]);
      
     if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        alert()->success('Login Berhasil');
        return redirect()->intended('dashboard');
    }

    alert()->error('Login Gagal','Silahkan Cek Username Dan Password Anda');


    return redirect('login');
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        alert()->success('Berhasil');
        return redirect('login');
    }

   

  
}
