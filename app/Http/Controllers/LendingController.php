<?php

namespace App\Http\Controllers;

use App\Enums\LendingStatus;
use App\Models\Item;
use App\Models\Lending;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

class LendingController extends Controller
{
    // Form hanya meminta tanggal, jadi jam pinjam dan kembali memakai jam standar sekolah.
    private const PICKUP_TIME = '07:00';
    private const RETURN_TIME = '15:00';

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
     * Form peminjaman. Wajib membawa ?item=ID dari halaman List of Items.
     */
    public function create(Request $request)
    {
        $item = Item::with('category')->find($request->query('item'));

        if (!$item) {
            return redirect()->route('items.index')
                ->with('error', 'Please choose an item first.');
        }

        if ($item->available < 1) {
            return redirect()->route('items.index')
                ->with('error', "{$item->name} is not available right now.");
        }

        return view('public.lendings.create', [
            'title' => 'ImmaLend - Borrow Item',
            'item' => $item,
        ]);
    }

    /**
     * Simpan pengajuan peminjaman dengan status pending.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'item_id' => ['required', 'exists:items,id'],
            'amount' => ['required', 'integer', 'min:1'],
            'borrow_date' => ['required', 'date', 'after_or_equal:today'],
            'return_date' => ['required', 'date', 'after_or_equal:borrow_date'],
            'reason' => ['required', 'string', 'max:500'],
        ]);

        $item = Item::findOrFail($validated['item_id']);

        if ($validated['amount'] > $item->available) {
            throw ValidationException::withMessages([
                'amount' => "Only {$item->available} unit(s) of {$item->name} available.",
            ]);
        }

        $lending = Lending::create([
            'user_id' => $request->user()->id,
            'item_id' => $item->id,
            'amount' => $validated['amount'],
            'borrow_at' => Carbon::parse($validated['borrow_date'])->setTimeFromTimeString(self::PICKUP_TIME),
            'return_at' => Carbon::parse($validated['return_date'])->setTimeFromTimeString(self::RETURN_TIME),
            'reason' => $validated['reason'],
            'status' => LendingStatus::Pending,
        ]);

        return redirect()->route('lendings.show', $lending->id);
    }

    /**
     * Halaman Request Success.
     */
    public function show(Request $request, string $id)
    {
        $lending = Lending::with(['item', 'user.profile.schoolClass'])->findOrFail($id);

        // User biasa hanya boleh melihat peminjamannya sendiri.
        abort_unless(
            $request->user()->isAdmin() || $lending->user_id === $request->user()->id,
            403
        );

        return view('public.lendings.show', [
            'title' => 'ImmaLend - Request Success',
            'lending' => (object) [
                'name' => $lending->user->name,
                'class' => $lending->user->profile?->schoolClass?->name ?? '-',
                'item_name' => $lending->item->name,
                'amount' => $lending->amount,
                'loan_date' => $lending->borrow_at->format('d F Y'),
                'return_date' => $lending->return_at->format('d F Y'),
                'claim_deadline' => $lending->borrow_at->format('d F Y'),
            ],
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