<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class District extends Model
{
    protected $fillable = [
        'name',
        'operational',
        'code',
        'operational_district_id',
        'division',
    ];

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class, 'district_id');
    }

}
