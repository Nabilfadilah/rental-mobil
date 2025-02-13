<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory, SoftDeletes;

    // menentukan premary key ke model apa?
    protected $table = 'transaksis';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'user_id', 'mobil_id', 'nama', 'ponsel', 'alamat', 'lama', 'tgl_pesan', 'total', 'status'];

    // membuat relations nya dengan user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // membuat relations nya dengan mobil
    public function mobil(): BelongsTo
    {
        return $this->belongsTo(Mobil::class);
    }
}
