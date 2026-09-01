<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "ImmaLend - Lending List";

        return view('lendings.index', [
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "ImmaLend - Create Lending";

        return view('lendings.create', [
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = "ImmaLend - Store Lending";

        return view('lendings.store', [
            'title' => $title
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "ImmaLend - Show Lending";

        return view('lendings.show', [
            'title' => $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "ImmaLend - Edit Lending";

        return view('lendings.edit', [
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data peminjaman dengan ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Menghapus data peminjaman dengan ID: {$id}";
    }
}
