<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function coffee()
    {
        return view("coffee");
    }

    public function management()
    {
        
        return view("management");
    }

    public function courtage()
    {
        return view("courtage");
    }

    public function health()
    {
        return view("health");
    }
    
    public function language(String $locale)
    {
        $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');
        $yolo = session(['locale' => $locale]);
        return back();
    }
}
