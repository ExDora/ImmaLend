<?php

namespace App\Http\Controllers\LendingAction;

use App\Enums\LendingStatus;
use App\Http\Controllers\Controller;
use App\Models\Lending;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApproveLendingController extends Controller
{
    /**
     * Setujui permintaan peminjaman yang masih pending dan kurangi stok.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'lending_id' => ['required', 'integer', 'exists:lendings,id'],
        ]);

        $lending = Lending::with('item')->findOrFail($validated['lending_id']);

        // Hanya permintaan yang masih pending yang boleh disetujui.
        if ($lending->status !== LendingStatus::Pending) {
            return redirect()
                ->route('lendings.admin-index')
                ->with('error', 'Only pending requests can be approved.');
        }

        // Stok bisa berkurang sejak user mengajukan, jadi cek lagi.
        if ($lending->amount > $lending->item->available) {
            return redirect()
                ->route('lendings.admin-index')
                ->with('error', "Not enough stock: only {$lending->item->available} unit(s) of {$lending->item->name} available.");
        }

        // Dua perubahan harus berhasil bersamaan, jadi dibungkus transaksi.
        DB::transaction(function () use ($lending, $request) {
            $lending->update([
                'status' => LendingStatus::Approved,
                'processed_by' => $request->user()->id,
            ]);

            $lending->item->decrement('available', $lending->amount);
        });

        return redirect()
            ->route('lendings.admin-index')
            ->with('success', 'Borrowing request has been approved.');
    }
}