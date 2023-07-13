<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends BaseModel
{
    /**
     * Default View (если не задано) для отображения только контента
     */
    const CONTENT_VIEW = 'pages.content_page';

    protected $fillable = [
        'slug',
        'name',
        'active',
        'config',
        'data',
    ];

    protected $casts = [
        'config' => 'json',
        'data' => 'json',
    ];

    public string $view;

    public function getView(): string
    {
        $this->view = (! empty($this->config['view'])) ? $this->config['view'] : self::CONTENT_VIEW;

        return $this->view;
    }
}
