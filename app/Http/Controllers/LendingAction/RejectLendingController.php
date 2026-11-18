<?php

namespace App\Http\Controllers\LendingAction;

use App\Enums\LendingStatus;
use App\Http\Controllers\Controller;
use App\Models\Lending;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RejectLendingController extends Controller
{
    /**
     * Tolak permintaan peminjaman yang masih pending.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'lending_id' => ['required', 'integer', 'exists:lendings,id'],
        ]);

        $lending = Lending::findOrFail($validated['lending_id']);

        // Hanya permintaan yang masih pending yang boleh ditolak.
        if ($lending->status !== LendingStatus::Pending) {
            return redirect()
                ->route('lendings.admin-index')
                ->with('error', 'Only pending requests can be rejected.');
        }

        $lending->update([
            'status' => LendingStatus::Rejected,
            'processed_by' => $request->user()->id,
        ]);

        return redirect()
            ->route('lendings.admin-index')
            ->with('success', 'Borrowing request has been rejected.');
    }
}