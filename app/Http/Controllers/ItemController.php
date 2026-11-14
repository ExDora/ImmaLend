<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\ItemRequest;

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

        $item = Item::with('category')->findOrFail($id);

        return view('items.show', [
            'title' => $title,
            'item' => $item,
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
     * Display the request item form.
     */
    public function requestItemForm()
    {
        $title = "ImmaLend - Request Item";

        return view('items.request', [
            'title' => $title
        ]);
    }
    
    /**
     * Validate and receive the request item form.
     */
       public function submitRequest(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'class' => ['required', 'string', 'max:50'],
            'item_name' => ['required', 'string', 'max:100'],
            'category' => ['required', 'string', 'max:50'],
            'reason' => ['required', 'string', 'max:500'],
            'terms' => ['accepted'],
        ], [
            'terms.accepted' => 'You must confirm that you have read the Request Conditions.',
        ]);

        ItemRequest::create([
            'user_id' => $request->user()->id,
            'requester_name' => $validated['name'],
            'class_name' => $validated['class'],
            'item_name' => $validated['item_name'],
            'category' => $validated['category'],
            'reason' => $validated['reason'],
        ]);

        return redirect()
            ->route('items.request')
            ->with('success', 'Your request has been submitted successfully.');
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
