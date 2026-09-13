<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    /**
     * Menampilkan halaman login user
     */
    public function index()
    {
        return view('auth.user-login'); 
    }
}