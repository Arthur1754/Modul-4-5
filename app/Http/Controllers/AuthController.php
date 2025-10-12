<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        //dd($request->all()); 
       $request->validate([
        'username' => 'required',
        'password' => ['required','min:3','regex:/[A-Z]/'],
        
    ], [
        'username.required'=>'username tidak boleh kosong',
        'password.required'=>'password tidak boleh kosong',
        'password.min'=>'password minimal 3 karakter',
        'password.regex' => 'Password harus mengandung huruf kapital.',
    ]);
        $username = $request->username;
        $password = $request->password;

        if ($username === 'Steven' && $password === 'Anakbaik') {
            return view('login')->with('success', 'Selamat datang, ' . $username . '!');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah, silakan coba lagi.');
        }
        return view('home', compact('username', 'last_login'));
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

