<?php

namespace App\Models;

use App\Enums\LendingStatus;
use Database\Factories\LendingFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['user_id', 'item_id', 'amount', 'borrow_at', 'return_at', 'return_requested_at', 'returned_at', 'reason', 'status', 'processed_by'])]
class Lending extends Model
{
    /** @use HasFactory<LendingFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'borrow_at' => 'datetime',
            'return_at' => 'datetime',
            'return_requested_at' => 'datetime',
            'returned_at' => 'datetime',
            'status' => LendingStatus::class,
        ];
    }

    /**
     * Status yang ditampilkan ke user, sesuai desain.
     * Borrowed, Upcoming, dan Overdue dihitung dari tanggal.
     */
    public function displayStatus(): string
    {
        return match (true) {
            $this->status === LendingStatus::Pending => 'Pending',
            $this->status === LendingStatus::Rejected => 'Rejected',
            $this->status === LendingStatus::Cancelled => 'Cancelled',
            $this->status === LendingStatus::Returned => 'Completed',
            $this->status === LendingStatus::ReturnRequested => 'Waiting confirmation',
            $this->return_at->isPast() => 'Overdue',
            $this->borrow_at->isFuture() => 'Upcoming',
            default => 'Borrowed',
        };
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }

    public function processor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'processed_by');
    }
}