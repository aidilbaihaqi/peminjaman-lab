<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    protected $guarded = ['id'];

    public function laboratorium(): BelongsTo {
        return $this->belongsTo(Laboratorium::class);
    }
}
