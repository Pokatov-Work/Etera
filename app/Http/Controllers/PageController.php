<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    public function getIndex ()
    {
        $page = Page::getObjSlug('home');

        return view('pages.index', compact('page'));
    }

    public function getAbout ()
    {
        $page = Page::getObjSlug('home');

        return view('pages.index', compact('page'));
    }
}
