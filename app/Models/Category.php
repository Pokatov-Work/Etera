<?php

namespace App\Models;

use App\Lib\SiteHelp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends BaseModel
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

        static::creating(function (Category $category) {
            $category->slug = $category->slug ?? SiteHelp::transliterate($category->title);
        });
    }
}
