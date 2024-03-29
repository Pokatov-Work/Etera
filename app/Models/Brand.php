<?php

namespace App\Models;

use App\Lib\SiteHelp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'logo',
        'active',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Brand $brand) {
            $brand->slug = $brand->slug ?? SiteHelp::transliterate($brand->title);
        });
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
