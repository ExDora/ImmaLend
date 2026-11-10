<?php

namespace App\Models;

use Database\Factories\LendingFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['user_id', 'item_id', 'amount', 'borrow_at', 'return_at', 'returned_at', 'reason', 'status', 'processed_by'])]
class Lending extends Model
{
    /** @use HasFactory<LendingFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'borrow_at' => 'datetime',
            'return_at' => 'datetime',
            'returned_at' => 'datetime',
        ];
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
