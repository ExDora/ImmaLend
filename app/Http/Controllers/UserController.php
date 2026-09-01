<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "ImmaLend - Homepage";

        return view('users.index', [
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "ImmaLend - Create User";

        return view('users.create', [
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = "ImmaLend - Store User";

        return view('users.store', [
            'title' => $title
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "ImmaLend - Show User";

        return view('users.show', [
            'title' => $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "ImmaLend - Edit User";

        return view('users.edit', [
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data pengguna dengan ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Menghapus data pengguna dengan ID: {$id}";
    }
}
