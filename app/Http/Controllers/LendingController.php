<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Lending;

class LendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "ImmaLend - Lending List";

        return view('public.lendings.index', [
            'title' => $title
        ]);
    }

    public function adminIndex()
    {
        return view('admin.lendings.admin-index', [
            'title' => 'Borrowing Requests'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('public.lendings.create', [
            'title' => 'ImmaLend - Create Lending',
            'items' => Item::where('available', '>', 0)->orderBy('name')->get(),
            'selected' => $request->query('item'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'item_id' => ['required', 'exists:items,id'],
            'amount' => ['required', 'integer', 'min:1'],
            'borrow_date' => ['required', 'date', 'after_or_equal:today'],
            'return_date' => ['required', 'date', 'after_or_equal:borrow_date'],
            'reason' => ['required', 'string', 'max:1000'],
        ]);

        $item = Item::findOrFail($data['item_id']);

        if ($data['amount'] > $item->available) {
            return back()
                ->withErrors(['amount' => "Stok tersedia hanya {$item->available}."])
                ->withInput();
        }

        Lending::create([
            'user_id' => $request->user()->id,
            'item_id' => $item->id,
            'amount' => $data['amount'],
            'borrow_at' => $data['borrow_date'],
            'return_at' => $data['return_date'],
            'reason' => $data['reason'],
            'status' => 'pending',
        ]);

        return redirect()->route('lendings.index')
            ->with('success', 'Your request has been submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "ImmaLend - Show Lending";

        return view('public.lendings.show', [
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
     * Display the return confirmation page.
     */
    public function returnConfirmation()
    {
        $title = "ImmaLend - Return Confirmation";

        return view('admin.lendings.return-confirmation', [
            'title' => $title
        ]);
    }

    /**
     * Display the lending history page.
     */
    public function lendingHistory()
    {
        $title = "ImmaLend - Lending History";

        return view('admin.lendings.lending-history', [
            'title' => $title
        ]);
    }

    /**
     * Display the lending history page for users.
     */
    public function userLendingHistory()
    {
        $title = "ImmaLend - Lending History";

        return view('public.lendings.lending-history', [
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