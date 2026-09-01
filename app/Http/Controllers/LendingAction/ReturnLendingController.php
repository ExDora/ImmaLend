<?php

namespace App\Http\Controllers\LendingAction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReturnLendingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $title = "ImmaLend - Return Lending";

        return view('lendings.return', [
            'title' => $title
        ]);
    }
}
