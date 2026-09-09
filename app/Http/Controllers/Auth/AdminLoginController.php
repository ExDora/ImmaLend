<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function create()
    {
        $title = "ImmaLend - Admin Login";

        return view('auth.admin-login', [
            'title' => $title
        ]);
    }
    
    public function store(Request $request)
    {
        $title = "ImmaLend - Admin Login";

        return view('auth.admin-login', [
            'title' => $title
        ]);
    }
}
