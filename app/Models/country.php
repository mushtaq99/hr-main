<?php

namespace App\Models;

use App\Models\Scopes\CurrentCountry;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
// add global Scope
    protected static function booted()
    {
        self::addGlobalScope(new CurrentCountry());
    }

    // add local scope
    public function scopePublished(Builder $builder)
    {
        $builder->whereNotNull('is_published');
    }

}
