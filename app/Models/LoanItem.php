<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LoanItem extends Model
{
    protected $fillable = ['loan_id', 'book_id'];

    // Satu item milik satu peminjaman
    public function loan(): BelongsTo
    {
        return $this->belongsTo(Loan::class);
    }

    // Satu item merujuk ke satu buku
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}