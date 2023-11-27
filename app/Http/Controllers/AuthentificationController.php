<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthentificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('Authentification.register');
        
    // }

    public function acceuil()
    {
        return view('acceuil');
        
    }

    public function register()
    {
        return view('Authentification.register');
        
    }

    public function index()
    {
        return view('dashboardadmin');
        
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['username'  => $request->username, 'password' => $request->password])) {
            return redirect()->route('dashboardadmin');
        }
        return view('loginadmin')->with('status', 'identifiant ou mot de passe incorrect');
    }

    public function logout()
    {
        Auth::logout();
        return view('welcome');
    }
    /**
     * Show the form for creating a new resource.
     */
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destro(string $id)
    {
        //
    }
}
