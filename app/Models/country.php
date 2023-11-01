<?php

namespace App\Models;

use App\Models\Scopes\CurrentCountry;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Cache;

class country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    public $fillable = ['name', 'code', 'user_id'];
    public $timestamps = false;


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }


    protected static function booted()
    {
        // add global Scope
        self::addGlobalScope(new CurrentCountry());

        self::created(function (country $country) {
            Cache::flush('info');

        });

        self::updated(function (country $country) {
            Cache::flush('info');
        });

        self::deleted(function (country $country) {
            Cache::flush('info');
        });
    }

    // add local scope
    public function scopePublished(Builder $builder)
    {
        $builder->whereNotNull('is_published');
    }

}
