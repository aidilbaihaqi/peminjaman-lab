<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Laboratorium extends Model
{
    protected $guarded = ['id'];

    public function peminjaman(): HasOne {
        return $this->hasOne(Peminjaman::class);
    }
}
