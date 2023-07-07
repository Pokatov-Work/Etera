<?php

namespace App\Models;

use App\Lib\SiteHelp;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
}
