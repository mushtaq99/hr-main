<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Cache;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug'];



    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public static function booted()
    {
        self::created(function (Role $role){
            Cache::flush();
        });
        self::updated(function (Role $role){
            Cache::flush();
        });
        self::deleted(function (Role $role){
            Cache::flush();
        });
    }

}
