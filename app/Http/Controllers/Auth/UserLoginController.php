<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function create()
    {
        $title = "ImmaLend - User Login";

        return view('auth.user-login', [
            'title' => $title
        ]);
    }
    
    Public function store(Request $request)
    {
        $title = "ImmaLend - User Login";

        return view('auth.user-login', [
            'title' => $title
        ]);
    }
}
