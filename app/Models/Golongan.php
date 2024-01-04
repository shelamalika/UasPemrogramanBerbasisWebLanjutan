<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Golongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'model', 'ukuran', 'tgl_pesan', 'tgl_selesai'
    ];

    public function pelanggans(): HasMany
    {
        return $this->hasMany(Pelanggan::class, 'id_gol', 'id');
    }
}
