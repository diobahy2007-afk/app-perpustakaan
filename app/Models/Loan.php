<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Loan extends Model
{
    protected $fillable = [
        'member_id', 'user_id', 'tanggal_pinjam',
        'tanggal_kembali', 'tanggal_dikembalikan', 'status',
    ];

    // Satu peminjaman dimiliki satu anggota
    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    // Satu peminjaman dicatat oleh satu petugas
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Satu peminjaman punya banyak item buku
    public function loanItems(): HasMany
    {
        return $this->hasMany(LoanItem::class);
    }
}