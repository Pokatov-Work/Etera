<?php

namespace App\Models;

use App\Lib\SiteHelp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'logo',
        'active',
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Category $category) {
            $category->slug = $category->slug ?? SiteHelp::transliterate($category->title);
        });
    }
}
