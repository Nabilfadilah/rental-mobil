<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credential = $request->validate(
            [
                'email' => 'required | email',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email tidak boleh kosong!',
                'email.email' => 'Format Email salah!',
                'password.required' => 'Password tidak boleh kosong!',
            ]
        );

        // authentication login user
        if (Auth::attempt($credential)) {
            // yang menyimpan informasi loginya
            $request->session()->regenerate();

            // arahkan ke home
            return redirect()->route('home');
        }
        return back()->withErrors([
            'email' => 'Autentikasi Gagal!',
        ])->onlyInput('email');
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
