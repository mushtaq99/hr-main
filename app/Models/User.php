<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($roles): bool
    {
        if(is_string($roles)) {
            return $this->roles->contains('slug', $roles);
        }
        return !! $roles->intersect($this->roles)->count();
    }
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function profiles(): HasMany
    {
        return $this->hasMany(Profile::class, 'created_by');
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class, 'created_by');
    }

    public function bank()
    {
        return $this->hasOne(BankAccount::class);
    }

    public function banks()
    {
        return $this->hasMany(BankAccount::class,'created_by');
    }

    public function contact()
    {
        return $this->hasOne(EmergencyContact::class);
    }

    public function contacts()
    {
        return $this->hasMany(EmergencyContact::class,'created_by');
    }
}
