<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bank extends Model
{
    use HasFactory;
    public $table = 'banks';

    public function users(): BelongsToMany{
        return $this->belongToMany(Bank::class , 'bankaccounts' , 'bankId' , 'userId');
    }

    public function bankDetail(): HasOne
    {
        return $this->hasOne(BankDetail::class, 'bankId', 'id');
    }
}
