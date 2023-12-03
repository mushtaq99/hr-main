<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{use HasFactory;

    protected $table = 'profiles';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'mobile_no',
        'alternate_mobile_no',
        'cnic',
        'gender',
        'date_of_birth',
        'marital_status',
        'father_name',
        'spouse_name',
        'spouse_cnic',
        'created_by',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }



}
