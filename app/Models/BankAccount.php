<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankAccount extends Model
{
    protected $fillable = [
        'user_id',
        'bank_name',
        'branch_code',
        'branch_address',
        'account_title',
        'account_number',
        'iban',
        'created_by',


    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function creator():BelongsTo
    {
        return $this->belongsTo(User::class,'created_by');
    }
}

