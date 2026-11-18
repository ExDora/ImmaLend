<?php

namespace App\Models;

use Database\Factories\ItemFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['category_id', 'code', 'name', 'image', 'location', 'condition', 'specifications', 'quantity', 'available'])]
class Item extends Model
{
    /** @use HasFactory<ItemFactory> */
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function lendings(): HasMany
    {
        return $this->hasMany(Lending::class);
    }

    /** URL gambar: file bawaan project (images/...) atau hasil upload (storage). */
    public function imageUrl(): ?string
    {
        if (!$this->image) {
            return null;
        }

        return str_starts_with($this->image, 'images/')
            ? asset($this->image)
            : asset('storage/' . $this->image);
    }
}