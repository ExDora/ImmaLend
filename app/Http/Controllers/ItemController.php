<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "ImmaLend - Item List";

        return view('items.index', [
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "ImmaLend - Create Item";

        return view('items.create', [
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = "ImmaLend - Store Item";

        return view('items.store', [
            'title' => $title
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "ImmaLend - Show Item";

        return view('items.show', [
            'title' => $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "ImmaLend - Edit Item";

        return view('items.edit', [
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data barang dengan ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Menghapus data barang dengan ID: {$id}";
    }
}
